<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Home</a></li>
            </ul>

            <form class="d-flex me-5" role="search" method="GET" action="{{route('search')}}">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search by task" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            <div class="text-end">
                @guest
                <a href="{{route('login')}}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{route('register')}}" class="btn btn-warning">Sign-up</a>
                @else
                <div class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Auth::user()->image == '')
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt=".." class="avatar-img rounded-circle w-25 me-1">
                        @else
                        <img src="{{url('/storage', Auth::user()->image)}}" alt=".." style="height: 50px;" class="rounded me-1">
                        @endif
                        {{Auth::user()->name}}
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('profile', Auth::user()->id)}}">Profile</a></li>
                        @if (Auth::user()->role == 'admin')
                        <li><a class="dropdown-item" href="{{route('user.list')}}">User List</a></li>
                        <li><a class="dropdown-item" href="{{route('priority.index')}}">Priority</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{route ('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{route ('logout')}}" id="logout-form" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </div>
</header>