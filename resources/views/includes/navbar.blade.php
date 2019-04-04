<nav class="navbar bg-dark navbar-dark navbar-expand-md">



    <a class="navbar-brand" href="/home">Nader</a>

    @if (Auth::check())
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    @endif

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        @if (Auth::check())
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pro">Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create post</a>
            </li>
            
        </ul>
        @endif


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>          
            @endif

        </ul>
    </div>

</nav>
