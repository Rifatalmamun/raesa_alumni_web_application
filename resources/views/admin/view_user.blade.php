@extends('admin.master')

@section('content')



<main class="app-content">
    {{-- <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src={{asset($data->profile_pic)}}>
              <h4>{{$data->name}}</h4>
              <p>FrontEnd Developer</p>
            </div>
          
          </div>
        </div>
      </div> --}}


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h3 class="page-header"><i class="fa fa-globe"></i> Information</h3>
                </div>
                <div class="col-6">
                  <h5 class="text-right">New User</h5>
                </div>
              </div>
              <div class="row  invoice-info">
                <div class="col-lg-3 w-50">
                  <div class="profile">
                    <div class="info w-lg-50 w-md-25 w-sm-25 ">
                      @if (($data->profile_pic) )
                      <img class="user-img  img-fluid w-sm-25 w-md-25 w-lg-25 w-50" src={{asset($data->profile_pic)}}>
                      @else
                      @if (($data->gender=='female'))
                      <img class="user-img  img-fluid w-50" src={{asset('public/media/avtar-woman.png')}}>
                      @else
                      <img class="user-img  img-fluid w-50" src={{asset('public/media/avtar-man.png')}}>
                      @endif
                      @endif
                       

                      <h5 class="text-dark mt-3">{{$data->name}}</h5>
                      <small class="text-dark">Username: {{$data->username}}</small>
                      <p>Article Writter</p>
                    </div>
                    {{-- <div class="cover-image"></div> --}}
                  </div>
                  {{-- <address><strong>{{$data->phone}}</strong><br>Email: {{$data->email}}<br>City: {{$data->city}}<br>Username: {{$data->username}}<br>Country: {{$data->country}}</address> --}}
                </div>
                <div class="col-lg-5">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->phone)
                        <span><i class="fa fa-phone mx-1 text-success" aria-hidden="true"></i>+88 {{$data->phone}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-phone mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->email)
                        <span><i class="fa fa-envelope mx-1 text-success" aria-hidden="true"></i> {{$data->email}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-envelope mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->address)
                        <span><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> {{$data->institute}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                      
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->address)
                        <span><i class="fa fa-building mx-1 text-success" aria-hidden="true"></i> {{$data->city}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-building mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                      
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->address)
                        <span><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> {{$data->address}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>
                  </ul>
                  {{-- <address><strong>Complete Order 45</strong><br>Current Order: 2<br>Total Geeks: 7<br>Active Geeks: 6<br>Success rate: 95%</address> --}}
                </div>
                <div class="col-lg-4 ">

                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>User ID</strong>
                      <span class="badge badge-success badge-pill">7</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="" class="text-decoration-none">Geeks</a>
                      <span class="badge badge-primary badge-pill ">5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                     <a href="" class="text-decoration-none"> Order</a>
                      <span class="badge badge-primary badge-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Join</span>
                       <span class="badge badge-primary badge-pill">20.02.2020</span>
                     </li>
                  </ul>


                </div>
              </div>
              
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="{{route('admin.show.all.user')}}" ><i class="fa fa-print"></i> All User</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>





      <div class="row">      
        <div class="col-md-6 col-lg-4">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users "></i>
            <div class="info">
              <h4><a href="#" class="text-decoration-none text-dark">Account</a></h4>
              <p><b>45$</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4><a href="#" class="text-decoration-none text-dark">Withdraw</a></h4>
              <p><b>30$</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4><a href="#" class="text-decoration-none text-dark">Rating</a></h4>
              <p><b>4.7</b></p>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Total</h4>
              <p><b>$1055424</b></p>
            </div>
          </div>
        </div> --}}
      </div>



  </main>




@endsection
