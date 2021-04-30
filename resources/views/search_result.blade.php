

@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row mb-5">
        <div class="col">
            <div style="height: 250px; background-color: #2A394E;">
                <h1 class="text-light display-4" style="padding-top: 80px;text-align: center;">Search Result</h1>
                <h4 class="text-light " style="text-align: center;">{{$resultCount}} geeks found</h4>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col">
            <form action="{{route('user.search.result')}}" method="POST">
                @csrf

                <input type="text" name="search_key" class="form-control w-75" placeholder="Search geek here" style="display: inline;" >
                <input type="submit" class="btn btn-primary" >
            </form>
        </div>
    </div>
    <div class="row">

        @foreach ($geeksCategory as $cat)
        <div class="col-md-3 my-3"> 
            <a href="{{URL::to('search/geek/by/category/'.$cat->id)}}" class="text-primary" style=";border-radius: 10px;;padding: 10px;border: 1px solid #ddd;color: #2A394E; font-size: 20px;"> {{$cat->category_name}} </a>
        </div>
        @endforeach

        
    </div>
    <div class="row mt-5">
        @foreach ($geeksCollection as $data)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    <h5>{{$data->title}}</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset($data->geek_picture)}}" alt="" style="width: 300px;height: 200px;">
                </div>
                <div class="card-footer">
                   <p style="margin-bottom: 3px;"> <span class="mr-5">Delevery : {{$data->delivery_time}} {{$data->delevery_zone}} </span> <span>Price: {{$data->price}}</span></p>
                   <small style="display: block"> <span class="mr-2">Revision : {{$data->revision}}</span>  </small>
                   
                </div>
            </div>
        </div> 
        @endforeach
        
    </div>
</div> --}}


<section id="Search_banner" class="clearfix fbg ">
  <div class="container">
      <div class="row ">
        <div class="col-12">
          
                <div class="banner_box">
                  <h4 class="caro_title">Search result - {{$resultCount}}</h4>
                  <h5 class="caro_sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                  <i class="fa fa-search"></i>
                </div>
        </div>
      </div>

      <div class="row search_row">
        <div class="col-12">
          <form action="{{route('user.search.result')}}" method="POST">
              @csrf
            <div class="form-group">
              <input class="form-control inp typing" type="text" name="search_key" placeholder="Type your keyword" required>
              {{-- <input type="button" class="btn btn-success sub_btn" value="submit"> --}}
              <input type="submit" class="btn btn-success sub_btn" >
            </div>
          </form>
        </div>
    </div>

  </div>
</section>


@if ($resultCount>0)
<section id="Geek_section">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="title">Search Bee</h2>
      </div>
    </div>
    <div class="row">

      @foreach ($geeksCollection as $data)
    
        <div class="col-md-3">
          <div class="geek_box">
            <div class="img_part">
              <a href="{{URL::to('view/geek/'.$data->id)}}" target="_blank">
  
                <img src="{{asset($data->geek_picture)}}" alt="">
  
              </a>
            </div>
            <div class="geek_info_part">
              <h5>{{$data->title}}</h5>
          
  
              <ul>
                <li> <span class="pull-left"><i class="fa fa-user"></i> {{$data->category_name}}</span> <span class="pull-right">new seller</span> </li>
  
                <li> <span class="pull-left"><i class="fas fa-sliders-h"></i> revision </span> <span class=" badge badge-info pull-right">{{$data->revision}}</span> </li>
  
                <li> <span class="pull-left"><i class="fa fa-money"></i> price</span> <span class=" badge badge-info pull-right">{{$data->price}} BDT</span> </li>
                
                
                <li> <span class="pull-left"><i class="fa fa-star"></i> 4.5</span> <span class=" badge badge-danger pull-right" style="background: rgb(241, 165, 165);">unverified</span> </li>
           
  
              </ul>
  
            </div>
          </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="row">
      <div class="col">
        <a href="" class="btn view_btn">View All Bee</a>
      </div>
    </div> --}}

  </div>
</section>
@else
<section id="No_data" class="clearfix">
  <div class="container">
      <div class="row">
          <div class="col">
              <h3 class="mt-5">No Data Found ! </h3>
          </div>
      </div>
  </div>
</section>
@endif







@endsection
