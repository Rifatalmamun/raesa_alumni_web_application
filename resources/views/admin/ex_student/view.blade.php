@extends('admin.master')

@section('content')



<main class="app-content">
  

    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.ex.student')}}" class="btn btn-info mb-2">All Ex-Student</a>
            <a href="{{route('admin.create.ex.student')}}" class="btn btn-info mb-2 ml-2">Add Ex-Student</a>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h3 class="page-header"><i class="fa fa-globe"></i> Information</h3>
                </div>
                <div class="col-6">
                  <h5 class="text-right"></h5>
                </div>
              </div>
              <div class="row  invoice-info">
                <div class="col-lg-3 w-50">
                  <div class="profile">
                    <div class="info w-lg-50 w-md-25 w-sm-25 ">
                      @if ($data->avatar)
                            <img class="user-img  img-fluid w-sm-25 w-md-25 w-lg-25 w-50" src={{asset($data->avatar)}}>
                      @else
                            @if (($data->gender=='female'))
                            <img class="user-img  img-fluid w-50" src={{asset('public/media/avtar-woman.png')}}>
                            @else
                            <img class="user-img  img-fluid w-50" src={{asset('public/media/avtar-man.png')}}>
                            @endif
                      @endif

                    </div>
                  </div>
                  
                </div>
                <div class="col-9">
                  <ul class="list-group">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($data->name)
                          <span><i class="fa fa-user mx-1 text-success" aria-hidden="true"></i> Name: {{$data->name}} </span>
                        @else
                        <span class="text-dark"><i class="fa fa-user mx-1 text-success" aria-hidden="true"></i> --- </span>
                        @endif
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($data->batch)
                          <span><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> Batch: {{$data->batch}} </span>
                        @else
                        <span class="text-dark"><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> --- </span>
                        @endif
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->phone)
                        <span><i class="fa fa-phone mx-1 text-success" aria-hidden="true"></i> Phone:  +88 {{$data->phone}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-phone mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>


                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->email)
                        <span><i class="fa fa-envelope mx-1 text-success" aria-hidden="true"></i> Email: {{$data->email}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-envelope mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($data->district)
                          <span><i class="fa fa-building mx-1 text-success" aria-hidden="true"></i> District: {{$data->district}} </span>
                        @else
                        <span class="text-dark"><i class="fa fa-building mx-1 text-success" aria-hidden="true"></i> --- </span>
                        @endif
                        
                      </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->address)
                        <span><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> Address: {{$data->address}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                      
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->occupation)
                        <span><i class="fa fa-handshake-o mx-1 text-success" aria-hidden="true"></i> Occupation: {{$data->occupation}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-handshake-o mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($data->occupation)
                          <span><i class="fa fa-male mx-1 text-success" aria-hidden="true"></i> Gender: {{$data->gender}} </span>
                        @else
                        <span class="text-dark"><i class="fa fa-male mx-1 text-success" aria-hidden="true"></i> --- </span>
                        @endif
                      </li>


                  </ul>
                  
                </div>
              
              </div>
              
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="{{URL::to('admin/edit-ex-student/'.$data->id)}}" ><i class="fa fa-edit"></i> Edit Ex-Student</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>


  </main>
@endsection
