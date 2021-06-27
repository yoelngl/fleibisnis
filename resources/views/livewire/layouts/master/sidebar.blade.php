<div>
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}"><span class="brand-logo"></span>
            <h2 class="brand-text"><img src="{{ asset('images/logo-fleibisnis.png') }}" width="160px" alt=""></h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">HOME</span><i data-feather="more-horizontal"></i>
        </li>
        <li class=" nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">MAIN APP</span><i data-feather="more-horizontal"></i>
        <li class=" nav-item {{ request()->is('admin/today_news') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.today_news') }}"><i data-feather="copy"></i><span class="menu-title text-truncate" data-i18n="home">Today News</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/ask_expert') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.ask_expert') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">Ask Expert</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/event') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.event') }}"><i data-feather="gift"></i><span class="menu-title text-truncate" data-i18n="home">Event</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/retail-directory') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.retail') }}"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="home">Retail Directory</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/franchise-directory') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.franchise') }}"><i data-feather="archive"></i><span class="menu-title text-truncate" data-i18n="home">Franchise Directory</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">WIDGETS</span><i data-feather="more-horizontal"></i>
        <li class=" nav-item {{ request()->is('admin/expert') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.expert') }}"><i data-feather="archive"></i><span class="menu-title text-truncate" data-i18n="home">Expert</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/banner') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.banner') }}"><i data-feather="image"></i><span class="menu-title text-truncate" data-i18n="home">Banner</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/slider') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.slider') }}"><i data-feather="image"></i><span class="menu-title text-truncate" data-i18n="home">Slider</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/brand') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.brand') }}"><i data-feather="image"></i><span class="menu-title text-truncate" data-i18n="home">Franchise Brand</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/footer') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.footer') }}"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="home">Footer</span></a>
        </li>
      </ul>
    </div>
  </div>
  </div>
