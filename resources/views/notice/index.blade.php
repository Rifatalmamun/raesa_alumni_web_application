@extends('layouts.app')
@section('content')


<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background: url(assets/img/1920/658_2.jpg) no-repeat;">
    <div class="container">
        <h2 class="text-white">Notice</h2>
        <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Notice</li>
        </ol>
    </div>
</div>
<section class="paddingTop-50 paddingBottom-100 bg-light-v2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mt-5">
                
                @foreach ($notices as $item)
                    <div class="d-md-flex justify-content-between align-items-center bg-white shadow-v1 rounded mb-4 py-4 px-5 hover:transformLeft">
                        <div class="media align-items-center">
                            <div class="text-center border-right pr-4">
                                <strong class="text-primary font-size-38"><i class="fas fa-bullhorn"></i></strong>
                                <p class="mb-0 text-gray">{{$item->date}}</p>
                            </div>
                            <div class="media-body p-4">
                                <p class="mb-1 text-gray"><i class="ti-file"></i> Notice</p>
                                <a href="page-notice-details.html" class="h5">{{$item->notice_title}}</a>
                            </div>
                        </div>
                        <a href="{{URL::to('notice/'.$item->id)}}" class="btn btn-outline-primary">Read More</a>
                    </div>
                @endforeach
                
                
            </div>
            <div class="col-lg-3 mt-5">
                
            </div>
        </div>
        <!-- END row-->
    </div>
    <!-- END container-->
</section>


@endsection



