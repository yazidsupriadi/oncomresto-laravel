 @extends('homepage.index')

@section('navbar')
  @include('homepage.layout.navbar')
 @endsection
 @section('header')
  <title>Oncom Shop - Jual gadget murah</title>
    
 @endsection
 @section('slider')
     <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">{{$products->name}}</h1>

            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">See all products</li>
                <li class="breadcrumb-item active"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
 @endsection
 @section('content')
 <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <p class="lead">Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be. So landlord by we unlocked sensible it. Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty her had. Or belonging zealously existence as by resources.</p>
              <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a></p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="{{asset('admin/assets/images/'.$products->photo)}}" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                    <form action="{{url('/cart/add')}}" method="post">
                      @csrf
                      <p class="price">Rp.{{number_format($products->price)}}</p>
                      <input type="hidden" name="qty" value="1">
                      <input type="hidden" name="product_id" value="{{$products->id}}">
                      @if($products->stock == 'available')
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                      </p>
                      @else

                      @endif
                    </form>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Product details</h4>
                <p>{!!$products->description!!}</p>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Show it to your friends</h4>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
           
            </div>
                <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <ul class="nav nav-pills flex-column text-sm category-menu">
                    @foreach($category as $cat)
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between text-primary"><span>{{$cat->name}} </span><span class="badge badge-secondary"></span></a>
                      <ul class="nav nav-pills flex-column">
                        @foreach($cat->children as $sub)
                        <li class="nav-item"><a href="shop-category.html" class="nav-link"> -{{$sub->name}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                    @endforeach
                  </ul>
                 
                  </ul>
                </div>
              </div>
        
            
            </div>
          </div>
        </div> 
      </div>
@endsection