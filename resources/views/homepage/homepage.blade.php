 @extends('homepage.index')
@section('navbar')
  @include('homepage.layout.navbar')
 @endsection

 @section('slider')
  @include('homepage.layout.slider')
 @endsection
 @section('content')
 <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <p class="text-muted lead text-center">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
              <div class="products-big">
                <div class="row products">
                  @foreach($products as $product)
                  <div class="col-lg-3 col-md-4">
                    <div class="product">
                      <div class="image"><a href="{{url('product/'.$product->id.'/detail')}}"><img src="{{asset('admin/assets/images/'.$product->photo)}}" width="500px" height="500px"alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="{{url('product/'.$product->id.'/detail')}}">{{$product->name}}</a></h3>
                        @if($product->stock == 'available')
                          <td><span class="badge badge-success">{{$product->stock}}</span></td>
                        @else
                            <td><span class="badge badge-danger">{{$product->stock}}</span></td>
                        @endif
                        <p class="price">Rp.{{number_format($product->price)}}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
               </div>
              </div>
              <div class="row">
                <div class="col-md-12 banner mb-small text-center"><a href="#"><img src="img/banner2.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection