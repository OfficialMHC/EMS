<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('employee*') ? 'active' : '' }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Employee Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('employee*') ? 'active' : '' }}">
                        <a href="index.html">
                            <i class="fa fa-circle-o"></i>
                            Employee
                        </a>
                    </li>
                </ul>
            </li>
            <li class="
                @if(Request::is('departments*'))
                {{ Request::is('departments*') ? 'active' : '' }}
                @elseif(Request::is('countries*'))
                {{ Request::is('countries*') ? 'active' : '' }}
                @elseif(Request::is('states*'))
                {{ Request::is('states*') ? 'active' : '' }}
                @elseif(Request::is('cities*'))
                {{ Request::is('cities*') ? 'active' : '' }}
                @endif
            treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>System Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('departments*') ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-circle-o"></i>
                            Department
                        </a>
                    </li>
                    <li class="{{ Request::is('countries*') ? 'active' : '' }}">
                        <a href="{{ route('countries.index') }}">
                            <i class="fa fa-circle-o"></i>
                            Country
                        </a>
                    </li>
                    <li class="{{ Request::is('states*') ? 'active' : '' }}">
                        <a href="{{ route('states.index') }}">
                            <i class="fa fa-circle-o"></i>
                            State
                        </a>
                    </li>
                    <li class="{{ Request::is('cities*') ? 'active' : '' }}">
                        <a href="{{ route('cities.index') }}">
                            <i class="fa fa-circle-o"></i>
                            City
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('users*') ? 'active' : '' }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-circle-o"></i>
                            Permission
                        </a>
                    </li>
                    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-circle-o"></i>
                            Role
                        </a>
                    </li>
                    <li class="{{ Request::is('users*') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-circle-o"></i>
                            User
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
