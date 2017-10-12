@if (Auth::guest())

@else
   <aside class="main-sidebar">
      <!-- Authentication Links -->

   <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
               <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
               <p>{{Auth::user()->username}}</p>
               <!-- Status -->
               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
               <input type="text" name="q" class="form-control" placeholder="Search...">
                   <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                   </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/home"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <!-- Dropdown treeView -->
             @if(Auth::user()->position == 'admin')
            <li class="treeview">
               <a href="#"><i class="fa fa-link"></i> <span>User</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">

                 <li><a href="{{ url('/register') }}">Add User</a></li>
                 <li><a href="#">Update User</a></li>
                 <li><a href="/profile">View Users</a></li>

               </ul>
            </li>
            <li class="treeview">

              <a href="#"><i class="fa fa-link"></i> <span>Project</span>
                <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/project/create">Create Project</a></li>
                <li><a href="/project">Manage Project</a></li>
               </ul>

            </li>
               @endif
            <li class="treeview">
               <a href="#"><i class="fa fa-link"></i> <span>Profile</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">

                 <li><a href="/profile/create" name="form">create Profile</a></li>
                 <li><a href="/profile/{{Auth::user()->id}}/edit">Update profile</a></li>
                 <li><a href="/profile/{{Auth::user()->username}}">View Profile</a></li>

               </ul>
            </li>

         </ul>
        <!-- /.sidebar-menu -->
      </section>
   <!-- /.sidebar -->
   </aside>
 @endif
</div>
<!-- Scripts for protask -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
