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

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>

      <li class="treeview">
        <li>
          <a href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      </li>

      <li class="treeview">
          <a href="#">
              <i class="fa fa-users"></i> <span>Employee</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
              <li>
                  <a href="{{ route('employee.create') }}"><i class="fa fa-circle-o"></i>Add Employee</a>
              </li>
              <li>
                  <a href="{{ route('employee.index') }}"><i class="fa fa-circle-o"></i>Employee List</a>
              </li>
              <li>
                  <a href="{{ route('employee-expense.index') }}"><i class="fa fa-circle-o"></i>Employee Expense</a>
              </li>
              <li>
                  <a href="{{ route('check-tada') }}"><i class="fa fa-circle-o"></i>Check Tada</a>
                  <a href="{{ route('check-salary') }}"><i class="fa fa-circle-o"></i>Check Salary</a>
              </li>
          </ul>
      </li>
      

      <li class="treeview">
        <li>
          <a href="{{ url('/retail-market') }}">
            <i class="fa fa-dollar"></i> <span>Retail Market</span>
          </a>
        </li>
      </li>


@can('isAdmin')
      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/user/add')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="{{url('/user')}}"><i class="fa fa-circle-o"></i> Users List</a></li>
          </ul>

      </li>
@endcan

      <!-- start stock  -->
      <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Stocks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/add-stocks') }}"><i class="fa fa-circle-o"></i> Add Stocks </a></li>
            <li><a href="{{ url('/stocks-list') }}"><i class="fa fa-circle-o"></i> Stocks List </a></li>
          </ul>
      </li>
      <!-- end stock -->

        <!-- start Product  -->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-product-hunt"></i>
              <span>Products</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('product.create') }}"><i class="fa fa-circle-o"></i> Add Product </a></li>
              <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i> Products List </a></li>
            </ul>
        </li>
        <!-- end Product -->

        <!-- start Sales  -->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Sales</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('sale.create') }}"><i class="fa fa-circle-o"></i> Add Sales </a></li>
              <li><a href="{{ route('sale.index') }}"><i class="fa fa-circle-o"></i> Sales List </a></li>
            </ul>
        </li>
        <!-- end Sales -->

        <!-- start Sales  -->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-money"></i>
              <span>Expense</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('company-expense.index') }}"><i class="fa fa-circle-o"></i> Company Expense </a></li>
              <li><a href="{{ route('office-expense.index') }}"><i class="fa fa-circle-o"></i> Office Expense </a></li>
            </ul>
        </li>
        <!-- end Sales -->

      <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('attendance.create')}}"><i class="fa fa-circle-o"></i> Take Attendance</a></li>
            <li><a href="{{ route('attendance.index')}}"><i class="fa fa-circle-o"></i> Attendance list</a></li>
            <li><a href="{{ route('off-day.create')}}"><i class="fa fa-circle-o"></i> Add Off Day</a></li>
          </ul>
      </li>
     
    </ul>
  </section>
  <!-- /.sidebar -->

</aside>