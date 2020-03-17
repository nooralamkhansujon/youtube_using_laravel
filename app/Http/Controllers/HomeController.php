<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use App\Image;
use App\Channel;
use App\Video;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $videos          = Video::all();
        return view('home',compact('videos','subscribevideo'));
    }
    public function details()
    {
        return view('layouts.details_video');
    }
    public function home()
    {
        $videos          = User::find(auth()->user()->id)->videos()->orderBy('id','desc')->get();
        $subscribevideo  = User::find(auth()->user()->id)->subscribeVideo();
        return view('layouts.profile.video',compact('videos','subscribevideo'));
    }

    public function profile()
    {
        $profile = Profile::where('user_id',auth()->user()->id)->get()[0];
        return view('layouts.profile.profile',compact('profile'));
    }

    public function channel()
    {
        $channels = Channel::where('user_id',auth()->user()->id)->get();
        return view('layouts.profile.channel',compact('channels'));
    }

    public function about()
    {
        return view('layouts.profile.about');
    }

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname'  => ['required','string',Rule::unique('profiles')->ignore(auth()->user()->id)],
            'location'  => ['required','string'],
            'email'     => ['required','email',Rule::unique('users')->ignore(auth()->user()->id)],
            'image'     => ['image','mimes:jpeg,jpg,png']
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        //update profile
        $profile           = Profile::where('user_id',auth()->user()->id)->get()[0];
        $profile->fullname = $request->fullname; // save profile fullname
        $profile->location = $request->location; // save profile location
        $profile->save();

        $user        = User::find(auth()->user()->id); // find auth user object
        $user->email = $request->email; // update $user email
        $user->save(); // then save user in database

        if($request->hasFile('image'))
        {
            // check if profile image already exist then
            if(isset($profile->image->url))
            {
                //if file exist then delete the image from the storage directory
                if(file_exists(public_path('storage/'.$profile->image->url)))
                {
                    unlink(public_path('storage/'.$profile->image->url));
                }
                $image            = $profile->image;
                $image->url       = $this->thumbnail($request->file('image'),'profile','profile',200,200);//this function return image path
                $image->save();
            }
            //else not exist then create new Image
            else{
                $image                 = new Image();
                $image->imageable_id   = $profile->id;
                $image->imageable_type = "App\Profile";
                $image->url            = $this->thumbnail($request->image,'profile','profile',200,200);
                $image->save();
            }
        }
        $this->setSuccess('Your profile has been updated');
        return back();
    }

    public function createChannel(Request $request)
    {
        //validate the request
        $validator = Validator::make($request->all(), [
            'name'         => ['required','string','unique:channels,name'],
            'description'  => ['required','string'],
            'image'        => ['image','mimes:jpeg,jpg,png']
        ]);

        //if validate fail then redirect back with errors
        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        //create channel
        $channel  = Channel::create([
                             'name'        => $request->name,
                             'description' => $request->description,
                             'user_id'     => auth()->user()->id,
                             'slug'        => $request->slug
                    ]);

        if($channel)
        {
            $image                 = new Image(); //create new image object
            $image->imageable_id   = $channel->id;  //then save channel id as imageable_id
            $image->imageable_type = "App\Channel";  // then save channelType in imageable_type
            $image->url            = $this->thumbnail($request->image,'Channel','Channel',200,200); // this function return image path
            $image->save(); // save image object in database
            $this->setSuccess('New Channel has been created');  //
            return back();
        }

        $this->setError('Error! Something is Wrong');
        return back();
    }

    public function channels()
    {
        $channels = Channel::all();
        return view('layouts.profile.channel',compact('channels'));
    }



}
