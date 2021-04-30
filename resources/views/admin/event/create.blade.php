@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i>Add Event</h1>
        <p>Add by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Add Event</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.event')}}" class="btn btn-info mb-2">All event</a>
            
        </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="tile">
          <h3 class="tile-title">Add event</h3>
          <div class="tile-body">
            <form class="form-horizontal" action="{{route('admin.store.event')}}" method="POST" enctype="multipart/form-data">
              @csrf

              
              <div class="form-group row">
                <label class="control-label col-md-3">event title</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="{{old('event_title')}}" name="event_title" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">event Description</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="3" name="event_description"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">event picture (optional)</label>
                <div class="col-md-8">
                  
                  <input class="form-control" type="file" name="event_picture">
                </div>
                
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Google drive link (optional) </label>
                <div class="col-md-8 ">
                  <input class="form-control" type="text" value="{{old('event_link')}}" name="event_link">
                </div>
              </div>

              <input type="submit" class="btn btn-primary" value="Add Event">
              <a href="{{route('admin.index.event')}}" class="btn btn-dark">Cancle</a>
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </main>





@endsection
