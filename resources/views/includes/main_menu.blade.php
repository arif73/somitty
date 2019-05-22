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
          <a href="{{ url('/dashboard') }}">
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

  {{-- Cash In --}}
  <li class="treeview">
      <a href="{{ url('/cash-in') }}">
          <i class="fa fa-money"></i> <span>Cash In</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          <li>
              <a href="{{ url('/cash-in') }}"><i class="fa fa-circle-o"></i>All Cash In</a>
          </li>
          <li>
              <a href="{{ url('/cash-in/create') }}"><i class="fa fa-circle-o"></i>Add Cash In</a>
          </li>
      </ul>
  </li>  

  {{-- Cash Out --}}
  <li class="treeview">
      <a href="{{ url('/cash-out') }}">
          <i class="fa fa-money"></i> <span>Cash Out</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          <li>
              <a href="{{ url('/cash-out') }}"><i class="fa fa-circle-o"></i>All Cash Out</a>
          </li>
          <li>
              <a href="{{ url('/cash-out/create') }}"><i class="fa fa-circle-o"></i>Add Cash Out</a>
          </li>
      </ul>
  </li>

  {{-- Investments --}}
  <li class="treeview">
      <a href="{{ url('/investments') }}">
          <i class="fa fa-usd"></i> <span>Investment</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          <li>
              <a href="{{ url('/investments') }}"><i class="fa fa-circle-o"></i>All Investment</a>
          </li>
          <li>
              <a href="{{ url('/investments/create') }}"><i class="fa fa-circle-o"></i>Add Investment</a>
          </li>
      </ul>
  </li>

  {{-- Reports --}}
  <li class="treeview">
    <li>
      <a href="{{ url('/reports/create') }}">
        <i class="fa fa-line-chart"></i> <span>Reports</span>
      </a>
    </li>
  </li> 

  {{-- Bank Balance --}}
  <li class="treeview">
    <li>
      <a href="{{ url('/bank-balance') }}">
        <i class="fa fa-line-chart"></i> <span>Bank Balance</span>
      </a>
    </li>
  </li> 

</section>
  <!-- /.sidebar -->

</aside>