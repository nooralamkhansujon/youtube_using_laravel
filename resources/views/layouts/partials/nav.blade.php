<nav class="navbar navbar-expand-md text-light navbar-light shadow-lg">
    <div class="container">
        <a class="navbar-brand text-danger font-weight-bold" href="{{ url('/') }}">
            <img class="bg-danger text-danger" src="{{asset("svg/youtube.svg")}}" alt="">
            {{ config('app.name', 'Youtube') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                         <a href="{{route('home.index')}}" class="nav-link text-danger">Home</a>
                    </li>
                    <li class="nav-item">
                          <a href="{{route('profile.profile')}}"  class="nav-link text-danger">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('profile.about')}}" class="nav-link text-danger">About</a>
                    </li>
               @endauth

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else

                        <li class="nav-item dropdown">
                            <div class="notification-box">
                            <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-secondary mt-2" style="font-size:20px;">
                                        <i class="fa fa-bell"></i>
                                    </span>
                                    <span class="total_notification text-danger">23</span>
                                </a>
                                <div class="dropdown-menu bg-success text-light" aria-labelledby="dropdownMenuLink">
                                    <a href="#" class="dropdown-item text-light">
                                        Notification One Notification One
                                    </a>
                                    <a href="#" class="dropdown-item text-light">
                                        Notification One Notification One
                                    </a>
                                    <a href="#" class="dropdown-item text-light">
                                        Notification One Notification One
                                    </a>

                                </div>
                            </div>
                        </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
