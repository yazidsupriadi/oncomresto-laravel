
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('admin/dashboard')}}" ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('product.index')}}" ><i class="fas fa-fw fa-balance-scale"></i>Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('category.index')}}" ><i class="fas fa-fw fa-chart-pie"></i>Categories</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('transaction.index')}}"><i class="fab fa-fw fa-wpforms"></i>Transactions</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('desk.index')}}"><i class="fa fa-fw fa-table"></i>Desks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-user"></i>User</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('admin/user')}}">List User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('admin/user/add')}}">Tambah User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->