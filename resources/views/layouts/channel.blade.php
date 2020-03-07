@extends('layouts.app')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
      <div class="row">
         <div class="col-md-12 mb-3">
            <img src="{{asset('image/user.jpg')}}" class="w-100" style="height:300px" alt="">
         </div>
          <div class="col-md-3 d-flex ">
                <img width="50px" height="50px" src="{{asset("image/user.jpg")}}" class="rounded-circle" alt="">
                <div class="d-flex flex-column ml-2">
                <p class="text-danger" style="font-size:20px;">Coder's Tape</p>
                <p class="text-secondary" style="font-size:18px;"><span>3.5</span>k Subscriber</p>
                </div>
         </div>
         <div class="col-md-5 offset-4 d-flex justify-content-end">
             <button class="btn btn-danger btn-lg" style="height:60px;">Subscribe</button>
         </div>
      </div>
@endsection
