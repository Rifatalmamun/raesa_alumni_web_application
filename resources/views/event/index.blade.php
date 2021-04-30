@extends('layouts.app')
@section('content')


<section class="padding-y-120 bg-light-v4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Our Events</h2>
                <div class="width-3rem height-4 rounded bg-primary mx-auto mb-4"></div>
            </div>
            @php
                $i = 1;
            @endphp
            @foreach ($events as $item)
                <div class="col-md-6 mt-5">
                    <h4>{{$i}}. {{$item->event_title}}</h4>
                    <p>Publish Date: {{$item->date}}</p>
                    <p><a href="{{URL::to('event/'.$item->id)}}" style="color: rgb(7, 100, 206);">See details</a></p>
                </div>
            @endforeach
            
        </div>
        <!-- END row-->
    </div>
    <!-- END container-->
</section>


@endsection



