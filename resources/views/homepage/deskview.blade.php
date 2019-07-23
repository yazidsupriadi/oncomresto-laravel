@extends('homepage.index')

@section('navbar')
  @include('homepage.layout.navbar')
 @endsection
@section('content')
  <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Desk information</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">desk information</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <div id="customer-orders" class="col-md-9">
              <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
              <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Desk status</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($desks as $desk)
                      <tr>
                        <th>{{$desk->name}}</th>
                        @if($desk->status == 'booked')
                        <td><span class="badge badge-danger">Booked</span></td>
                        @else
                        <td><span class="badge badge-primary">No Booked</span></td>
                        @endif
                        
                        <td>{{$desk->position}}</td>
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