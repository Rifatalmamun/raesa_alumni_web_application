@extends('layouts.app')
@section('content')

        <div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background: url(public/frontend/assets/img/breadcrumb-bg.jpg) no-repeat;">
            <div class="container">
                <h2 class="text-white">Batch {{$batch}}</h2>
                <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                    <li class="breadcrumb-item">Ex-student</li> 
                </ol>
            </div>
        </div>
        <section class="paddingTop-50 paddingBottom-120 bg-light">
            <div class="container">
                <div class="row">

                    @if (count($student)==0)
                        <div class="col">
                            <h5>No Ex-Student Found! From Batch {{$batch}}</h5>
                        </div>
                    @else 

                        @foreach ($student as $item)
                        <div class="col-lg-4 col-md-6 marginTop-30">
                            <div href="page-course-details.html" class="card height-100p text-gray shadow-v1">

                                @if ($item->avatar!=null)
                                    <img class="card-img-top" src="{{asset($item->avatar)}}" style="height: 250px;" />
                                @else
                                    <img class="card-img-top" src="{{asset('public/media/no.jpg')}}" style="height: 250px;" />
                                @endif


                                
                                <div class="card-body">
                                    <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">{{$item->batch}}</span><a href="javascript:void(0)" class="h5" style="cursor: text;">{{$item->name}}</a>
                                    <p class="my-3">District: {{$item->city_name}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    
                    @endif
                    

                    
                    
                    
                    
                </div>
                <!--END row-->
            </div>
            <!--END container-->
        </section>


@endsection
