

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-decoration-none">
        <img src="{{URL('images/udom_round.png')}}" alt="UDOM Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <marquee behavior="smooth" direction="right-left">{{__('UDOM Trans Admin Panel')}}</marquee>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Sir Majala</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class= "mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{__('Dashboard')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/riders" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>{{__('Riders')}}</p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{__('Drivers')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/drivers" class="nav-link">
                                <i class="fas fa-angle-double-right nav-icon"></i>
                                <p>{{__('Driver')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/un-approved-driver" class="nav-link">
                                <i class="fas fa-angle-double-right nav-icon"></i>
                                <p>{{__('Un-approved Driver')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Trips
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/trips" class="nav-link">
                                <i class="fa fa-angle-double-right nav-icon"></i>
                                <p>All Trips</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/scheduled-trips" class="nav-link">
                                <i class="fas fa-angle-double-right nav-icon"></i>
                                <p>Scheduled Trips</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/completed-trips" class="nav-link">
                                <i class="fas fa-angle-double-right nav-icon"></i>
                                <p>Completed Trips</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cancelled-trips" class="nav-link">
                                <i class="fas fa-angle-double-right nav-icon"></i>
                                <p>Cancelled Trips</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./vehicles" class="nav-link ">
                        <i class="nav-icon fas fa-car-alt"></i>
                        <p>Vehicle Type</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/track-users" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Track Users</p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Eaning Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/admin-reports" class="nav-link">
                                <i class="nav-icon fas fa-angle-double-right"></i>

                                <p>Admin payments Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/driver-reports" class="nav-link">
                                <i class="nav-icon fas fa-angle-double-right"></i>
                                <p>Drivers Payments Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/e-commerce.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-account"></i>
                        <p>Admin</p>
                    </a>
                </li>


                <li class="nav-item mt-4">

                </li>

            </ul>
        </nav>

    </div>
</aside>

