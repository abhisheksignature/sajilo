<div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper"><span class="back">Back</span>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
              </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="index.php"><img class="img-fluid"
                src="../admin-assets/images/logo/logo-icon.png" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.php"><img class="img-fluid"
                      src="../admin-assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                        aria-hidden="true"></i></div>
                </li>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="admin"><i
                      data-feather="home"> </i><span>Dashboard</span></a></li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Users </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="all-users">All users</a></li>
                    <li><a href="add-user">Add new user</a></li>
                  </ul>
                </li>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                      data-feather="map"></i><span>Tour Packages</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('packages') }}">All Packages</a></li>
                    <li><a href="package-detail">Package's Detail</a></li>
                    <li><a href="{{ route('package') }}">Add New Package</a></li>
                    <li><a href="{{ route('all.package.categories') }}">All Package Categories</a></li>
                    <li><a href="{{ route('add.package.form') }}">Add Package Category</a></li>
                  </ul>
                </li>

                <li class="sidebar-list">
                  <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i
                      data-feather="briefcase"></i><span>hotel
                    </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="all-hotel">All Hotels</a></li>

                    <li><a href="hotel-details">Hotel's Detail</a></li>
                    <li><a href="{{ route('add.new.hotel') }}">Add New Hotel</a></li>
                    <li><a href="add-new-room">Add New Room</a></li>
                    <li><a href="{{ route('all.hotel.categories') }}">All Hotel Categories</a></li>
                    <li><a href="{{ route('add.hotel.form') }}">Add Hotel Category</a></li>

                  </ul>
                </li>

                

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="booking"><i
                      data-feather="bookmark"> </i><span>Booking</span></a>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="reviews"><i
                      data-feather="message-square">
                    </i><span>Reviews</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="setting"><i
                      data-feather="settings"> </i><span>Setting</span></a>
                </li>
                {{-- <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="admin-login"><i
                      data-feather="log-in"> </i><span>Log In</span></a>
                </li> --}}

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="admin-register"><i
                      data-feather="plus-circle"> </i><span>Register</span></a>
                </li>


              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>