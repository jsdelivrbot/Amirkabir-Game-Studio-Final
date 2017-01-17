<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>ورود</title>
    <meta name="description" content="ورود به سایت">
    <meta name="author" content="Mr. Coder">

    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.rawgit.com/rastikerdar/shabnam-font/v1.0.2/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/auth/hw2-global.css">
    <link rel="stylesheet" href="css/auth/login.css">

    <script src="js/auth/global.js"></script>
</head>

<body>

<header>
    <div class="header-div"><i class="material-icons">person</i></div>
    <div class="header-div"><span>ceitgames</span></div>
</header>

<div dir="rtl" class="center-box">
    <div class="center-box-content">
        <span class="title">ثبت نام</span>

        <form method="post" action="{{url('login')}}">
            {{ csrf_field() }}
            @if ($errors->has('email'))
                <div class="center-box-row">
                    <span style="color: darkred">ایمیل / پسورد اشباه است.</span>
                </div>
            @endif
            <div class="center-box-row">
                <i class="material-icons">email</i>
                <input class="text-box" type="text"
                       name="email"
                       placeholder="آدرس ایمیل"
                       value="{{old('email')}}"/>
            </div>
            <div class="center-box-row"><i class="material-icons">lock</i><input class="text-box" type="password"
                                                                                 name="password"
                                                                                 placeholder="رمز عبور"/></div>
            <br/>
            <input type="checkbox"/><a href="#">قوانین</a> را می‌پذیرم. <br/>
            <input class="button" type="submit" value="ورود">
        </form>
        <a href="{{ url('/password/reset') }}" id="fotgot-pass-link">رمزمو یادم رفته</a>
    </div>
    <div class="center-box-footer">حساب کاربری ندارید؟ <a href="{{url('register')}}">ثبت نام کنید</a></div>
</div>

</body>

</html>