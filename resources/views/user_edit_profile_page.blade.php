@php
    $district = DB::table('cities')->get();
@endphp

@extends('layouts.app')
@section('content')

        <div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background: url(public/frontend/assets/img/breadcrumb-bg.jpg) no-repeat;">
            <div class="container">
                <h2 class="text-white">My Profile</h2>
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
                                <li class="nav-item"><a class="nav-link active" href="{{route('show.profile.edit.form')}}" role="tab" aria-selected="true">Update Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('show.user.password.change')}}" role="tab" aria-selected="true">Change Password</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
                                   
                                    <div class="border-bottom mb-4 pb-4">
                                        <h4 class="mb-4">Profile edit</h4>
                                        
                                        <form method="POST" action="{{ route('update.user.profile') }}"    enctype="multipart/form-data">
                                          @csrf
                            
                                          <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                                          
                                          <div class="row">

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">Full name*</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="{{$data->name}}" placeholder="name" value="Otto" required name="name">
                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">Mobile number*</label>
                                                <input type="text" class="form-control" id="validationCustom04" value="{{$data->phone}}" placeholder="phone"  name="phone" >
                                              </div>
                                            </div>


                                            {{-- <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">Email*</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="{{$data->name}}" placeholder="name" value="Otto" required name="name">
                                              </div>
                                            </div> --}}


                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">SSC Batch*</label>

                                                <select id="batch" class="form-control" id="demoSelect1" name="batch" required>
                        
                                                  <option value="" >--/--</option>
                                                  <option value="1999" <?php if( $data->batch=='1999'){echo 'selected';} ?> >1999</option>
                                                  <option value="2000" <?php if( $data->batch=='2000'){echo 'selected';} ?> >2000</option>
                                                  <option value="2001" <?php if( $data->batch=='2001'){echo 'selected';} ?> >2001</option>
                                                  <option value="2002" <?php if( $data->batch=='2002'){echo 'selected';} ?> >2002</option>
                                                  <option value="2003" <?php if( $data->batch=='2003'){echo 'selected';} ?> >2003</option>
                                                  <option value="2004" <?php if( $data->batch=='2004'){echo 'selected';} ?> >2004</option>
                                                  <option value="2005" <?php if( $data->batch=='2005'){echo 'selected';} ?> >2005</option>
                                                  <option value="2006" <?php if( $data->batch=='2006'){echo 'selected';} ?> >2006</option>
                                                  <option value="2007" <?php if( $data->batch=='2007'){echo 'selected';} ?> >2007</option>
                                                  <option value="2008" <?php if( $data->batch=='2008'){echo 'selected';} ?> >2008</option>
                                                  <option value="2009" <?php if( $data->batch=='2009'){echo 'selected';} ?> >2009</option>
                                                  <option value="2010" <?php if( $data->batch=='2010'){echo 'selected';} ?> >2010</option>
                                                  <option value="2011" <?php if( $data->batch=='2011'){echo 'selected';} ?> >2011</option>
                                                  <option value="2012" <?php if( $data->batch=='2012'){echo 'selected';} ?> >2012</option>
                                                  <option value="2013" <?php if( $data->batch=='2013'){echo 'selected';} ?> >2013</option>
                                                  <option value="2014" <?php if( $data->batch=='2014'){echo 'selected';} ?> >2014</option>
                                                  <option value="2015" <?php if( $data->batch=='2015'){echo 'selected';} ?> >2015</option>
                                                  <option value="2016" <?php if( $data->batch=='2016'){echo 'selected';} ?> >2016</option>
                                                  <option value="2017" <?php if( $data->batch=='2017'){echo 'selected';} ?> >2017</option>
                                                  <option value="2018" <?php if( $data->batch=='2018'){echo 'selected';} ?> >2018</option>
                                                  <option value="2019" <?php if( $data->batch=='2019'){echo 'selected';} ?> >2019</option>
                                                  <option value="2020" <?php if( $data->batch=='2020'){echo 'selected';} ?> >2020</option>
                                                  <option value="2021" <?php if( $data->batch=='2021'){echo 'selected';} ?> >2021</option>
                        
                                              </select>



                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                
                                                <label for="batch">District</label>
                                        
                                                  <select class="form-control" id="demoSelect" name="district" required>
                                                      <option value="" >--Select District--</option>
                                                    @foreach ($district as $city)
                                                      <option value="{{$city->id}}" <?php if($data->district==$city->id){echo 'selected';} ?>>{{$city->city_name}}</option>
                                                    @endforeach                                
                                                  </select>
                                              </div>
                                            </div>

                                           

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">Profile picture</label>
                                                <input type="hidden" value="{{$data->avatar}}" name="old_avatar">
                                  
                                                <input type="file" class="form-control" name="avatar" >
                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="Your name">Gender</label>
                                                
                                                <select class="form-control" name="gender">
                                                  <option value="" >--Select--</option>
                                                  <option value="male" <?php if(Auth::user()->gender=='male'){echo 'selected';} ?> >Male</option>
                                                  <option value="female" <?php if(Auth::user()->gender=='female'){echo 'selected';} ?> >Female</option>

                                              </select>

                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >Occupation</label>
                                                <textarea name="occupation" class="form-control" rows="3">{{$data->occupation}}</textarea>
                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >Address</label>
                                                <textarea name="address" class="form-control" rows="3">{{$data->address}}</textarea>
                                              </div>
                                            </div>

                                          </div>

                                          
                                          <input type="submit" value="Update Profile" class="btn btn-primary ">
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
