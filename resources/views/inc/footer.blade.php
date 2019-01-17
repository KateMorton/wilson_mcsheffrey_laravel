<footer class=" border-top mt-5">
    <nav class="main-nav navbar navbar-expand-lg navbar-default pb-0 justify-content-center d-none d-sm-block">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFooter" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-caret-down"></i></span>
        </button>
        <ul class="navbar-nav collapse navbar-collapse justify-content-center" id="navbarFooter">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pricing">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Archive</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li> --}}
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="footerNavDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="footerNavDropdown">                               
                        <a class="dropdown-item" href="/posts/create">add post</a>
                        <a class="dropdown-item" href="/dashboard">dashboard</a>                                      
                        <a class="dropdown-item" href="{{ route('logout') }}"
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
    </nav>
    <nav class="navbar footer-nav pl-2 pr-2">  
        <a class="p-0 nav-link d-none d-sm-block" href="mailto:info@wilsonmcsheffrey.co.uk?Subject=enquiry"><i class="fa fa-envelope"></i>info@wilsonmcsheffrey.co.uk</a>
        <p class="copy pr-5 d-none d-sm-inline-block">&copy; Wilson McSheffrey Photography 2018</p>
        <ul class="nav d-block">            
            <li class="nav-item d-inline-block">
                <a class="nav-link social" title="facebook" href="https://www.facebook.com" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link social" title="twitter" href="https://twitter.com" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link social" title="instagram" href="https://www.instagram.com" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>    
    </nav>         
</footer>