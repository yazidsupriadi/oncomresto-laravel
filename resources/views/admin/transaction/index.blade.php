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
                                <h2 class="pageheader-title">Transaction Dashboard  </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Transaction Dashboard </li>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Transactions </h5>
                                <p>Disini tercantum daftar transaksi</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                   

                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Customer</th>
                                                <th>Pembayaran Status</th>
                                                <th>Product status</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td>{{$transaction->code}}</td>
                                                <td>{{$transaction->name}}</td>
                                                <td>
                                                  @if($transaction->payment_status == 0)
                                                    <a href="{{url('admin/transaction/'.$transaction->code.'/'.$transaction->payment_status)}}" class="btn btn-primary btn-xs">belum</a>
                                                  @else
                                                    <a href="{{url('admin/transaction/'.$transaction->code.'/'.$transaction->payment_status)}}" class="btn btn-success btn-xs">sudah</a>
                                                  @endif

                                                </td>

                                                <td>@if($transaction->product_status == 'on_cooking')
                                                       <a href="{{url('admin/transaction/status/'.$transaction->id)}}" class="btn btn-danger btn-xs">on_cooking</a>
                                                    @elseif($transaction->product_status == 'delivered')
                                                       
                                                       <a href="{{url('admin/transaction/status/'.$transaction->id)}}" class="btn btn-success btn-xs">delivered</a>
                                                    @else
                                                        <a href="{{url('admin/transaction/status/'.$transaction->id)}}" class="btn btn-primary btn-xs">served</a>
                                                    
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('admin/transaction/'.$transaction->code.'/detail/data')}}" class="btn btn-secondary btn-xs">Detail</a>
                                                                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    	</div>
                    </div>
                </div>
            </div>



                      <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                     
                          </div>
                          
                        </div>
                      </div>
                    </div>


@endsection