  <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{url('/')}}" class="nav-link">Home Page</a></li>
                    <li class="dropdown-item"><a href="{{url('/desk')}}" class="nav-link">Desk Info</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Products<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Products</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{url('product')}}" class="nav-link">See all product</a></li>
                            
                        </div>
                    
                      </div>
                    </li>
                  </ul>
                </li>
                
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">Category <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        @foreach($category as $cat)
                        <div class="col-md-6 col-lg-3">
                          <h5>{{$cat->name}}</h5>
                          <ul class="list-unstyled mb-3">

                          @foreach($cat->children as $sub)
                            <li class="nav-item"><a href="{{url('/product/'.$sub->slug)}}" class="nav-link">{{$sub->name}}</a></li>

                          @endforeach
                          </ul>
                        </div>
                        @endforeach
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{url('comment')}}" class="nav-link">Leave a comment Page</a></li>
                  </ul>
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>