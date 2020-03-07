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
                            <li class="tab-border"><a href="#" class="tab-item" data-index="1">Home</a></li>
                            <li><a href="#" class="tab-item" data-index="2">Channels</a></li>
                            <li><a href="#" class="tab-item" data-index="3">Videos</a></li>
                            <li><a href="#" class="tab-item" data-index="4">About</a></li>
                        </ul>
                   </div>
               </div>
           </div>

           {{-- start of profile section  --}}
           <div class="col-md-12 tab-section show" id="tab-section-1">
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('image/user.jpg')}}" class="rounded-circle" width="150px" height="150px" alt="">
                </div>
                 <div class="card-body">
                     <form action="" method="POST">
                         <div class="col-md-12 form-group">
                             <label class="form-control-label text-danger" style="font-size:24px" for="">Full Name</label>
                             <input type="text" name="fullname" placeholder="Enter Your Fullname" class="form-control">
                         </div>
                         <div class="col-md-12 form-group">
                             <label class="form-control-label text-danger" style="font-size:24px" for="">Location</label>
                             <input type="text" name="location" placeholder="Enter Your Location" class="form-control">
                         </div>
                         <div class="col-md-12 form-group">
                             <label class="form-control-label text-danger" style="font-size:24px" for="">Email</label>
                             <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                         </div>
                         <div class="col-md-12 form-group">
                             <label class="form-control-label text-danger"
                              style="font-size:24px;display:block;" for="image">Image</label>
                             <input type="file" name="image"id="image" accept="image/*" >
                         </div>
                         <div class="col-md-12 form-group">
                              <input type="submit" class="btn btn-danger btn-lg" value="Update" name="update">
                         </div>
                     </form>
                 </div>
            </div>
        </div>
        {{-- end of profile section  --}}

        {{-- start of channels section  --}}
        <div class="col-md-12 tab-section" id="tab-section-2">
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('image/user.jpg')}}" class="rounded-circle" width="150px" height="150px" alt="">
                </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter Your Fullname" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Location</label>
                                <input type="text" name="location" placeholder="Enter Your Location" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger"
                                style="font-size:24px;display:block;" for="image">Image</label>
                                <input type="file" name="image"id="image" accept="image/*" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-danger btn-lg" value="Update" name="update">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        {{-- end of profile section  --}}

        {{-- start of video section  --}}
        <div class="col-md-12 tab-section" id="tab-section-3">
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('image/user.jpg')}}" class="rounded-circle" width="150px" height="150px" alt="">
                </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter Your Fullname" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Location</label>
                                <input type="text" name="location" placeholder="Enter Your Location" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger"
                                style="font-size:24px;display:block;" for="image">Image</label>
                                <input type="file" name="image"id="image" accept="image/*" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-danger btn-lg" value="Update" name="update">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        {{-- end of profile section  --}}

           {{-- start of about section  --}}
           <div class="col-md-12 tab-section" id="tab-section-4">
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('image/user.jpg')}}" class="rounded-circle" width="150px" height="150px" alt="">
                </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter Your Fullname" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Location</label>
                                <input type="text" name="location" placeholder="Enter Your Location" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger" style="font-size:24px" for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-control-label text-danger"
                                style="font-size:24px;display:block;" for="image">Image</label>
                                <input type="file" name="image"id="image" accept="image/*" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-danger btn-lg" value="Update" name="update">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        {{-- end of profile section  --}}
      </div>
@endsection
