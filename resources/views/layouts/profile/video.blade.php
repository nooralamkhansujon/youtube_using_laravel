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
                            <li class="tab-border tab-item" >
                                <a href="{{route('profile.home')}}">Home</a>
                            </li>
                            <li class="tab-item">
                                  <a href="{{route('profile.channel')}}">Channels</a>
                            </li>
                            <li class="tab-item">
                                 <a href="{{route('profile.profile')}}">Profile</a>
                            </li>
                            <li class="tab-item">
                                <a href="{{route('profile.about')}}">About</a>
                            </li>
                        </ul>
                   </div>
               </div>
           </div>

        {{-- start of profile section  --}}
        <div class="col-md-12 tab-section show" id="tab-section-1">
             @include('layouts.partials.video-section')
        </div>
        {{-- end of profile section  --}}

    </div>
@endsection
