@extends('layouts.base')

@section('content')
<style>
    [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
        box-shadow: none !important;
        border-color: transparent !important;
    }
</style>
<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-title">
                    <h2>Register</h2>
                </div>

                <div class="input">
                    <label for="name">Name</label>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" @error('name') <span
                        class="text-danger mt-3">{{ $message }}</span> @enderror>
                </div>

                <div class="input">
                    <label for="phone">Phone</label>
                    <input id="phone" class="block mt-1 w-full" type="text" name="phone" @error('phone') <span
                        class="text-danger mt-3">{{ $message }}</span> @enderror>
                </div>

                <div class="input">
                    <label for="emailname">Email Address</label>
                    <input id="emailname" class="block mt-1 w-full" type="email" name="email" @error('email') <span
                        class="text-danger mt-3">{{ $message }}</span> @enderror>
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input id="pass" class="block mt-1 w-full" type="password" name="password" required=""
                        @error('password') <span class="text-danger mt-3">{{ $message }}</span> @enderror>
                </div>

                <div class="input">
                    <label for="compass">Confirm Password</label>
                    <input id="compass" class="block mt-1 w-full" type="password" name="password_confirmation">
                </div>

                <div class="button login">
                    <button type="submit">
                        <span>Sign Up</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>
        <p><a href="{{ route('login') }}" class="theme-color">Already have an account?</a></p>
    </div>
</div>
@endsection
