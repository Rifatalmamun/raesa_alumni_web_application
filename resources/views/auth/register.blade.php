@php
    
    $district = DB::table('cities')->get();

@endphp

@extends('layouts.app')
@section('content')



{{-- <section id="Registration_section" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title"> Scholars Bee | User Registration  </h2>
            </div>
        </div>
        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="Your name">Your Name*</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Typr your name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <label for="Your name">Username*</label>
                    <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username"  required placeholder="Typr your username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                <div class="form-group">
                  <label for="Your name">Email address*</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Typr your email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  <span  role="alert">
                    <strong>These credentials do not match our records.</strong> 
                  </span>
                  
                </div>
                <div class="form-group">
                  <label for="Your name">Password*<small>(must be length at least 6)</small></label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Typr password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  <span  role="alert">
                    <strong>These credentials do not match our records.</strong>
                  </span>
                </div>
                <div class="form-group">
                  <label for="Your name">Confirm Password*</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                </div>
              </div>
              <input onclick="notice()" class="btn regi_btn disabled" type="submit" value="Registration">
              <p>Already have Account? <a href="{{route('login')}}">Login</a> </p>
    
            </div>
          </form>
    </div>

</section> --}}


        
        <!-- END site-search-->
        <section class="padding-y-100 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card shadow-v2">
                            <div class="card-header border-bottom"><h4 class="mt-4" style="text-transform: uppercase">Sign Up Alumni Account !</h4></div>
                            <div class="card-body">
                                
                                <form action="{{route('register')}}" method="POST" class="px-lg-4">

                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Full name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name"  /> 
                                    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Mobile number</label>
                                        <input id="phone" type="number" class="form-control  @error('phone') is-invalid @enderror" value="{{old('phone')}}" name="phone"  />
                                    
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Type email address" />
                                    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="batch">SSC Batch</label>
                                        
                                        <select id="batch" class="form-control" id="demoSelect1" name="batch" required>
                        
                                            <option value="" >--/--</option>
                                            <option value="1999" <?php if(old('batch')=='1999'){echo 'selected';} ?> >1999</option>
                                            <option value="2000" <?php if(old('batch')=='2000'){echo 'selected';} ?> >2000</option>
                                            <option value="2001" <?php if(old('batch')=='2001'){echo 'selected';} ?> >2001</option>
                                            <option value="2002" <?php if(old('batch')=='2002'){echo 'selected';} ?> >2002</option>
                                            <option value="2003" <?php if(old('batch')=='2003'){echo 'selected';} ?> >2003</option>
                                            <option value="2004" <?php if(old('batch')=='2004'){echo 'selected';} ?> >2004</option>
                                            <option value="2005" <?php if(old('batch')=='2005'){echo 'selected';} ?> >2005</option>
                                            <option value="2006" <?php if(old('batch')=='2006'){echo 'selected';} ?> >2006</option>
                                            <option value="2007" <?php if(old('batch')=='2007'){echo 'selected';} ?> >2007</option>
                                            <option value="2008" <?php if(old('batch')=='2008'){echo 'selected';} ?> >2008</option>
                                            <option value="2009" <?php if(old('batch')=='2009'){echo 'selected';} ?> >2009</option>
                                            <option value="2010" <?php if(old('batch')=='2010'){echo 'selected';} ?> >2010</option>
                                            <option value="2011" <?php if(old('batch')=='2011'){echo 'selected';} ?> >2011</option>
                                            <option value="2012" <?php if(old('batch')=='2012'){echo 'selected';} ?> >2012</option>
                                            <option value="2013" <?php if(old('batch')=='2013'){echo 'selected';} ?> >2013</option>
                                            <option value="2014" <?php if(old('batch')=='2014'){echo 'selected';} ?> >2014</option>
                                            <option value="2015" <?php if(old('batch')=='2015'){echo 'selected';} ?> >2015</option>
                                            <option value="2016" <?php if(old('batch')=='2016'){echo 'selected';} ?> >2016</option>
                                            <option value="2017" <?php if(old('batch')=='2017'){echo 'selected';} ?> >2017</option>
                                            <option value="2018" <?php if(old('batch')=='2018'){echo 'selected';} ?> >2018</option>
                                            <option value="2019" <?php if(old('batch')=='2019'){echo 'selected';} ?> >2019</option>
                                            <option value="2020" <?php if(old('batch')=='2020'){echo 'selected';} ?> >2020</option>
                                            <option value="2021" <?php if(old('batch')=='2021'){echo 'selected';} ?> >2021</option>
                  
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="batch">District</label>
                                        
                                        <select class="form-control" id="demoSelect" name="district" required>
                                            <option value="" >--Select District--</option>
                                              @foreach ($district as $city)
                                              <option value="{{$city->id}}" <?php if(old('district')==$city->id){echo 'selected';} ?>>{{$city->city_name}}</option>
                                              @endforeach
                                                                                          
                                          </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="password" for="batch">Password</label>
                                        <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password"  required />
                                    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="repass" for="batch">Re-Enter Password</label>
                                        <input id="repass" type="password" class="form-control" name="password_confirmation" required />
                                    </div>



                                    <input type="submit" class="btn btn-block btn-primary" value="Register Now">

                                </form>
                                    <p class="my-5 text-center">Already have an account? <a href="{{route('login')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END row-->
            </div>
            <!-- END container-->
        </section>



@endsection
