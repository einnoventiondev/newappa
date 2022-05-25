<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apaa تقدم</title>
  <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/khurram.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
  <div class="content-wrapper advance-main">
  @include('layouts.User.nav')

    <section class="advance-sec">
      <div class="container">
        <div class="row g-0">

          <div class="col-md-4 title-right advance title-hide-mobile">
            <div class="title-box">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                تقدم
              </span>
              <h1 class="color-green animate__animated animate__fadeInRight animate_slower">للترشيح</h1>
            </div>
            <div class="box-theatrical">
              <img src="{{asset('./assets/images/golden-group.png')}}" alt="golden">
            </div>
          </div>

          <div class="col-md-4 title-right green sub-title-mobile heading-gray">
            <div class="title-box">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                تقدم
              </span>
              <h1 class="color-green animate__animated animate__fadeInRight animate_slower">للترشيح</h1>
            </div>
          </div>
          <div class="col-md-8 ">
            <div class="content-advance">
              <h2>تسجيل الدخول</h2>
            </div>

            <form action="" method="post" class="signin-form">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="text" type="email" name="email" id="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="email" class="form-label">كلمة المرور</label>
                    <input type="text" type="password" name="password" id="password" class="form-control">
                  </div>
                  <!-- <input class="mt-2" type="password" name="password" id="password" width="100%"> -->
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 mt-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check" value="" id="check1">
                    <label class="form-check-label" for="check">تذكرني</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-7 mt-3">
                  <a href="Faisal-Award.html" class="btn btn-green">تسجيل الدخول <img src="{{asset('/assets/icons/arrow-back.png')}}"
                      alt=""></a>
                  <div class="bottom-text forgot-pass mt-2">
                    <a href="#">هل نسيت كلمة المرور؟ </a>
                    <a href="#"> تسجيل حساب جديد </a>
                  </div>
                </div>
              </div>
          </div>
        </div>

        </form>
      </div>
  </div>
  </section>
  </div>
  <img src="{{asset('/assets/images/gold-luxury-fabric.png')}}" class="side-img animate__animated animate__slideInLeft animate__slower" alt="vintage-microphone">
  <section class="footer-wrap">
    <footer>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="/assets/images/footer-bg.png" class="footer-img" alt="">
            <div class="partners">
              <img src="/assets/icons/academy.png" alt="academy">
              <img src="/assets/icons/moc.png" alt="moc">
              <img src="/assets/icons/taif.png" alt="taif">
            </div>
          </div>
          <div class="col-md-6 col-xl-5 col-xxl-5 col-lg-6">
            <p>جميع الحقوق محفوظة © جامعة الطائف - أكاديمية الشعر العربي</p>
          </div>
          <div class="col-md-3 col-lg-2">
          </div>
        </div>
      </div>
    </footer>
  </section>

  </div>
  <img src="{{asset('./assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">
  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
</body>

</html>
