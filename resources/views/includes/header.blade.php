<body class="hold-transition skin-green sidebar-mini">
   <div class="wrapper">
      <!-- Authentication Links -->

           <!-- Main Header -->
               <header class="main-header">
                  <a href="/" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"><b>A</b>LT</span>

                   <span class="logo-lg"><b>{{ config('app.name', 'ProTask') }}</b></span>
                </a>
                <nav class="navbar navbar-static-top">
                   <!-- Sidebar toggle button-->
                  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                  </a>
                  <!-- Navbar Right Menu -->
                  <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                       <!-- Authentication Links -->
                           @if (Auth::guest())

                           @else
          <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Developers
                              <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>

                      </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <!-- Task MEnu -->
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>

                  </ul>
               </li>
          <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
               <!-- User image -->
               <li class="user-header">
                 <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                 <p>
                   {{Auth::user()->fullname }} - {{ Auth::user()->position}}
                   <small>Member since Nov. 2012</small>
                 </p>
               </li>
               <!-- Menu Body -->
               <li class="user-body">
                 <div class="row">
                   <!-- //Other necessary link -->
                 </div>
                 <!-- /.row -->
               </li>
               <!-- Menu Footer-->
               <li class="user-footer">
                 <div class="pull-left">
                   <a href="/profile/{{Auth::user()->username}}" class="btn btn-default btn-flat">Profile</a>
                 </div>
                 <div class="pull-right">
                       <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                        </form>
                  </div>
               </li>
             </ul>

                </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          @endif
        </ul>
      </div>

    </nav>
  </header>
