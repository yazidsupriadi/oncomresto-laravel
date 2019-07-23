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
                                <h2 class="pageheader-title">Product Dashboard  </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                                <h5 class="mb-0">Data Product </h5>
                                <p>Disini tercantum nama product barang yang dijual</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                       Tambah Product
                    </button>

                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Stock</th>
                                                <th>Price</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($products as $product)
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><img src="{{asset('admin/assets/images/'.$product->photo)}}" alt="" width="60px" height="60px"></td>
                                                <td>{{$product->name}}</td>
                                                <td>{!!$product->description!!}</td>
                                                
                                                <td>@if($product->stock == 'available')
                                                       <a href="{{url('admin/product/status/'.$product->id)}}" class="btn btn-primary btn-xs">Available</a>
                                                    @else
                                                       <a href="{{url('admin/product/status/'.$product->id)}}" class="btn btn-danger btn-xs">No Available</a>
                                                    
                                                    @endif
                                                </td>
                                                <td>{{$product->price}}</td>
                                                <td>
                                                
                                                    <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}        
                                                    <a href="{{url('admin/product/'.$product->id.'/edit')}}" class="btn btn-success btn-xs"  ">edit</a>
                                                    
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                             <form action="{{url('admin/product')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan judul nama Category">
                      </div>


                      <div class="form-group">
                        <label for="dsecription">Description</label>
                        <textarea id="my-editor" name="description" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="price">price</label>
                        <input type="text" class="form-control" name="price" placeholder="Masukan jumlah harga">
                      </div>

                       <div class="form-group">
                          <select name="category_id" class="form-control">
                              @foreach($categories as $category)
                              <label>Category</label>
                              <option value="">Pilih Category</option>}
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @foreach($category->children as $subcat)
                              <option value="{{$subcat->id}}">-{{$subcat->name}}</option>
                              
                              @endforeach
                              @endforeach
                          </select>
                      </div>

                        <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" placeholder="Masukan gambar lomba">
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