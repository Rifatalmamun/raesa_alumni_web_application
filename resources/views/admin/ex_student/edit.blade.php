@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title"> 
      <div>
        <h1><i class="fa fa-edit"></i>Edit Ex-Student</h1>
        <p>Edit by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item"><a href="#">Edit ex-student</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.ex.student')}}" class="btn btn-info mb-2">All Ex-Student</a>
            <a href="{{route('admin.create.ex.student')}}" class="btn btn-info mb-2 ml-2">Add Ex-Student</a>
        </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="tile">
          <h3 class="tile-title">Edit from</h3>
          <div class="tile-body">
            <form class="form-horizontal" action="{{route('admin.update.ex.student')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <input type="hidden" value="{{$data->id}}" name="id">

              <div class="form-group row">
                <label class="control-label col-md-3">Name</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="{{$data->name}}" placeholder="Enter full name" name="name" required>
                </div>
              </div>


              <div class="form-group row">
                <label class="control-label col-md-3">H.SC Batch</label>
                <div class="col-md-8">
                    <select class="form-control" id="demoSelect1" name="batch" required>
                        
                          <option value="" >--/--</option>
                          <option value="1999" <?php if($data->batch=='1999'){echo 'selected';}?> >1999</option>
                          <option value="2000" <?php if($data->batch=='2000'){echo 'selected';}?> >2000</option>
                          <option value="2001" <?php if($data->batch=='2001'){echo 'selected';}?> >2001</option>
                          <option value="2002" <?php if($data->batch=='2002'){echo 'selected';}?> >2002</option>
                          <option value="2003" <?php if($data->batch=='2003'){echo 'selected';}?> >2003</option>
                          <option value="2004" <?php if($data->batch=='2004'){echo 'selected';}?> >2004</option>
                          <option value="2005" <?php if($data->batch=='2005'){echo 'selected';}?> >2005</option>
                          <option value="2006" <?php if($data->batch=='2006'){echo 'selected';}?> >2006</option>
                          <option value="2007" <?php if($data->batch=='2007'){echo 'selected';}?> >2007</option>
                          <option value="2008" <?php if($data->batch=='2008'){echo 'selected';}?> >2008</option>
                          <option value="2009" <?php if($data->batch=='2009'){echo 'selected';}?> >2009</option>
                          <option value="2010" <?php if($data->batch=='2010'){echo 'selected';}?> >2010</option>
                          <option value="2011" <?php if($data->batch=='2011'){echo 'selected';}?> >2011</option>
                          <option value="2012" <?php if($data->batch=='2012'){echo 'selected';}?> >2012</option>
                          <option value="2013" <?php if($data->batch=='2013'){echo 'selected';}?> >2013</option>
                          <option value="2014" <?php if($data->batch=='2014'){echo 'selected';}?> >2014</option>
                          <option value="2015" <?php if($data->batch=='2015'){echo 'selected';}?> >2015</option>
                          <option value="2016" <?php if($data->batch=='2016'){echo 'selected';}?> >2016</option>
                          <option value="2017" <?php if($data->batch=='2017'){echo 'selected';}?> >2017</option>
                          <option value="2018" <?php if($data->batch=='2018'){echo 'selected';}?> >2018</option>
                          <option value="2019" <?php if($data->batch=='2019'){echo 'selected';}?> >2019</option>
                          <option value="2020" <?php if($data->batch=='2020'){echo 'selected';}?> >2020</option>
                          <option value="2021" <?php if($data->batch=='2021'){echo 'selected';}?> >2021</option>

                      </select>
                </div>
              </div>



              <div class="form-group row">
                <label class="control-label col-md-3">Phone</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="number" value="{{$data->phone}}" placeholder="Enter phone number" name="phone" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="email" value="{{$data->email}}" placeholder="Enter email address" name="email" required>
                </div>
              </div>

              
              <div class="form-group row">
                <label class="control-label col-md-3">District</label>
                <div class="col-md-8">
                    <select class="form-control" id="demoSelect" name="district">
                        <optgroup label="Select District">
                          @foreach ($district as $item)
                          <option value="{{$item->city_name}}" <?php if($item->city_name==$data->district) echo 'selected'?>   >{{$item->city_name}}</option>
                          @endforeach
                          
                        </optgroup>
                      </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Address</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="3" placeholder="Enter your address" name="address">{{$data->address}}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Occupation</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="2" placeholder="Enter occupation" name="occupation">{{$data->occupation}}</textarea>
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
                  <input type="hidden" name="old_avatar" value="{{$data->avatar}}">
                  <input class="form-control" type="file" name="avatar">
                </div>
                <div class="col-md-4">
                  
                    @if (($data->avatar) )
                        <img class="user-img  img-fluid w-25" src={{asset($data->avatar)}}>
                    @else
                    @if (($data->gender=='female'))
                    <img class="user-img  img-fluid w-25" src={{asset('public/media/avtar-woman.png')}}>
                    @else
                    <img class="user-img  img-fluid w-25" src={{asset('public/media/avtar-man.png')}}>
                    @endif
                    @endif
                   
                    
                  </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Update Information">
              <a href="{{route('admin.index.ex.student')}}" class="btn btn-dark">Cancle</a>
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </main>





@endsection
