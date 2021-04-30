@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i>Edit {{$data->name}} profile</h1>
        <p>Edit by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">All user</li>
        <li class="breadcrumb-item"><a href="#">Edit user</a></li>
      </ul>
    </div>
    <div class="row">

      <div class="col-12">
        <div class="tile">
          <h3 class="tile-title">Edit from</h3>
          <div class="tile-body">
            <form class="form-horizontal" action="{{route('admin.update.single.user')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <input type="hidden" value="{{$data->id}}" name="id">
              <div class="form-group row">
                <label class="control-label col-md-3">Name</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="{{$data->name}}" placeholder="Enter full name" name="name" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Phone</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="number" value="{{$data->phone}}" placeholder="Enter your phone number" name="phone">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Institute</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="{{$data->institute}}" placeholder="Enter your institute" name="institute">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Birthday</label>
                <div class="col-md-8">
                  <input class="form-control" type="date" value="{{$data->birthday}}" placeholder="Enter full name" name="birthday">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">City</label>
                <div class="col-md-8">
                    <select class="form-control" id="demoSelect" name="city">
                        <optgroup label="Select City">
                          @foreach ($city_data as $city)
                          <option value="{{$city->city_name}}" <?php if($city->city_name==$data->city) echo 'selected'?>   >{{$city->city_name}}</option>
                          @endforeach
                          
                        </optgroup>
                      </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Address</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="4" placeholder="Enter your address" name="address">
                    {{$data->address}}
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Gender</label>
                <div class="col-md-9">
                  <div class="form-check">
                    <input type="radio" id="male" name="gender" value="male" {{ ($data->gender=="male")? "checked" : "" }} >
                      <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" {{($data->gender=="female")? "checked": ""}}>
                      <label for="female">Female</label><br>
                  </div>
                  
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Profile picture</label>
                <div class="col-md-5">
                  <input type="hidden" name="old_profile_pic" value="{{$data->profile_pic}}">
                  <input class="form-control" type="file" name="profile_pic">
                </div>
                <div class="col-md-4">
                  
                    @if (($data->profile_pic) )
                    <img class="user-img  img-fluid w-25" src={{asset($data->profile_pic)}}>
                    @else
                    @if (($data->gender=='female'))
                    <img class="user-img  img-fluid w-25" src={{asset('public/media/avtar-woman.png')}}>
                    @else
                    <img class="user-img  img-fluid w-25" src={{asset('public/media/avtar-man.png')}}>
                    @endif
                    @endif
                   
                    
                  </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Update User info">
              <a href="{{route('admin.show.all.user')}}" class="btn btn-dark">Cancle</a>
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </main>





@endsection
