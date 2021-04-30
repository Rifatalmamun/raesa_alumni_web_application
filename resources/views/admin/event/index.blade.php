@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> All event</h1>
        <p>Table to display event data</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active"><a href="#">all event</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('admin.create.event')}}" class="btn btn-info mb-2">Add event</a>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Event title</th>
                    <th>Date</th>
                    <th>Time</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($events as $item)
                    <tr>
                        <td>{{$item->event_title}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->time}}</td>
                        
                 
                        <td>
                            <a href="{{ URL::to('admin/view-event/'.$item->id) }}" class="btn btn-sm btn-info" title="View"> <i class="fa fa-eye"></i> </a>
        
                            <a href="{{URL::to('admin/edit-event/'.$item->id)}}" class="btn btn-sm btn-warning" title="Edit"> <i class="fa fa-edit"></i> </a>
                              
                            <a href="{{URL::to('admin/delete-event/'.$item->id)}}" id="delete" class="btn btn-sm btn-danger" title="Delte"> <i class="fa fa-trash"></i> </a>
                            
                        </td>
                        
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>




@endsection
