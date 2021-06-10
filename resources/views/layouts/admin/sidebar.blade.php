<a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
<div class="utf_dashboard_navigation js-scrollbar">
    <div class="utf_dashboard_navigation_inner_block">
        <ul>
            {{-- <li><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
            <li><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
            <li>
                <a href="javascript:void(0)"><i class="sl sl-icon-layers"></i> My Listings</a>
                <ul>
                    <li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
                    <li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
                    <li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
                </ul>
            </li>
            <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>
            <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
            <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
            <li>
                <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Reviews</a>
                <ul>
                    <li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
                    <li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
                </ul>
            </li>
            <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li> --}}
            <li class="{{ request()->is('my-profile') ? 'active' : '' }}"><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> {{ trans('message.my-profile') }}</a></li>
            {{-- <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li> --}}
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </div>
</div>
