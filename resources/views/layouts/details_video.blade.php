@extends('layouts.app')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')

<style>

.comment-list {
    padding: 0;
    margin: 0;
}
.comment-list li {
    padding: 0;
    margin: 0 0 30px 0;
    float: left;
    width: 100%;
    clear: both;
    list-style: none !important;
}
.comment-list li .vcard {
    width: 80px;
    float: left;
}
.comment-list li .comment-body {
    float: right;
    width: calc(100% - 80px);
}
.comment-list li .comment-body .meta {
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: .1em;
    color: #ccc;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
</style>

<div class="container">
      <div class="row">
          <div class="col-md-12">
               <video width="100%"  controls src="{{asset('video/Singleton Design Pattern.mp4')}}"></video>
          </div>
          <div class="col-md-12">
                <h2 class="text-dark">
                    Laravel 5.8 Tutorial From Scratch - e21 -
                    Artisan Authentication - Register, Login & Password Reset
                </h2>
          </div>
          <div class="col-md-4 d-flex justify-content-between">
               <p style="font-size:20px;" class="text-secondary"><span  id="total_views">38764</span> views</p>
               <a href="#" class="text-secondary " style="font-size:25px;"><i class="fa fa-thumbs-up"></i></a>
               <a href="#" class="text-secondary" style="font-size:25px;"><i class="fa fa-thumbs-down"></i></a>
          </div>
          <div class="col-md-4 offset-4">
                <a href="#" class="text-secondary" >
                    <span style="font-size:20px;" ><i class="fa fa-plus"></i></span>
                    Watch Later
                </a>
          </div>
          <div class="col-md-12">
               <div class="row">
                    <div class="col-md-3 d-flex">
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
          </div>
          <div class="col-md-12">
            <div class="pt-5 mt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                  <li class="comment mt-2" style="list-style:none;">
                         <div class="d-flex ">
                            <div class="vcard bio">
                                <img width="50px" height="50px" src="{{asset("image/user.jpg")}}" class="rounded-circle" alt="">
                            </div>
                            <div class="d-flex flex-column ml-2">
                                <h3 class="text-secondary">John Doe</h3>
                                <div class="meta text-secondary">October 03, 2018 at 2:21pm</div>
                            </div>
                         </div>

                        <div class="comment-body ml-5 pl-2">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        </div>
                  </li>
                  <li class="comment mt-2" style="list-style:none;">
                        <div class="d-flex ">
                        <div class="vcard bio">
                            <img width="50px" height="50px" src="{{asset("image/user.jpg")}}" class="rounded-circle" alt="">
                        </div>
                        <div class="d-flex flex-column ml-2">
                            <h3 class="text-secondary">John Doe</h3>
                            <div class="meta text-secondary">October 03, 2018 at 2:21pm</div>
                        </div>
                        </div>

                    <div class="comment-body ml-5 pl-2">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    </div>
                </li>


                </ul>
                <!-- END comment-list -->
              </div>
          </div>
      </div>
</div>
@endsection
