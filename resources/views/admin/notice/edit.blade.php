@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i>Edit Notice</h1>
        <p>Edit by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">All Notice</li>
        <li class="breadcrumb-item"><a href="#">Edit Notice</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.notice')}}" class="btn btn-info mb-2">All notice</a>
        </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="tile">
          <h3 class="tile-title">Edit notice</h3>
          <div class="tile-body">
            <form class="form-horizontal" action="{{route('admin.update.notice')}}" method="POST" enctype="multipart/form-data">
              @csrf

              
              <div class="form-group row">
                <label class="control-label col-md-3">Notice title</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="{{$data->notice_title}}" name="notice_title" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Notice Description</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="3" name="notice_description">{{$data->notice_description}}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Notice picture (optional)</label>
                <div class="col-md-8">
                  
                  <input class="form-control" type="file" name="notice_picture">
                  <input class="form-control" type="text" name="old_notice_picture" value="{{$data->notice_picture}}">
                </div>
                
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Google drive link (optional)</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="text" value="{{$data->notice_link}}" name="notice_link">
                </div>
              </div>

              <input type="submit" class="btn btn-primary" value="Update Notice">
              <a href="{{route('admin.index.notice')}}" class="btn btn-dark">Cancle</a>
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </main>





@endsection
