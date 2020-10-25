



@extends('layouts.templ')

@section('title','Sign In')


@section('content')

    <!-- Account Page -->

    @include('layouts.header')
    
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/hero.jpg" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form action="{{ route('login') }}" id="loginForm" method="post">
                        @csrf
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password" id="">
                            <button type="submit" class="btn">Login</button>
                            <a href="" style="font-size: 13px">Forgot password</a>
                        </form>

                        <form action="" id="regForm" method="post">
                        @csrf
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" name="" placeholder="Password" id="">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
      const loginForm = document.getElementById("loginForm");
      const regForm = document.getElementById("regForm");
      const indicator = document.getElementById("indicator");

      function register()
      {
          regForm.style.transform = "translateX(0px)";
          loginForm.style.transform = "translateX(0px)";
          indicator.style.transform = "translateX(105px)";
      }

      function login()
      {
          regForm.style.transform = "translateX(300px)";
          loginForm.style.transform = "translateX(300px)";
          indicator.style.transform = "translateX(5px)";
      }
  </script>
@endsection
