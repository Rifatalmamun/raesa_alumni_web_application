@php
       $count = 0;     
       
       if($data->name!=null){
         $count +=10; 
       }
       if($data->username!=null){
         $count +=10; 
       }
       if($data->email!=null){
         $count +=10; 
       }
       if($data->phone!=null){
         $count +=10; 
       }
       if($data->institute!=null){
         $count +=10; 
       }
       if($data->address!=null){
         $count +=10; 
       }
       if($data->city!=null){
         $count +=10; 
       }
       if($data->country!=null){
         $count +=10; 
       }
       if($data->gender!=null){
         $count +=10; 
       }
       if($data->birthday!=null){
         $count +=10; 
       }

@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="my-4">User Profile -- {{$count}} %</h2>



            <hr>
              <ul>
                <li>Id: {{$data->id}}</li>
                <li>Name: {{$data->name}}</li>
                <li>Username: {{$data->username}}</li>
                <li>Email: {{$data->email}}</li>
                <li>Phone: {{$data->phone}}</li>
                <li>Institute: {{$data->institute}}</li>
                <li>Address: {{$data->address}}</li>
                <li>City: {{$data->city}}</li>
                <li>Country: {{$data->country}}</li>
                <li>Gender: {{$data->gender}}</li>
                <li>Birthday: {{$data->birthday}}</li>
              </ul>
              

              <a href="{{route('show.profile.edit.form')}}" class="btn btn-block btn-primary">Update my profile</a>
        </div>
        <div class="col-md-6">
          <img src="{{asset($data->profile_pic)}}" alt="" style="height: 200px;widht: 200px;">
        </div>
    </div>
</div>
@endsection
