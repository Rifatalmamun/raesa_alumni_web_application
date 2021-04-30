@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i>Add Ex-Student</h1>
        <p>Add by admin</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">All user</li>
        <li class="breadcrumb-item"><a href="#">Add ex-student</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{route('admin.index.ex.student')}}" class="btn btn-info mb-2">All Ex-Student</a>
        </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="tile">
          <h3 class="tile-title">Add Ex-Student</h3>
          <div class="tile-body">
            <form class="form-horizontal" action="{{route('admin.store.ex.student')}}" method="POST" enctype="multipart/form-data">
              @csrf

              
              <div class="form-group row">
                <label class="control-label col-md-3">Name</label>
                <div class="col-md-8">
                  <input class="form-control" type="text"  placeholder="Enter full name" value="{{old('name')}}" name="name" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">S.SC Batch</label>
                <div class="col-md-8">
                    <select class="form-control" id="demoSelect1" name="batch" required>
                        
                          <option value="" >--/--</option>
                          <option value="1999" >1999</option>
                          <option value="2000" >2000</option>
                          <option value="2001" >2001</option>
                          <option value="2002" >2002</option>
                          <option value="2003" >2003</option>
                          <option value="2004" >2004</option>
                          <option value="2005" >2005</option>
                          <option value="2006" >2006</option>
                          <option value="2007" >2007</option>
                          <option value="2008" >2008</option>
                          <option value="2009" >2009</option>
                          <option value="2010" >2010</option>
                          <option value="2011" >2011</option>
                          <option value="2012" >2012</option>
                          <option value="2013" >2013</option>
                          <option value="2014" >2014</option>
                          <option value="2015" >2015</option>
                          <option value="2016" >2016</option>
                          <option value="2017" >2017</option>
                          <option value="2018" >2018</option>
                          <option value="2019" >2019</option>
                          <option value="2020" >2020</option>
                          <option value="2021" >2021</option>

                      </select>
                </div>
              </div>


              <div class="form-group row">
                <label class="control-label col-md-3">Phone</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="number"  placeholder="Enter phone number" value="{{old('phone')}}" name="phone">
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-8 ">
                  <input class="form-control" type="email"  placeholder="Enter email address" value="{{old('email')}}" name="email">
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">District</label>
                <div class="col-md-8">
                    <select class="form-control" id="demoSelect" name="district">
                        <optgroup label="Select District">
                          @foreach ($district as $city)
                          <option value="{{$city->city_name}}" >{{$city->city_name}}</option>
                          @endforeach
                          
                        </optgroup>
                      </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Address</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="3" placeholder="Enter address" name="address"></textarea>
                </div>
              </div>


              <div class="form-group row">
                <label class="control-label col-md-3">Occupation</label> 
                <div class="col-md-8">
                  <textarea class="form-control" rows="2" placeholder="Occupation (optional)" name="occupation"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Gender</label>
                <div class="col-md-9">
                  <div class="form-check">
                    <input type="radio" id="male" name="gender" value="male" checked >
                      <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" >
                      <label for="female">Female</label><br>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Profile picture</label>
                <div class="col-md-5">
                  
                  <input class="form-control" type="file" name="avatar">
                </div>
                
              </div>

              <input type="hidden" value="123456" name="password">

              <input type="submit" class="btn btn-primary" value="Add Ex-Student">
              <a href="{{route('admin.index.ex.student')}}" class="btn btn-dark">Cancle</a>
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </main>





@endsection
