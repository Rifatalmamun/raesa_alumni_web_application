@extends('layouts.app')
@section('content')


<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background: url(assets/img/1920/658_2.jpg) no-repeat;">
    <div class="container">
        <h2 class="text-white">Notice Details</h2>
        <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Page</a></li>
            <li class="breadcrumb-item">Notice Details</li>
        </ol>
    </div>
</div>
<section class="paddingTop-50 paddingBottom-100 bg-light-v2">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card align-items-start shadow-v1 p-5">
                    <ul class="list-inline text-gray">
                        <li class="list-inline-item mr-3"><i class="ti-file mr-1"></i>Notice</li>
                        <li class="list-inline-item mr-3"><i class="ti-time mr-1"></i>{{$notice->date}}</li>
                        
                    </ul>
                    <h4 class="mb-4">{{$notice->notice_title}}</h4>

                        @if ($notice->notice_picture!=null)
                            <img src="{{asset($notice->notice_picture)}}" style="width: 27%;">
                        @else
                        <img src="{{asset('public/media/d.png')}}" style="width: 27%;height: 220px;">
                        @endif
                   
                    <p class="mt-3">
                        {{$notice->notice_description}}
                    </p>
                    
                   
                    
                </div>
            </div>

            
            
        </div>
        <!-- END row-->
    </div>
    <!-- END container-->
</section>


@endsection



