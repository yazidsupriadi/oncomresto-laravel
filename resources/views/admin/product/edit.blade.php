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
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
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
                                <h5 class="mb-0">Data Category </h5>
                                <p>Disini tercantum nama category barang yang dijual</p>
                            </div>
                            <div class="card-body">
                                  
                             <form action="/admin/product/{{$products->id}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      {{method_field('PUT')}}


                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan judul nama Category" value="{{$products->name}}">
                      </div>


                      <div class="form-group">
                        <label for="dsecription">Description</label>
                        <textarea id="my-editor" name="description" class="form-control">{!! $products->description !!}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" placeholder="Masukan jumlah stock" value="{{$products->stock}}">
                      </div>
                      <div class="form-group">
                        <label for="price">price</label>
                        <input type="text" class="form-control" name="price" placeholder="Masukan jumlah harga" value="{{$products->price}}">
                      </div>

                      <div class="form-group">
                        <label for="weight">Berat</label>
                        <input type="text" class="form-control" name="weight" placeholder="Masukan nama berat"value="{{$products->weight}}">
                      </div>

                       <div class="form-group">
                          <select name="category_id" class="form-control">
                              @foreach($categories as $category)
                              <option 
                              @if($category->id == $products->id)
                                selected="selected" 
                              @endif
                              value="{{$category->id}}">{{$category->name}}</option>}
                              @foreach($category->children as $subcat)
                              <option value="{{$subcat->id}}"
                                @if($products->category_id == $subcat->id)
                                  selected="selected" 
                                @endif
                                >-{{$subcat->name}}</option>
                              
                              @endforeach
                              @endforeach
                          </select>
                      </div>

                        <div class="form-group">
                        <label for="photo">Photo</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control" name="photo" placeholder="Masukan gambar lomba" value="{{$products->photo}}">
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
                    </div>
                </div>
            </div>




@endsection