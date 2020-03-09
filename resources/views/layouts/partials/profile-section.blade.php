{{-- start of profile  --}}
<div class="card">
    <div class="card-header">
        <img src="{{asset('image/user.jpg')}}" class="rounded-circle" width="150px" height="150px" alt="">
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="col-md-12 form-group">
                <label class="form-control-label text-danger" style="font-size:24px" for="fullname">Full Name</label>
              <input type="text" name="fullname" value="{{$profile->fullname}}" id="fullname" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-control-label text-danger" style="font-size:24px" for="location">Location</label>
                <input type="text" name="location" id="location" value="{{$profile->location}}" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-control-label text-danger" style="font-size:24px" for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$profile->user->email}}" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <img src="{{asset('image/user.jpg')}}" width="50px" height="50px" alt="">
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
{{-- end of profile  --}}

{{-- start of channel  --}}
    <div class="card mb-3">
        <div class="d-flex justify-content-between">
               <h1 class="text-secondary card-header border-bottom pb-2">Create Channel</h1>
               <button class="btn btn-danger" id="create_channel">Create channel</button>
        </div>

        <div class="card-body channel" id="channel_body">
            <form action="" method="POST">
                <div class="col-md-12 form-group">
                    <label for="name" class="form-control-label text-danger" style="font-size:20px;text-transform:capitalize">
                        Channel Name</label>
                    <input type="text" name="name" placeholder="Enter Channel Name" class="form-control" id="name">
                </div>
                <div class="col-md-12 form-group">
                     <label for="description" class="form-control-label text-danger" style="font-size:20px;text-transform:capitalize;">Description</label>
                     <textarea type="text" name="description" placeholder="Enter Channel Description" class="form-control" id="description">
                     </textarea>
                </div>
                <div class="col-md-12 form-group">
                     <label for="image" class="form-control-label text-danger" style="font-size:20px;text-transform:capitalize;">Image</label>
                     <input type="file" name="image" class="form-control" accept="image/*">
                 </div>
                 <div class="col-md-12 form-group">
                     <input type="submit" name="channel" value="Create Channel" class="btn btn-danger">
                 </div>
           </form>
        </div>
    </div>
{{-- end of channel section  --}}


