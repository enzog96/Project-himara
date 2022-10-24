    <!-- ========== HEADER ========== -->
    <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container tw-flex tw-justify-center">
            <div class="brand tw-absolute tw-left-0 tw-ml-5">
                <div class="logo">
                  <a href="index.html">
                    <img src="/images/logo.svg" alt="Hotel Himara">
                  </a>
                </div>
              </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu tw-mt-2">
              <li class="menu-item dropdown active">
                <a href="/home-back">HOME</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/room-back">ROOMS</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/team-back">TEAM</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/gallery-back">GALLERY</a>
              </li>
              <li class="menu-item">
                <a href="/contact-us-back">CONTACT US</a>
              </li>
              <li class="menu-item">
                <a href="/blog-back">BLOG</a>
              </li>
              <li class="menu-item dropdown">
                <a href="#">ELEMENTS</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="/style-guide">Style Guide</a>
                  </li>
                  <li class="menu-item">
                    <a href="/buttons">Buttons</a>
                  </li>
                  <li class="menu-item">
                    <a href="/icons">Icons</a>
                  </li>
                </ul>
              </li>
              @if (Route::has('login'))
              @auth 
              <li class="menu-item menu-btn">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                this.closest('form').submit();" class="btn">
                  <i class="fa fa-user"></i>
                  LOG OUT</a>
                </form>
              </li>
                @else
                <li class="menu-item menu-btn">
                  <a href="/dashboard" class="btn">
                    <i class="fa fa-user"></i>
                    LOG IN</a>
                </li>
                <li class="menu-item menu-btn ml-3">
                  <a href="{{ route('register') }}" class="btn">
                    <i class="fa fa-user"></i>
                    REGISTER</a>
                </li>
              @endauth
              @endif    
            </ul>
          </nav>
        </div>
      </header>