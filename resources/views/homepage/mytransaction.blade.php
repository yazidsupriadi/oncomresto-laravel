@extends('homepage.index')

@section('navbar')
  @include('homepage.layout.navbar')
 @endsection
@section('content')
  <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">My Loanings</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">My Loanings</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <div id="customer-orders" class="col-md-9">

        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
              <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
              <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Payment_status</th>
                        <th>Product Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($transactions as $tr)
                      <tr>
                        <th>{{$tr->code}}</th>
                        <td>{{$tr->name}}</td>
                        @if($tr->payment_status == 0)
                        <td><span class="badge badge-danger">Belum bayar</span></td>
                        @else
                        <td><span class="badge badge-primary">Sudah bayar</span></td>
                        @endif
                        
                        @if($tr->product_status == 'on_cooking')
                        <td><span class="badge badge-danger">Sedang dimasak</span></td>
                        @elseif($tr->product_status == 'deliverd')
                        <td><span class="badge badge-primary">Sedang diantar</span></td>
                        @else
                        <td><span class="badge badge-success">Pesanan sampai</span></td>
                        
                        @endif
                        <td><a href="{{url('cart/order/'.$tr->code)}}" class="btn btn-template-outlined btn-sm">View</a></td>
                        <td>  <a href="/cart/sukses" class="btn btn-template-outlined btn-sm">Bayar</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Customer section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> My orders</a></li>
                    <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                    <li class="nav-item"><a href="{{url('/member/logout')}}" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection