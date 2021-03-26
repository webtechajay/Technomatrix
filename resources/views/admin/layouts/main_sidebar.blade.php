  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Technomatrix</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
<!--               <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li> -->
<!--               <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
          </li>
<!--           <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt "></i>
              <p>
                Revenue
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/addRevenue')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Revenue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/viewRevenue')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Revenue</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt "></i>
              <p>
                Expense 
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/addExpense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Expense</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/viewExpense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Expense</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building "></i>
              <p>
                Comapany 
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/addCompany')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/viewCompany')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Company</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-plus "></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/createMembers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/viewMembers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Members</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie "></i>
              <p>
                Graphs
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="{{url('graph_revenue')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Revenue Graph</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('graph_expense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense Graph</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('graph_revenue_expense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RevenueExpense Graph</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user "></i>
              <p>
                Visitor
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/createVisitor')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Visitor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/viewVisitor')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Visitor</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>