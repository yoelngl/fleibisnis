<header id="header_part" class="fixed fullwidth_block dashboard">
    <div id="header" class="not-sticky">
      <div class="container">
        <div class="utf_left_side">
          <div id="logo"> <a href="index_1.html"><img src="{{ asset('images/logo-fleibisnis.png') }}"  alt=""></a> <a href="index_1.html" class="dashboard-logo"> <img src="{{ asset('images/logo-fleibisnis1.png') }}" style="width: 150px" alt=""> </a> </div>
          <div class="mmenu-trigger" style="background: none">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget">
            <div class="dashboard_header_button_item has-noti js-item-menu">
                <i class="sl sl-icon-bell"></i>
                <div class="dashboard_notifi_dropdown js-dropdown">
                    <div class="dashboard_notifi_title">
                        <p>You Have 2 Notifications</p>
                    </div>
                    <div class="dashboard_notifi_item">
                        <div class="bg-c1 red">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="content">
                            <p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
                            <span class="date">2 hours ago</span>
                        </div>
                    </div>
                    <div class="dashboard_notifi_item">
                        <div class="bg-c1 green">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <p>You Have 7 Unread Messages</p>
                            <span class="date">5 hours ago</span>
                        </div>
                    </div>
                    <div class="dashboard_notify_bottom text-center pad-tb-20">
                        <a href="#">View All Notification</a>
                    </div>
                </div>
            </div>
            <div class="utf_user_menu">
              <div class="utf_user_name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Hi, {{ Auth::user()->username }}!</div>
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
        </div>
      </div>
    </div>
</header>
