@extends('homepage.index')

@section('navbar')
  @include('homepage.layout.navbar')
 @endsection
@section('content')
   <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Booking Form</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Booking Form</li>
              </ul>
            </div>
          </div>
        </div>
    </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <p class="text-muted lead">If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                                                
                   <form action="{{url('cart')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">Nama Customer</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan Nama anda" value="" >
                      </div>


                      <div class="form-group">
                        <label for="name">Code</label>
                        <input type="text" class="form-control" name="code" placeholder="Code transaksi" value="{{date('ymdis')}}"readonly"" >
                      </div>



                       <div class="form-group">
                          <select name="desk_id" class="form-control">
                              @foreach($desks as $desk)
                              <label>Nomor meja</label>
                              <option value="">Pilih Meja</option>}
                              <option value="{{$desk->id}}">{{$desk->name}}</option>
                              @endforeach
                          </select>
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
@endsection                                 
  