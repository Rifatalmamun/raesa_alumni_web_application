@extends('admin.master')
@section('content')

<main class="app-content">
  
    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.event')}}" class="btn btn-info mb-2">All Event</a>
            <a href="{{route('admin.create.event')}}" class="btn btn-info mb-2 ml-2">Add Event</a>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h3 class="page-header"><i class="fa fa-globe"></i> Event Details</h3>
                </div>
                <div class="col-6">
                  <h5 class="text-right"></h5>
                </div>
              </div>
              <div class="row  invoice-info">
                <div class="col-lg-3 w-50">
                  <div class="profile">
                    <div class="info w-lg-50 w-md-25 w-sm-25 ">
                      @if ($data->event_picture)
                            <img class="user-img img-fluid w-sm-25 w-md-25 w-lg-25 w-50" src={{asset($data->event_picture)}}>
                      @else
                            <img class="user-img img-fluid w-50" src={{asset('public/media/d.png')}}>
                      @endif

                    </div>
                  </div>
                  
                </div>
                <div class="col-9">
                  <ul class="list-group">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($data->event_title)
                          <span><i class="fa fa-user mx-1 text-success" aria-hidden="true"></i> Event title: {{$data->event_title}} </span>
                        @else
                        <span class="text-dark"><i class="fa fa-user mx-1 text-success" aria-hidden="true"></i> --- </span>
                        @endif
                    </li>





                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      @if ($data->date)
                        <span><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> Date: {{$data->date}} </span>
                      @else
                      <span class="text-dark"><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> --- </span>
                      @endif
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    @if ($data->time)
                      <span><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> Time: {{$data->time}} </span>
                    @else
                    <span class="text-dark"><i class="fa fa-graduation-cap mx-1 text-success" aria-hidden="true"></i> --- </span>
                    @endif
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                  @if ($data->event_description)
                    <span><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> Event description: {{$data->event_description}} </span>
                  @else
                  <span class="text-dark"><i class="fa fa-map-marker mx-1 text-success" aria-hidden="true"></i> --- </span>
                  @endif
                  
                </li>

                  </ul>
                  
                </div>
              
              </div>
              
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="{{URL::to('admin/edit-event/'.$data->id)}}" ><i class="fa fa-edit"></i> Edit event</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>


  </main>
@endsection
