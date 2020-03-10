<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use App\Image;
use App\Channel;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function details()
    {
        return view('layouts.details_video');
    }
    public function home()
    {
        return view('layouts.profile.video');
    }

    public function profile()
    {
        $profile = Profile::where('user_id',auth()->user()->id)->get()[0];
        return view('layouts.profile.profile',compact('profile'));
    }

    public function channel()
    {
        return view('layouts.profile.channel');
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
        $profile->fullname = $request->fullname;
        $profile->location = $request->location;
        $profile->save();

        $user        = auth()->user();
        $user->email = $request->email;
        $user->save();

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
                $image                 = $profile->image;
                $image->url            = $this->thumbnail($request->file('image'),'profile','profile',200,200);
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
        $channel    = Channel::create([
                             'name'        => $request->name,
                             'description' => $request->description,
                             'user_id'     => auth()->user()->id
                        ]);

        if($channel)
        {
            $image                 = new Image();
            $image->imageable_id   = $channel->id;
            $image->imageable_type = "App\Channel";
            $image->url            = $this->thumbnail($request->image,'Channel','Channel',200,200);
            $image->save();

            session()->flash('msg','Your Channel is created!');
            session()->flash('type','success');
            return back();
        }





    }


}
