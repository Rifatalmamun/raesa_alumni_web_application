@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2" style="margin-bottom: 130px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold text-success">{{ __('Verify Your Email Address !') }}</div>
                <hr>
                <div class="card-header font-weight-bold text-secondary">We send a verification link to {{Auth::user()->email}}.</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn font-weight-bold p-1 btn-link p-0 m-0 align-baseline">{{ __('Click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
