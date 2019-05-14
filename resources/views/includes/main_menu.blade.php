<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/profile.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>
      
      {{-- Dashboard --}}
      <li class="treeview">
        <li>
          <a href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      </li>
  
  {{-- Admin --}}
  <li class="treeview">
      <a href="{{ route('user.index') }}">
          <i class="fa fa-user"></i> <span>Admin</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          <li>
              <a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i>Admin List</a>
          </li>
          <li>
              <a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i>Add Admin</a>
          </li>
      </ul>
  </li>

  {{-- Member --}}
  <li class="treeview">
      <a href="{{ route('member.index') }}">
          <i class="fa fa-users"></i> <span>Member</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          <li>
              <a href="{{ route('member.index') }}"><i class="fa fa-circle-o"></i>Member List</a>
          </li>
          <li>
              <a href="{{ route('member.create') }}"><i class="fa fa-circle-o"></i>Add Member</a>
          </li>
      </ul>
  </li>


</section>
  <!-- /.sidebar -->

</aside>