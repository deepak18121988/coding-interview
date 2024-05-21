<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="site-logo">
          <a href="/" class="text-black"><span class="text-primary">Coding Interview</a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="{{ route('admins') }}" class="nav-link">Admins</a></li>
              <li><a href="{{ route('customers') }}" class="nav-link">Customers</a></li>
              <li><a href="{{ route('employees') }}" class="nav-link">Employees</a></li>

              <li><a href="{{ route('message_categories') }}" class="nav-link">Message Categories</a></li>
              <li><a href="{{ route('messages') }}" class="nav-link">Messages</a></li>
              <li><a href="{{ route('my_messages') }}" class="nav-link"><strong>My Messages</strong></a></li>
            </ul>
          </nav>

        </div>

        <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>
    </div>
</header>