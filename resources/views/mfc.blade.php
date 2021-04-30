@extends('layouts.app')
@section('content')

<section class="padding-y-100">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">Message from president</h2>
                <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row align-items-center">
                    <div class="col-lg-4 mr-auto mt-5 wow fadeIn"><img class="w-100" src="{{asset('public/media/p.jpg')}}" alt="" /></div>
                    <div class="col-lg-7 mt-5 wow fadeIn">
                        <h4 class="h3 mb-4"><span class="text-primary d-md-block">RAESA ALUMNI - 2023</span></h4>
                        <p style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa expedita? Non iusto laudantium beatae qui minus voluptatem hic! Quidem veritatis esse aliquid nulla rem libero voluptatem, ab quo laborum quis. Est, ea blanditiis! Doloribus optio praesentium deserunt minima dolor sed harum assumenda vitae. Sapiente nostrum similique consectetur molestiae repellat.
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


@endsection
