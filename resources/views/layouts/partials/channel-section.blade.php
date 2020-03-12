<div class="d-flex justify-content-between mb-4 border-bottom pb-3">
    <h1 class="text-secondary">Featured Channels</h1>
</div>
{{-- //featured channels section  --}}
<div class="row mb-4">
    @foreach($channels as $channel)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body ml-3">
                      <a href="{{route('channel.index',$channel)}}">
                            <img src="{{asset('storage/'.$channel->image->url)}}" width="100px" height="100px"
                        class="rounded-circle ml-3 pb-2" alt=""></a>
                        <h4>
                          <a class="text-danger" href="{{route('channel.index',$channel)}}">{{$channel->name}}</a>
                        </h4>
                        <h5 class="text-secondary">
                           <span>{{$channel->total_subscribers()}}</span>
                            Subscribers
                        </h5>
                        <button class="btn btn-danger">Subscribe</button>
                </div>
            </div>
        </div>
    @endforeach

</div>
{{-- end of featured channel  --}}



<div class="d-flex justify-content-between mb-4 border-bottom pb-3">
    <h1 class="text-secondary">Subscription Channels</h1>
</div>
{{-- //featured channels section  --}}
<div class="row mb-4">
    <div class="col-md-3">
            <div class="card">
                <div class="card-body ml-3">
                   <img src="{{asset('image/user.jpg')}}" width="100px" height="100px" class="rounded-circle ml-3" alt="">
                   <h4 class="text-danger">
                       Anupam Movies
                   </h4>
                   <h5 class="text-secondary">
                       <span>1.65M</span>
                       Subscribers
                    </h5>
                   <button class="btn btn-danger">Subscribe</button>
                </div>
            </div>
       </div>
       <div class="col-md-3">
        <div class="card">
            <div class="card-body ml-3">
               <img src="{{asset('image/user.jpg')}}" width="100px" height="100px" class="rounded-circle ml-3" alt="">
               <h4 class="text-danger">
                   Anupam Movies
               </h4>
               <h5 class="text-secondary">
                   <span>1.65M</span>
                   Subscribers
                </h5>
               <button class="btn btn-danger">
                   Subscribe
                </button>
            </div>
        </div>
   </div>

</div>
{{-- end of featured channel  --}}
