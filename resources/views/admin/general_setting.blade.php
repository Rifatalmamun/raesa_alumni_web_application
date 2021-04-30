@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i>General Setting</h1>
        <p>Edit by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">All user</li>
        <li class="breadcrumb-item"><a href="#">Edit user</a></li>
      </ul>
    </div>
    <form class="form-horizontal" action="{{route('admin.update.general.setting')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row">
      
      <div class="col-12">
        <div class="tile">
          
          <div class="tile-body">
            

              <input type="hidden" value="" name="id">
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Site name</label>
                <div class="col">
                  <input class="form-control" type="text" value="{{$data->site_name}}"  placeholder="Enter full name" name="site_name" required>       
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Site logo</label>
                <div class="col ">
                  <input class="form-control" type="file" value="{{$data->site_logo}}" placeholder="Enter your phone number" name="site_logo"> 

                  <input type="hidden" name="old_site_logo" value="{{$data->site_logo}}">

                </div> 
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Site title</label>
                <div class="col">
                  <input class="form-control" type="text" value="{{$data->site_title}}" placeholder="Site title" name="site_title"> 
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Site url</label>
                <div class="col">
                  <input class="form-control" type="text" value="{{$data->site_url}}" placeholder="Site url" name="site_url">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Currency</label>
                <div class="col">
                    <select class="form-control" class="demoSelect" name="currency">
                        <optgroup label="Select Currency">
                     
                          <option value="BDT" <?php if ($data->currency=='BDT') echo 'selected' ?>>BDT</option>
                          <option value="USD" <?php if ($data->time_zone=='USD') echo 'selected' ?>>USD</option>

                        </optgroup>
                      </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Language</label>
                <div class="col">
                    <select class="form-control" class="demSelect" name="site_language">
                        <optgroup label="Select Language">
                          
                          <option value="English" <?php if ($data->site_language=='English') echo 'selected' ?>>English</option>
                          <option value="Bangla" <?php if ($data->site_language=='Bangla') echo 'selected' ?>>Bangla</option>
                    
                        </optgroup>
                      </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Captca</label>
                <div class="col">
                    <div class="form-check">
                        <input class="mx-2" type="radio" id="captca" name="captca" value="captca" <?php if($data->captca=='captca') echo 'checked'?>>
                          <label for="captca">Yes</label>
                        <input class="mx-2" type="radio" id="nocaptca" name="captca" value="nocaptca" <?php if($data->captca=='nocaptca') echo 'checked'?>>
                          <label for="nocaptca">No</label>
                    </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 font-weight-bold">Time zone</label>
                <div class="col">
                    <select class="form-control" class="demSelect" name="time_zone">
                        <optgroup label="Select Time zone">

                          <option value="Local time" <?php if ($data->time_zone=='Local time') echo 'selected' ?>>Local time</option>                                       
                          <option value="USA" <?php if ($data->time_zone=='USA') echo 'selected' ?>>USA</option>                                                       

                        </optgroup>
                      </select>
                </div>
              </div>

              <input type="submit" class="btn btn-success" value="Update General Setting">        
              {{-- <a href="{{route('admin.show.all.user')}}" class="btn btn-dark">Cancle</a> --}}
            
          </div>
          
        </div>
      </div>

   
    </div>
  </form>
  </main>





@endsection
