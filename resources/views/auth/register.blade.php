@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ثبت نام</div>

                <div class="card-body login_arseen">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row_col">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">نام و نام خانوادگی</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="row_col">
                            <label for="email" class="col-md-4 col-form-label text-md-right">آدرس ایمیل</label>


                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="row_col">
                            <label for="password" class="col-md-4 col-form-label text-md-right">رمز عبور</label>


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="row_col">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار رمز عبور</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>

                        <div class="row_col">

                                <button type="submit" class="btn btn-primary">
                                        ثبت نام
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
