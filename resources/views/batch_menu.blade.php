

@extends('layouts.app')
@section('content')

        <div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background: url(public/frontend/assets/img/breadcrumb-bg.jpg) no-repeat;">
            <div class="container">
                <h2 class="text-white">Alumni Student Batch</h2>
                <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                    <li class="breadcrumb-item">Ex-student</li> 
                </ol>
            </div>
        </div>

        <section class="padding-y-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-2"><h4>Ex-Student Batch</h4></div> 
                    <div class="col-12 pt-5 pb-4 ">
                        
                        @for ($i = 1948; $i < 2021; $i++)
                            <a class="btn btn-info mr-3 mb-3 " style="width: 150px;" href="{{URL::to('batch/'.$i)}}"> {{ $i }} </a>
                           
                        @endfor
                        
                    </div>
                </div>
                <!-- END row-->
            </div>
            <!-- END container-->
        </section>
        


@endsection
