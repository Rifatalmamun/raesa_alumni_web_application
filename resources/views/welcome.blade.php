@extends('layouts.app')
@section('content')



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item padding-y-80 height-90vh active">
          <div class="bg-absolute" data-dark-overlay="4" style="background: url(public/media/main.jpg) no-repeat;"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto text-center text-white">
                      <h1 class="display-lg-3 font-weight-bold animated slideInUp">RAESA Alumni - 2023</h1>
                      <p class="lead animated fadeInUp">This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.</p>
                      <a href="#gallery" class="btn btn-primary mt-3 mx-2 animated slideInUp">Photo Gallery</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item padding-y-80 height-90vh">
          <div class="bg-absolute" data-dark-overlay="4" style="background: url(public/media/main.jpg) no-repeat;"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto text-center text-white">
                      <h1 class="display-lg-3 font-weight-bold animated slideInUp">RAESA Alumni - 2023</h1>
                      <p class="lead animated fadeInUp">This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.</p>
                      <a href="#gallery" class="btn btn-primary mt-3 mx-2 animated slideInUp">Photo Gallery</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i> </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i></a>
</div>


<!--CUSTOM SECTION START-->


<section style="margin: 50px 0;">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-12 order-lg-1 order-md-2 order-sm-2">
                        <div class="card">
                            <div class="card-header p-3 px-md-5 bg-primary border-0"><h4 class="text-white mb-0">Notice Board</h4></div>
                            <!-- END card-header-->
                            <div class="card-body p-4 px-md-5">
                                <div  class="accordion-style-2">

                                    @foreach ($notices as $item)
                                        <div class="accordion-item border-bottom wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                                            <a href="{{URL::to('notice/'.$item->id)}}" class="accordion__title h6 py-3" >
                                                <span class="accordion__icon float-right ml-3"><i class="ti-plus"></i>  </span>{{$item->notice_title}}
                                                <small class="d-block mt-1">{{$item->date}}</small>
                                            </a>
                                            <div id="acc2_1" class="collapse show" data-parent="#accordion-2" style="">
                                                @php
                                                    $cut_description = substr($item->notice_description, 0, 20);
                                                @endphp
                                                <div class="p-0"><p>{{$cut_description}} ...</p></div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <a href="{{URL::to('/notice')}}"><small class="d-block mt-1">All notice</small></a>

                                    
  
                                </div>
                                <!-- END accordion-2-->
                            </div>
                            <!-- END card-body-->
                        </div>
                        <!-- END card-->
                    </div>
            
                    <div class="col-lg-4 col-md-12 order-lg-2 order-md-3 order-sm-3">
                        <div class="card">
                            <div class="card-header p-3 px-md-5 bg-primary border-0"><h4 class="text-white mb-0">News & Events</h4></div>
                            <!-- END card-header-->
                            <div class="card-body p-4 px-md-5">
                                <div  class="accordion-style-2">

                                    @foreach ($events as $item)
                                        <div class="accordion-item border-bottom wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                                            <a href="{{URL::to('event/'.$item->id)}}" class="accordion__title h6 py-3" >
                                                <span class="accordion__icon float-right ml-3"><i class="ti-plus"></i>  </span>{{$item->event_title}}
                                            </a>
                                            @php
                                                    $cut_description_event = substr($item->event_description, 0, 20);
                                            @endphp

                                            <div id="acc2_1" class="collapse show" data-parent="#accordion-2" style="">
                                                <div class="p-0"><p>{{$cut_description_event}}</p></div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <a href="{{URL::to('/event')}}"><small class="d-block mt-1">All event</small></a>
  
                                </div>
                                <!-- END accordion-2-->
                            </div>
                            <!-- END card-body-->
                        </div>
                        <!-- END card-->
                    </div>
            
            
                    <div class="col-lg-4 col-md-12 order-lg-3 order-md-1 order-sm-1 ">
                        <div class="card shadow-v1">
                            <img class="card-img-top" src="{{asset('public/frontend/assets/img/blog/card/1.jpg')}}" alt="" />
                            <div class="card-body">
                                <a href="#" class="h6 mb-3">Message from president</a>
                                <h6>Dr. Er. Abdullah</h6>
                                <small>Executive Chairman, RAESA</small>
                                <p class="mb-0">I am humbled, honored and privileged to assume the role of executive chairman of Rajgonj High School Ex-Student Association (RAESA) ... <a href="{{URL::to('/message')}}">see more</a> </p>
                            </div>
                            
                        </div>
                    </div>
            
                    
                </div>
            </div>
        </div>
    </div>
</section>



<!--CUSTOM SECTION START-->



<section id="gallery" class="padding-y-100 border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h4>Alumni <span class="text-primary">Photo Gallery</span></h4>
            </div>

        </div>

        <div class="row isotop-filter">
            <div class="col-lg-4 col-md-6 marginTop-30 creative">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/1.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/1.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 marginTop-30 corporate creative">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/2.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/2.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 marginTop-30 ui-ux">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/3.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/3.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 marginTop-30 web-design corporate">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/4.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/4.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 marginTop-30 creative ui-ux">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/5.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/5.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 marginTop-30 creative ui-ux">
                <div class="media-viewer">
                    <img class="media-viewer__media" src="{{asset('public/frontend/assets/img/360x300/5.jpg')}}" alt="" />
                    <div class="media-viewer__overlay bg-black-0_7 flex-center">
                        <a href="{{asset('public/frontend/assets/img/360x300/5.jpg')}}" class="iconbox bg-white" data-fancybox="gallery"><i class="ti-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END row-->
    </div>
    <!-- END container-->
</section>








@endsection
