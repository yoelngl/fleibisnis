<header id="header_part">
    <div id="header">
      <div class="container">
        <div class="utf_left_side">
          <div id="logo"> <a href="{{ route('home') }}"><img src="{{ asset('images/logo-fleibisnis.png') }}" style="width: 110px;" alt=""></a> </div>
          <div class="mmenu-trigger" style="background-color:#f52084">
            <button class="hamburger utfbutton_collapse" type="button">
                <span class="utf_inner_button_box">
                    <span class="utf_inner_section"></span>
                </span>
            </button>
          </div>
          <nav id="navigation" class="style_one" >
            <ul id="responsive">
              <li><a class="{{ request()->is('/') ? 'current' : '' }}" style="font-weight:bold" href="{{ route('home') }}">Home</a></li>
              <li><a class="{{ request()->is('today-news') ? 'current' : '' }}" style="font-weight:bold" href="{{ route('today-news') }}" >Today News</a></li>
              <li><a class="{{ request()->is('ask-the-expert') ? 'current' : '' }}" style="font-weight:bold" href="{{ route('expert') }}">Ask The Experts</a></li>
              <li><a class="{{ request()->is('events') ? 'current' : '' }}" style="font-weight:bold" href="{{ route('events') }}">Events</a></li>
              <li><a href="#" style="font-weight:bold" class="{{ request()->is('franchise-directory') || request()->is('retail-directory') ? 'current' : '' }}">Directory</a>
                  <ul>
                    <li><a class="{{ request()->is('franchise-directory') ? 'active' : '' }}" href="{{ route('franchise-directory') }}">Franchise Directory</a></li>
                    <li><a class="{{ request()->is('retail-directory') ? 'active' : '' }}" href="{{ route('retail-directory') }}">Retail Directory</a></li>
                  </ul>
              </li>
              <li><a style="font-weight:bold" class="{{ request()->is('contact') ? 'current' : '' }}" href="{{ route('contact') }}">Contact</a></li>

            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget">
              @if(Auth::user())
              <a href="{{ route('admin.profile') }}" class="button border "><i class="fa fa-at"></i>{{ Auth::user()->username }}</a>

              @else
              <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> {{ trans('message.login') }}</a>
              @endif

            </div>
        </div>

        <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
            <div class="small_dialog_header">
                <h3>Sign In</h3>
            </div>
            <div class="utf_signin_form style_one">
                <ul class="utf_tabs_nav">
                    <li class=""><a href="#tab1">{{ trans('message.login') }}</a></li>
                    <li><a href="#tab2">{{ trans('message.register2') }}</a></li>
                </ul>
            @livewire('auth.authentication')
            </div>
        </div>
      </div>
    </div>
</header>
