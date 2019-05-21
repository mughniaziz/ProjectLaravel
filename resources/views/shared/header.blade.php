<nav class="navbar navbar-expand-sm bg-light justify-content-end fixed-top">
    <ul class="nav">
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else

        @if (Auth::user()->hasRole('admin'))
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin')}}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('muser')}}" class="nav-link">Manage User</a>
            </li>
            
        @endif

        @if (Auth::user()->hasRole('user'))
            <li class="nav-item">
                <a class="nav-link" href="{{url('user')}}">Home</a>
            </li>
            
        @endif
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">

                    @if (Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{route('admin.create')}}" class="nav-link">Tambah Pekerjaan</a>
                        </li>
                        <li class="nav-item">
                                <a href="{{route('jlist')}}" class="nav-link">Lihat Pekerjaan</a>
                        </li>
                    @endif
                    @if (Auth::user()->hasRole('user'))
                        <li class="nav-item">
                            <a href="{{route('user.edit',Auth::user()->userdetail->id)}}" class="nav-link">Edit Profile</a>
                        </li>
                    @endif
                    <div class="dropdown-divider"> </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</nav>
