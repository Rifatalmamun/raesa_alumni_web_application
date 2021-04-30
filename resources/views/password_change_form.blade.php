     
@php
        $district = DB::table('cities')->get();
@endphp
                          
                          @extends('layouts.app')
                          @section('content')
                          
                                  <div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background: url(public/frontend/assets/img/breadcrumb-bg.jpg) no-repeat;">
                                      <div class="container">
                                          <h4 class="text-white">Change Password</h4>
                                          <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
                                              <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                              <li class="breadcrumb-item">profile</li>
                                          </ol>
                                      </div>
                                  </div>
                                  <section class="paddingTop-50 paddingBottom-120 bg-light">
                                      <div class="container">
                                          <div class="row">
                                              <div class="col-lg-4 mt-4">
                                                  <div class="card shadow-v1">
                                                      <div class="card-header text-center border-bottom pt-5 mb-4">
                                                          
                                                          @if (Auth::user()->avatar!=null)
                                                          <img class="rounded-circle mb-4" src="{{asset(Auth::user()->avatar)}}" width="200" height="200" alt="" />
                                                          @else
                                                          <img class="rounded-circle mb-4" src="{{asset('public/media/no.jpg')}}" width="200" height="200" alt="" />
                                                          @endif
                          
                                                          <h4>{{Auth::user()->name}}</h4>
                                                          <p><i class="ti-book text-primary"></i> SSC {{Auth::user()->batch}}</p>
                          
                                                      </div>
                                                      <div class="card-body">
                                                          <ul class="list-unstyled">
                                                              <li class="mb-3"><span class="d-block">Email address:</span> <a class="h6" href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></li>
                                                              <li class="mb-3"><span class="d-block">Phone:</span> <a class="h6" href="#">{{Auth::user()->phone}}</a></li>
                          
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- END col-md-4 -->
                                              <div class="col-lg-8 mt-4">
                                                  <div class="card shadow-v1 padding-30">
                                                      <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
                                                          <li class="nav-item"><a class="nav-link " href="{{route('home')}}" role="tab" aria-selected="true">About</a></li>
                                                          <li class="nav-item"><a class="nav-link " href="{{route('show.profile.edit.form')}}" role="tab" aria-selected="true">Update Profile</a></li>
                                                          <li class="nav-item"><a class="nav-link active" href="{{route('show.user.password.change')}}" role="tab" aria-selected="true">Change Password</a></li>
                          
                                                      </ul>
                                                      <div class="tab-content">
                                                          <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
                                                             
                                                              <div class="border-bottom mb-4 pb-4">
                                                                  <h4 class="mb-4">Password Change</h4>
                                                                  
                                                                  
                                                                  @if ($errors->any())
                                                                  <div class="alert alert-danger">
                                                                      <ul>
                                                                          @foreach ($errors->all() as $error)
                                                                              <li>{{ $error }}</li>
                                                                          @endforeach
                                                                      </ul>
                                                                  </div>
                                        @endif
              
                                            <form method="POST" action="{{ route('change.user.password') }}"    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="Your name" >Current password</label>
                                                        <input type="password" class="form-control" required name="oldpass" placeholder="Current password">        
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="Your name" >New password <small>(length must be greater or equal 8)</small></label>
                                                        <input type="password" class="form-control" name="password" placeholder="New password" >
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="Your name" >Confirm password</label>
                                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" >
                                                    </div>
                                                    <input type="submit" value="Change password" class="btn btn-primary">
                                            </form>

                          
                          
                          
                                                              </div>
                                                          </div>
                          
                                                  
                          
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                          
                          
                          
                          
                          
                          
                          @endsection
                          












