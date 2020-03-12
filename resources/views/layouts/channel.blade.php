@extends('layouts.app')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
      <div class="row">
         <div class="col-md-12 mb-3 img-box">
            <img src="{{asset('storage/'.$channel->image->url)}}" class="w-100" style="height:300px" alt="">
            <div class="upload-image">
                 <label for="upload_image" class="btn btn-secondary">Upload/Image</label>
                 <input type="file" id="upload_image" style="display:none;">
            </div>
         </div>
          <div class="col-md-3 d-flex ">
               <img width="50px" height="50px" src="{{asset("storage/".$channel->image->url)}}"
                  class="rounded-circle" alt="{{$channel->name}}">
                <div class="d-flex flex-column ml-2">
                  <p class="text-danger" style="font-size:20px;">{{$channel->name}}</p>
                  <p class="text-secondary" style="font-size:18px;"><span>{{$channel->total_subscribers()}}</span> Subscriber</p>
                </div>
         </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-danger border-bottom pb-2">Upload Videos</h1>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                 @if(session()->has('message'))
                     <div class="alert alert-{{session()->get('type')}}">
                              {{session()->get('message')}}
                     </div>
                 @endif
            </div>
           <form action="{{route('channel.uploadvideo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 form-group">
                    <label for="title" class="text-secondary" style="font-size:20px;">Video Title</label>
                    <input type="text" name="title" id="title"
                     class="form-control"  placeholder="Enter Your Title">
                     <input type="hidden" name="slug" id="slugInput" value="{{old('slug')}}"  >
                    <p class="text-secondary">{{env('APP_URL')}} <span id="slug"></span></p>
                    <input type="hidden" name="channel_id" value="{{$channel->id}}">
                </div>

                <div class="col-md-12 form-group">
                    <label for="title" class="text-secondary" style="font-size:20px;">Video Url</label>
                    <input type="file" name="url" id="url" class="form-control" accept="video/*">
                </div>

                <div class="col-md-12 form-group">
                    <label for="description" class="text-secondary" style="font-size:20px;">Video Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-danger btn-lg">Upload Video</button>
                </div>
        </form>
    </div>
</div>




  <div class="row">
    {{-- first column  --}}
    <div class="col-md-12 mb-3 py-2 border-bottom">
        <h1 class="text-secondary">Vidoes</h1>
    </div>

    @foreach($channel->videos as $video)
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#"><video width="100%"  controls src="{{asset('storage/'.$video->url)}}"></video></a>
                    </div>
                    <div class="col-md-12">
                        <div class="row">

                                <div class="col-md-8">
                                    <p class="text-secondary">{{ $video->name }}</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="dropdown">
                                        <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-secondary">
                                                <img width="20px" src="{{asset('svg/plus.svg')}}" alt="">
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Watch Later</a>
                                            <a class="dropdown-item" href="#">Tag</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="row">
                        <div class="col-md-12">
                           <h5 class="text-danger">{{$channel->name}}</h5>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <p class="text-secondary"><span></span> Views</p>
                            <p class="text-secondary">1 week Ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- end of first column  --}}



  </div>
  {{-- end of first row  --}}


@endsection


@section('scripts')
  <script  type="text/javascript">
        //layouts/channel view

        $(document).ready(function(){
            function slugify(text)
            {
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Replace spaces with -
                    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                    .replace(/^-+/, '')             // Trim - from start of text
                    .replace(/-+$/, '');            // Trim - from end of text
            }
            const video_title  = document.getElementById('title');
            const video_slug   = document.getElementById('slug');
            const slug_input   = document.getElementById('slugInput');
            video_title.addEventListener('keyup',function(event){
                   video_slug.innerHTML = slugify(this.value);
                   slug_input.value     = slugify(this.value);
            });
        });


  </script>

@endsection
