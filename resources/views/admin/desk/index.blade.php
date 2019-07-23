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
                                <h2 class="pageheader-title">Desk Dashboard  </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Desk Dashboard </li>
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
                                <h5 class="mb-0">Data Meja Restaurant </h5>
                                <p>Disini tercantum Meja restaurant</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                       Tambah Meja
                    </button>

                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Stock</th>                                         <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($desks as $desk)
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td>{{$desk->name}}</td>
                                                <td>{!!$desk->position!!}</td>
                                                
                                                <td>@if($desk->status == 'booked')
                                                       <a href="{{url('admin/desk/status/'.$desk->id)}}" class="btn btn-primary btn-xs">booked</a>
                                                    @else
                                                       <a href="{{url('admin/desk/status/'.$desk->id)}}" class="btn btn-danger btn-xs">No Booked</a>
                                                    
                                                    @endif
                                                </td>
                                                <td>
                                                
                                                    <form action="/admin/desk/{{$desk->id}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}        
                                                    <a href="{{url('admin/desk/'.$desk->id.'/edit')}}" class="btn btn-success btn-xs"  ">edit</a>
                                                    
                                      <input type="submit" name="" value="DELETE" class="btn btn-danger btn-xs"  onclick="return confirm('yakin mau dihapus.?')">
                                                    </form>  
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Meja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                             <form action="{{url('admin/desk')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan judul nama meja">
                      </div>


                      <div class="form-group">
                        <label for="description">Position</label>
                        <textarea id="my-editor" name="position" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                      </div>


                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>
                     
                          </div>
                          
                        </div>
                      </div>
                    </div>


@endsection