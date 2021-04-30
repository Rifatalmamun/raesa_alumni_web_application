@extends('layouts.app')
@section('content')



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item padding-y-80 height-90vh active">
          <div class="bg-absolute" data-dark-overlay="4" style="background: url(public/frontend/assets/img/1920x800/4.jpg) no-repeat;"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto text-center text-white">
                      <h1 class="display-lg-3 font-weight-bold animated slideInUp">RAESA Alumni - 2023</h1>
                      <p class="lead animated fadeInUp">This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.</p>
                      <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp">Learn More</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item padding-y-80 height-90vh">
          <div class="bg-absolute" data-dark-overlay="4" style="background: url(public/frontend/assets/img/1920x800/2.jpg) no-repeat;"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto text-center text-white">
                      <h1 class="display-lg-3 font-weight-bold animated slideInUp">RAESA Alumni - 2023</h1>
                      <p class="lead animated fadeInUp">This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.</p>
                      <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp">Learn More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i> </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i></a>
</div>




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

<section class="padding-y-100 border-bottom border-light">
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
