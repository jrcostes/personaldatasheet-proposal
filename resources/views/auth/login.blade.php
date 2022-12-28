@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
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
<body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                         </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Register for an Account') }}
                                    </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        {{-- <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reminder</h5>
                    </div>
                    <div class="modal-body">

                    <img src="https://p.kindpng.com/picc/s/352-3521516_transparent-megaphone-png-someone-speaking-out-animated-png.png" style="width:250px; height:250px;  display: block; margin-left: auto; margin-right: auto;">

                        <p>
                           <br> By continuing to browse this website, you agree to DOST Region XI’ Data Privacy Statement. The full text of the statement can be accessed through this
                         <i> <a href="https://www.sei.dost.gov.ph/index.php/about-dost-sei/data-privacy-notice#:~:text=The%20DOST-SEI%2C%20in%20compliance,access%20to%20the%20collected%20information" target="_blank" style="text-decoration: none; color: blue; text-align: center;">link</a></i>
                        <br>
                        </p>
                        <button type="button" class="btn btn-secondary" data-dismiss="Modal">Close</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Reminder</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <img src="https://p.kindpng.com/picc/s/352-3521516_transparent-megaphone-png-someone-speaking-out-animated-png.png" style="width:250px; height:250px;  display: block; margin-left: auto; margin-right: auto;">

                        <p>
                           <br> By continuing to browse this website, you agree to DOST Region XI’ Data Privacy Statement. The full text of the statement can be accessed through this
                         <i> <a href="https://www.sei.dost.gov.ph/index.php/about-dost-sei/data-privacy-notice#:~:text=The%20DOST-SEI%2C%20in%20compliance,access%20to%20the%20collected%20information" target="_blank" style="text-decoration: none; color: blue; text-align: center;">link</a></i>
                        <br>
                        </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

</body>
</html>
@endsection
