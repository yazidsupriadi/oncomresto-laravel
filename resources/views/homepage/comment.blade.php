@extends('homepage.index')

@section('navbar')
  @include('homepage.layout.navbar')
 @endsection
@section('content')
   <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Contact Us</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
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
                                                
                    <form action="{{url('comment')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                                             <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan judul nama anda" >
                      </div>
                                            <div class="form-group">
                        <label for="name">Comment</label>
                        <textarea name="customer_comments" class="form-control" placeholder="masukan comment anda"></textarea>
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