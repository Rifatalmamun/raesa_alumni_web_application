@extends('layouts.app')
@section('content')



<section class="padding-y-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-v2">
                    <div class="card-header border-bottom"><h4 class="mt-4" style="text-transform: uppercase">Log In to Alumni Account!</h4></div>
                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="col my-2">
                                <button class="btn btn-block btn-facebook"><i class="ti-facebook mr-1"></i> <span>Facebook Sign in</span></button>
                            </div>
                            <div class="col my-2">
                                <button class="btn btn-block btn-google-plus"><i class="ti-google mr-1"></i> <span>Google Sign in</span></button>
                            </div>
                        </div>
                        <p class="text-center my-4">OR</p> --}}

                        <form action="{{route('login')}}" method="POST" class="px-lg-4">

                            @csrf

                            
                            <div class="row">
                                <div class="col-12">
                                
                                  <div class="form-group">
                                    <label for="Your name">Email address*</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  
                                                  @error('email')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                   
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="Your name">Password*</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  
                                    @error('password')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                    @enderror
                                  
                                  </div>
                  
                                </div>

                              </div>

                            <input type="submit" class="btn btn-block btn-primary" value="Log In">
                            
                            <p class="my-5 text-center">Don’t have an account? <a href="{{route('register')}}" class="text-primary">Register</a></p>
                        
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END row-->
    </div>
    <!-- END container-->
</section>


@endsection
