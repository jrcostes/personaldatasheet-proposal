<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style>
    html, body {
        color: #070707;
        font-family: 'Times New Roman', sans-serif;
        font-weight: 200;
        scroll-behavior: smooth;

    }

    .box-form {
        padding: 0px 40px 40px 40px;
        line-height: 250%;
        text-align: left;
        margin: 5%;
        border-radius: 5px;
    }

    .oath{
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        border: 1px solid grey;
    }

    .id  {
        line-height: 300%;
        padding-bottom: 5%;
    }

    .references{
        padding-bottom: 20px;
    }

</style>



  </head>
    <body class="app aside-menu-hidden">

        <div class="app-body">
            <div class="header">
                <header class="app-header navbar">

                  <div class="container-fluid">
                    <a class="navbar-brand" href="/">Personal Data Sheet</a>

                    <button class="navbar-toggler" type="button" data-coreui-toggle="collapse" data-coreui-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                 @guest
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>
                                  @if (Route::has('register'))
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                                  @endif
                                @else
                                    <li class="nav-item dropdown">
                                      <a class="nav-link" href="/">Home</a>
                                      <a class="nav-link" href="/temp">Database </a>
                                      <a class="nav-link" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                      </form>
                                          @endguest
                                        </ul>
                                      </div>
                                    </div>
                      </header>
            </div>
            <div class="maincontent">
                <main class="main">
                    @yield('content')
              </main>
            </div>

        </div>
      </body>
  <style>
    body{
        display: flexbox;
        box-sizing: content-box;
    }
  </style>
</html>


