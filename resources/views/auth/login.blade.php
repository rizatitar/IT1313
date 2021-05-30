@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
        body {
            background-color: #8D5524;
            opacity: 1;
        }

        .whole {
            width: 100%;
        }
        .container {
            display: none;
            background-color: ;
        }

        #app {
            
            color: #8D5524;
        }
        .navbar-nav {
            display: none;
        }
        .navbar-brand {
         color: #8D5524;
            
        }
        .container1 {
            width: 400px;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
            padding: 0px 20px;
        }
        .websiteTitle{
            width: 60%;
            height: auto;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
        }

        #image1 {
            width: 95%;
            height: auto;
           
        }

        input {
            width: 50%;
        }

        #save{
            font-size: 1vw;
        }
        
        #checkbox {
            margin-left: -27px;
            margin-top: 6px;
            background-color: #b9c2c4;
        }
        #checkboxLabel {
            margin-left: -25px;
        }
        input[type="checkbox"] { /* change "blue" browser chrome to yellow */
        filter: hue-rotate(180deg);
        }
        

        #login {
            background-color: #bd8f6a;
            color: white;
        }
        #createAccount {
            background-color: #7b8a88;
            color: white;
        }
        .hr-sect {
            display: flex;
            flex-basis: 100%;
            align-items: center;
            color: rgba(15, 15, 15, 0.35);
            margin: 8px 0px;
            font-size: 1vw;
        }
        .hr-sect:before,
        .hr-sect:after {
            content: "";
            flex-grow: 1;
            background: rgba(0, 0, 0, 0.35);
            height: 1px;
            font-size: 0px;
            line-height: 0px;
            margin: 0px 8px;
        }
    
    </style>
    </head>
    <body>
    <div class="">
        
        <div class="col" id="">
            <div class="container1 bg-light text-dark rounded text-center mb-5" id="container"> 
                <form class="text-left p-4 w-100" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="userIcon mb-3">
                        <svg width="20em" height="5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                    </div>
                    <p class="text-center">Log in to your account</p>
    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg></span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="USERNAME" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                            </svg></span>
                        </div>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="PASSWORD"name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
    
                    

                   
                        <div class="w-100 mb-1" id="">
                            <div class="row">
                                <div class="col d-inline-flex">
                                    <input type="checkbox" id="checkbox" class="checkbox"><label id="checkboxLabel">Remember me</label>
                                </div>
                                <div class="col">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                                </div>

                            </div>
                        </div>  
                            
                       
                        <button class="btn btn-block" type="submit" id="login">{{ __('Login') }}</button>
                        <div class="hr-sect p-1">Dont have an account?</div>
                        <button class="btn btn-block mb-3 w-75 mx-auto" type="submit" id="createAccount" href="http://127.0.0.1:8000/register">Register New Account</button>
                    </div>

                    <div>
                        
                    </div>
                </form>
            </div>    
        </div>
    </div>
</html>
@endsection
