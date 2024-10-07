<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span >
            CookBuddy
          </span>
        </a>
        <div class="" id="">
          <div class="User_option">
            <!-- Updated Login Link -->
            <a href="{{ route('login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>

            <form class="form-inline">
              <input type="search" placeholder="Search" />
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <img src="{{asset('client')}}/images/menu.png" alt="">
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="index.html">Home</a>
              <a href="about.html">About</a>
              <a href="blog.html">Blog</a>
              <a href="testimonial.html">Testimonial</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
</header>
