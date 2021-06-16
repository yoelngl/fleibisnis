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

        <li class=" nav-item {{ request()->is('admin/retail-directory') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.retail') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Retail Directory</span></a>
        </li>
        <li class=" nav-item {{ request()->is('admin/franchise-directory') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.franchise') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Franchise Directory</span></a>
        </li>
      </ul>
    </div>
  </div>
  </div>
