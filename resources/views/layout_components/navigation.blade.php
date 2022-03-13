<!-- header area start here -->
<header class="header-area law-header" id="sticky">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-2">
                <div class="logo-area">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="unique lawyers logo"></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="menu-area text-right">
                    <nav class="main-menu">
                        <ul>
                            <li class=""><a href="{{ url('/') }}">Home</a></li>
                            <li class=""><a href="{{ route('about') }}">About</a></li>
                            <li class=""><a href="{{ route('services') }}">Practice Areas</a></li>
                            <li class=""><a href="{{ url('/team-members') }}">team</a></li>
                            <li class=""> <a href="{{ url('/news') }}">News </a></li>
                            <li class=""> <a href="{{ url('/contact-us') }}">Contact </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2">
                <div class="menu-right text-right">
                    <ul>
                        <li class="search-area" ><a href="#"><i class="fa fa-search"></i></a>
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" id="search" placeholder="search here.......">
                                </form>
                            </div>
                        </li>
                        <li class="menu-bar"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area start here -->
