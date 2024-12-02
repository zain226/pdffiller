      <!-- Navbar Start -->
      @php($user = auth()->user())
      <header id="topnav" class="defaultscroll sticky">
          <div class="container">
              <!-- Logo container-->
              <a class="logo" href="index.html">
                  <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" class="l-dark" height="24"
                      alt="">
                  <img src="{{ asset('frontend/assets/images/logo-light.png') }}" height="24" class="l-light"
                      alt="">
              </a>

              <!-- End Logo container-->
              <div class="menu-extras">
                  <div class="menu-item">
                      <!-- Mobile menu toggle-->
                      <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                          <div class="lines">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                      </a>
                      <!-- End mobile menu toggle-->
                  </div>
              </div>

              <!--Login button Start-->
              <ul class="buy-button list-inline mb-0">
                  @if ($user)
                      <li class="list-inline-item ps-1 mb-0 ">
                          <a href="{{ route('user.dashboard') }}" target="_blank"
                              class="btn btn-icon btn-pills btn-primary"><i data-feather="user"
                                  class="fea icon-sm"></i></a>
                      </li>
                  @else
                      <li class="list-inline-item mb-0">
                          <a href="{{ route('login') }}" class="btn btn-sm btn-soft-primary text-uppercase">Login</a>
                      </li>
                  @endif




              </ul>
              <!--Login button End-->

              <div id="navigation">
                  <!-- Navigation Menu-->
                  @php($prefix = request()->is('user/*') ? 'light' : 'right')
                  <ul class="navigation-menu nav-{{ $prefix }}">
                      <li><a href="{{ route('index') }}" class="sub-menu-item">Home</a></li>

                      <li><a href="" class="sub-menu-item">About us</a></li>

                      <li><a href="" class="sub-menu-item">Pricing</a></li>
                      <li><a href="" class="sub-menu-item">Contact Us</a></li>
                  </ul><!--end navigation menu-->
              </div><!--end navigation-->
          </div><!--end container-->
      </header><!--end header-->
      <!-- Navbar End -->
