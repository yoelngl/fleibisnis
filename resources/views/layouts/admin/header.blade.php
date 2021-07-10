<header id="header_part" class="fixed fullwidth_block dashboard">
    <div id="header" class="not-sticky">
      <div class="container">
        <div class="utf_left_side">
          <div id="logo"> <a href="{{route('home')}}"><img src="{{ asset('images/logo-fleibisnis.png') }}"  alt=""></a> <a href="{{route('home')}}" class="dashboard-logo"> <img src="{{ asset('images/logo-fleibisnis1.png') }}" style="width: 150px" alt=""> </a> </div>
          <div class="mmenu-trigger" style="background: none">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget">
            @auth
            <div class="utf_user_menu">
                @php
                    $images = App\Models\Customer::where('user_id',auth()->user()->id)->first();
                @endphp
              <div class="utf_user_name"><span>
                  @if (isset($images['images']))
                      <img src="{{ asset('storage/'.$images['images']) }}" alt="Profile Images">
                  @else
                      <img src="{{ asset('images/user.png') }}" alt="Profile Images">

                  @endif
                  </span>Hi, {{ Auth::user()->username }}!</div>
              <ul>
                <li><a href="{{ route('home') }}"><i class="sl sl-icon-layers"></i> Home</a></li>
                @if(Auth::user()->hasPermissionTo('valid'))
                <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                @endif
                @if(app()->getLocale() == "en")
                <li><a href="{{ url('locale/id') }}"><i class="sl sl-icon-globe"></i> ID</a></li>
                @else
                <li><a href="{{ url('locale/en') }}"><i class="sl sl-icon-globe"></i> EN</a></li>
                @endif
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
            </div>
          </div>
          @endauth
        </div>
      </div>
    </div>
</header>
