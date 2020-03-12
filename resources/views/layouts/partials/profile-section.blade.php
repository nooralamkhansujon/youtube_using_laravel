{{-- start of profile  --}}
<div class="card">
    <div class="card-header">
        <img src="{{(isset($profile->image->url))?asset('storage/'.$profile->image->url):asset('image/user.jpg')}}"
        class="rounded-circle" width="150px" height="150px" alt="">
    </div>
    <div class="card-body">
        @if(session()->has('message'))
           <div class="alert alert-{{session()->get('type')}}">
                {{ session()->get('message') }}
            </div>
        @endif

       <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 form-group">
                <label class="form-control-label text-secondary" style="font-size:24px" for="fullname">Full Name</label>
                <input type="text" name="fullname" value="{{$profile->fullname}}" id="fullname" class="form-control">
                @if($errors->has('fullname'))
                   <span class="text-danger">
                       {{$errors->first('fullname')}}
                    </span>
                @endif
            </div>
            <div class="col-md-12 form-group">
                <label class="form-control-label text-secondary" style="font-size:24px" for="location">Location</label>
                <input type="text" name="location" id="location" value="{{$profile->location}}" class="form-control">
                @if($errors->has('location'))
                   <span class="text-danger">{{$errors->first('location')}}</span>
                @endif
            </div>
            <div class="col-md-12 form-group">
                <label class="form-control-label text-secondary" style="font-size:24px" for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$profile->user->email}}" class="form-control">
                @if($errors->has('email'))
                  <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="col-md-12 form-group">
                <img src="{{(isset($profile->image))?asset('storage/'.$profile->image->url):asset('image/user.jpg')}}" width="50px" height="50px" alt="">
                <label class="form-control-label text-secondary"
                style="font-size:24px;display:block;" for="image">Image</label>
                <input type="file" name="image" id="image"  >
                @if($errors->has('image'))
                   <span class="text-danger">{{$errors->first('image')}}</span>
                @endif
            </div>
            <div class="col-md-12 form-group">
                <input type="submit" class="btn btn-danger btn-lg" value="Update" name="update">
            </div>
        </form>
    </div>
</div>
{{-- end of profile  --}}


{{-- start of channel  --}}
    <div class="card mb-3 mt-3">
        <div class="d-flex justify-content-between">
               <h1 class="text-secondary p-2">Create Channel</h1>
               <button class="btn btn-danger" id="create_channel">Create channel</button>
        </div>

        <div class="card-body channel" id="channel_body">
            <form action="{{route('channel.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 form-group">
                    <label for="name" class="form-control-label text-danger"
                        style="font-size:20px;text-transform:capitalize">
                        Channel Name
                    </label>
                    <input type="text" name="name" placeholder="Enter Channel Name" class="form-control" id="name">
                    <input type="hidden" name="slug" id="slugInput" value="{{old('slug')}}"  >
                    <p class="text-secondary">{{env('APP_URL')}} <span id="slug"></span></p>
                </div>
                <div class="col-md-12 form-group">
                    <label for="description" class="form-control-label text-danger"
                        style="font-size:20px;text-transform:capitalize;">
                        Description
                    </label>
                     <textarea type="text" name="description" placeholder="Enter Channel Description"
                     class="form-control" id="description">
                     </textarea>
                </div>
                <div class="col-md-12 form-group">
                     <label for="image" class="form-control-label text-danger"
                     style="font-size:20px;text-transform:capitalize;">Image</label>
                     <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                     <input type="submit" name="channel" value="Create Channel" class="btn btn-danger">
                </div>
           </form>
        </div>
    </div>
{{-- end of channel section  --}}



@section('scripts')

<script>
    $(document).ready(function(){
        function createChannel()
       {
            let create_channel_button = document.getElementById('create_channel');
            let create_channel = document.getElementById('channel_body');
            create_channel_button.addEventListener('click',function(){
                    create_channel.classList.toggle('show');
            });
        }
        createChannel();

        function slugify(text)
        {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
        const channel_name   = document.getElementById('name');
        const channel_slug   = document.getElementById('slug');
        const slug_input     = document.getElementById('slugInput');
        channel_name.addEventListener('keyup',function(event){
                channel_slug.innerHTML = slugify(this.value);
                slug_input.value       = slugify(this.value);
        });
    });

</script>

@endsection
