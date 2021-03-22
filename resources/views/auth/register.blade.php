<!DOCTYPE html>
<html>
<style>

    .card-header {
        background-color: rgb(73, 72, 72);
        color:lightgray;
    }

    .card {
        margin-top: 70px;
    }

    .card-body {
        background-color:rgba(102, 96, 96, 0.836);
    }

    .card-footer {
        background-color:rgb(73, 72, 72);
    }

    .log {
        color:lightgray;
        font-style: italic;
    }

    .btn.btn-bbb{
      margin-left:20px; 
      margin-top:20px; 
      margin-bottom:20px; 
      background-color:rgb(85, 67, 67); 
      border-color:rgba(206, 206, 61, 0.233); 
      color:rgb(201, 182, 182);
    }

    .btn.btn-bbb:hover{
      background-color: rgb(68, 53, 53);
      border-color:rgba(206, 206, 61, 0.233);
    }

    .btn.btn-bbb:active{
      background-color: rgb(68, 53, 53);
      border-color:rgba(206, 206, 61, 0.233);
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

</style>

<div class="container" style="width:40%; height:40%; margin-left: 33%; margin-top:10%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-bbb">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <ul>
                        <a href="{{ url('/login') }}" class="log"></i>You already have an account? LOGIN!</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
