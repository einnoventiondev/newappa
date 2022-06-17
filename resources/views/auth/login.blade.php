@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('login') }}" class="theme-form login-form">
    @csrf
    <h4>تسجيل الدخول</h4>
    <h6> مرحبا بعودتك! تسجيل الدخول إلى حسابك.</h6>
    <div class="form-group">
        <label>عنوان بريد الكتروني</label>
        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
            <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
        </div>
    </div>
    <div class="form-group">
        <label>كلمة المرور</label>
        <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
            <input class="form-control" type="password" name="password" required="" placeholder="*********">
            <div class="show-hide"><span class="show"> </span></div>
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">تذكر كلمة المرور</label>
        </div><a class="link" href="forget-password.html">هل نسيت كلمة السر؟</a>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">تسجيل الدخول</button>
    </div>
</form>
@endsection