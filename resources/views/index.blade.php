<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amirkabir Game Studio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.rawgit.com/rastikerdar/shabnam-font/v1.0.2/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="libs/node_modules/owl.carousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="libs/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/utils/star-rate.css">
    <link rel="stylesheet" href="css/game-item.css">
    <link rel="stylesheet" href="css/general-comments.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loading.css">
</head>
<body>
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<div class="container-fluid">
    <div id="first-viewport" class="viewport">

        <a href="{{ url('/') }}">
            <span dir="rtl" id="top-right-span" class="white-text">
                <span class="glyphicon glyphicon-cloud small-text"></span>
                <span class="small-text">امیرکبیر </span> <span class="small-text blue-text">استودیو</span>
            </span>
        </a>

        <form method="get" action="{{ url('register') }}">
    <span dir="rtl" id="top-left-span">
        @if(Auth::guest())
            <a class="nice-link small-text" href="{{ url('login') }}">ورود</a>
        @else
            <a class="nice-link small-text" href="{{ url('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a>
        @endif


        <button type="submit" class="btn btn-primary">ثبت نام</button>
    </span>
        </form>

        <div dir="rtl" id="details">
            <h1 id="details-title">مرکز بازی‌سازی امیرکبیر</h1>
            <h4 id="details-content" class="text-muted">لورم ایپسوم فلان لورم ایپسوم فلان لورم ایپسوم فلان لورم ایپسوم
                فلان </h4>
            <button id="game-pge-btn" type="button" class="btn btn-primary">ورود به صفحه بازی</button>
            <a id="trailer-div" class="nice-link" href="#">
                <span class="glyphicon glyphicon-play-circle"></span>
                <span id="trailer-label" class="small-text">تریلر این بازی</span>
            </a>
        </div>


        <div id="main-carousel" class="owl-carousel owl-theme stick-bottom">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>جدیدترین بازی‌ها</h3>
            <div id="new-games-carousel" class="owl-carousel owl-theme"></div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div id="general-comments-div" class="jumbotron col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>نظرات کاربران و راهنمای بازی‌ها</h2>
                    <h4 class="text-muted">لورم ایپسوم فلان لورم ایپسوم فلان لورم ایپسوم فلان لورم ایپسوم فلان لورم
                        ایپسوم فلان لورم ایپسوم فلان لورم ایپسوم فلان </h4>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div id="tutorials-div" class="col-md-3">
                    <h3 class="text-muted">آخرین راهنماهای بازی‌ها</h3>
                </div>
                <div id="comments-div" class="col-md-3">
                    <h3 class="text-muted">نظرات و گفت‌وگوها</h3>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div id="join-us-div" class="row text-center">
        <span id="join-title">به جامعه بازی‌سازان امیرکبیر بپیوندید</span>
        <span id="join-detail">بیش از ۵۰۰۰ عضو از سرتاسر کشور</span>
        <button id="join-btn" type="submit" class="btn">به ما بپیوندید</button>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <ul dir="rtl">
                    <li><a href="index.html">صفحه اصلی</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">ارتباط با سازندگان</a></li>
                    <li><a href="#">سوالات متداول</a></li>
                    <li><a href="#">حریم خصوصی</a></li>
                    <li>
                        <a href="index.html">
                            <span dir="rtl" class="white-text">
                                <span class="glyphicon glyphicon-cloud small-text"></span>
                                <span class="small-text text-muted">امیرکبیر </span> <span class="small-text blue-text">استودیو</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <img src="assets/images/fake-icons.jpg">
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row text-center">
            <span class="text-muted">تمامی حقوق محفوظ و متعلق به دانشگاه امیرکبیر است</span>
        </div>
    </footer>
</div>
</body>

<script src="libs/node_modules/jquery/dist/jquery.min.js"></script>
<script src="libs/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="libs/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="scripts/utils/emranHelper.js"></script>
<script src="scripts/utils/starRating.js"></script>
<script src="scripts/general-comments-loader.js"></script>
<script src="scripts/index.js"></script>

</html>