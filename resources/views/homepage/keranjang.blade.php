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
              <h1 class="h2">Your Orders</h1>

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
            <div class="col-lg-12">
              <p class="text-muted lead">You currently have 3 item(s) in your cart.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="POST" action="{{url('cart/update')}}">
                  @csrf
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach(Cart::getContent() as $row)
                        <tr>

                          <td></td>
                          <td><a href="#">{{$row->name}}</a></td>
                          <td>
                            <input type="number" name="qty" value="{{$row->quantity}}" class="form-control">
                          </td>
                          <td>{{$row->price}}</td>
                          <td>{{$row->quantity * $row->price}}</td>
                          <td><a href="{{url('cart/delete/'.$row->id)}}"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4">Total</th>
                          <th colspan="4">{{Cart::getTotal()}}</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="{{url('/')}}" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right-col">
                     
                      <a href="{{url('cart/formulir')}}" type="submit" class="btn btn-template-outlined">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
        
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>$446.00</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>$10.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>$0.00</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>$456.00</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>Coupon code</h4>
                </div>
                <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection