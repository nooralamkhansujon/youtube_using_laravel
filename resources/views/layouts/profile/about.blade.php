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
                            <li class="tab-border tab-item" data-index="1">
                                <a href="{{route('profile.home')}}" >Home</a>
                            </li>
                            <li class="tab-item" data-index="2">
                               <a href="{{route('profile.channel')}}">Channels</a>
                            </li>
                            <li class="tab-item" data-index="3">
                                 <a href="{{route("profile.profile")}}">Profile</a>
                            </li>
                            <li class="tab-item tab-border" data-index="4">
                                <a href="{{route('profile.about')}}">About</a>
                            </li>
                        </ul>
                   </div>
               </div>
           </div>

        {{-- start of about section  --}}
        <div class="col-md-12" id="tab-section-4">
             {{-- start of first row  --}}
              @include('layouts.partials.about-section')
             {{-- end of first row  --}}
        </div>
        {{-- end of about section  --}}
    </div>
@endsection
