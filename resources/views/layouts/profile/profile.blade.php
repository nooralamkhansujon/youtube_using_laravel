@extends('layouts.app')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
      <div class="row">
           <div class="col-md-12">
               <div class="tab">
                   <div class="tab-header">
                        <ul class="tab-group">
                            <li class="tab-item">
                                <a href="{{route('profile.home')}}">Home</a>
                            </li>
                            <li class="tab-item">
                                 <a href="{{route('profile.channel')}}">Channels</a>
                            </li>
                            <li class="tab-item tab-border">
                                 <a href="{{route("profile.profile")}}">Profile</a>
                            </li>
                            <li class="tab-item">
                                 <a href="{{route('profile.about')}}">About</a>
                            </li>
                        </ul>
                   </div>
               </div>
           </div>


        {{-- start of profile section  --}}
        <div class="col-md-12" id="tab-section-3">
             {{-- start of first row  --}}
             @include('layouts.partials.profile-section')
             {{-- end of first row  --}}
        </div>
        {{-- end of profile section  --}}
    </div>
@endsection


@section('scripts')
  <script  defer type="text/javascript">
        //layouts/channel view
        function slugify(text)
        {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
        video_title  = document.getElementById('title');
        video_slug   = document.getElementById('slug');
        video_title.addEventListener('keyup',function(event){
            let value = this.value;
            video_slug.innerHTML = value;
        });
  </script>

@endsection
