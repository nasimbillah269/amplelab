<!-- ===== Top Bar ===== -->
<div class="topbar d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex align-items-center flex-wrap">
      <span><i class="fa-solid fa-location-dot me-1"></i> House # 12, Road # 5, Mirpur DOHS, Dhaka-1216</span>
      <span class="divider">|</span>
      <a href="tel:+8801712345678"><i class="fa-solid fa-phone me-1"></i> +880 1712 345 678</a>
      <span class="divider">|</span>
      <a href="mailto:info@amplelab.com"><i class="fa-solid fa-envelope me-1"></i> info@amplelab.com</a>
      <span class="divider">|</span>
      <span><i class="fa-regular fa-clock me-1"></i> Mon - Sat: 9:00 AM - 6:00 PM</span>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </div>
</div>


<!-- ===== Navbar ===== -->
<nav class="navbar navbar-expand-lg navbar-al sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('index')}}">
         <img src="{{assetUrl(general()->logo())}}" alt="{{general()->title}}">
      <!--<div class="logo-mark"></div>-->
      <!--<div class="brand-text">-->
      <!--  <span class="brand-name">Ample Lab</span>-->
      <!--  <small>Complete Lab Solutions</small>-->
      
      <!--</div>-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="mainNav">
    @if($headerMenu = menu('Header Menus'))
    <ul class="navbar-nav mx-auto my-3 my-lg-0">
        @foreach($headerMenu->subMenus as $menu) @if($menu->subMenus->count())
        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
            <a href="{{ assetUrl($menu->menuLink()) }}" class="nav-link dropdown-toggle"> {{ $menu->menuName() }} </a>
            <ul class="dropdown-menu">
                @foreach($menu->subMenus as $subMenu)
                <li><a href="{{  assetUrl($subMenu->menuLink()) }}" class="dropdown-item"> {{ $subMenu->menuName() }} </a></li>
                @endforeach
            </ul>
        </li>
        @else
        <!-- Normal Menu -->
        <li class="nav-item">
            <a
                href="{{ assetUrl($menu->menuLink()) }}"
                class="nav-link"
            >
                {{ $menu->menuName() }}
            </a>
        </li>
        @endif @endforeach
    </ul>
    @endif <a href="{{ url('/request-quotation') }}" class="btn-al-primary"> Request a Quotation </a>
</div>


  </div>
</nav>



