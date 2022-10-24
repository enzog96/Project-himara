    <!-- ========== HEADER ========== -->
    <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
          <!-- BRAND -->
          <div class="brand">
            <div class="logo">
              <a href="index.html">
                <img src="images/logo.svg" alt="Hotel Himara">
              </a>
            </div>
          </div>
          <!-- MOBILE MENU BUTTON -->
          <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown active">
                <a href="/">HOME</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/rooms-list">ROOMS</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/blog">BLOG</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/team">TEAM</a>
              </li>
              <li class="menu-item dropdown">
                <a href="/gallery">GALLERY</a>
              </li>
              <li class="menu-item">
                <a href="/contact">CONTACT US</a>
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