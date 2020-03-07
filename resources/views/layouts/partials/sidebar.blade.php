<div class="col-md-4">
    <div class="bg-light p-3">
        <h1 class="ml-3 pb-2 font-weight-bold text-danger border-bottom">
            <a class="text-danger font-weight-bold" href="{{ url('/') }}">
              <img class="bg-danger text-danger"
              src="{{asset("svg/youtube.svg")}}" alt="">
              {{ config('app.name', 'Youtube') }}
            </a>
        </h1>
         <ul class="list-group" style="list-style: none;">
             <li class="nav-item">
                <a  class="nav-link text-secondary" style="font-size:24px" href="#">Subscriptions</a>
             </li>

             <li class="nav-item">
                <a class="nav-link text-secondary" style="font-size:24px"  href="#">Liked Videos</a>
            </li>

             <li class="nav-item">
                <a class="nav-link text-secondary" style="font-size:24px" href="#">Channels</a>
            </li>
         </ul>
    </div>
</div>
