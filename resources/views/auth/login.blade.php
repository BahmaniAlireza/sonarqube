@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ورود</div>

                <div class="card-body login_arseen">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


                    <div class="row_col">
                        <label for="email" class="col-sm-2 col-form-label text-md-right">ایمیل</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="row_col">
                        <label for="password" class="col-md-2 col-form-label text-md-right">پسورد</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>



                        <div class="row_col">
                                <div class="checkbox">
                                    <label>مرا به خاطر بسپار
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </label>
                                </div>
                                </div>



                                <button type="submit" class="btn btn-primary">
                                    ورود
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">رمز عبور خود را فراموش کرده ام
                                </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
