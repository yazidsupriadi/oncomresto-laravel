@extends('admin.layout.master')
@section('content')
	
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Oncom Resto Dashboard  </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Oncom Resto Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                                            	
                        <div class="row">



                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                        <h5 class="text-muted">Transaction</h5>
                        <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{count($transactions)}}</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                        </div>
                        </div>
                        </div>
                        </div>






                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                        <h5 class="text-muted">Product</h5>
                        <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{count($products)}}</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                        </div>
                        </div>
                        </div>
                        </div>






                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                        <h5 class="text-muted">Visitor</h5>
                        <div class="metric-value d-inline-block">
                        <h1 class="mb-1">13000</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                        </div>
                        </div>
                        </div>
                        </div>






                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                        <h5 class="text-muted">Total Orders</h5>
                        <div class="metric-value d-inline-block">
                        <h1 class="mb-1">1340</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                        </div>
                        </div>
                        </div>
                        </div>



                        </div>
                    </div>
                </div>
            </div>
@endsection