<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عبدالله الفيصل الشعر العربي</title>
	<link rel="icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/khurram.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <img src="{{ asset('assets/images/bg-img.png') }}" class="img-fluid bg-img" alt="bg-img">
    <div class="content-wrapper">
        @include('layouts.User.nav')
        <section class="tc">
            <div class="container">
                <h1 class="t-heading">المسؤولية القانونية</h1>
                <h2 class="t-sm-heading"></h2>
                <ul class="t-list">
                    <li class="t-desc">
- يجب ألا تنتهك المشاركة أي حقوق، أو قوانين، أو أحكام دولية، أو محلية، أو تشجع بأي شكل من الأشكال على انتهاك تلك الحقوق والقوانين والأحكام. تخضع هذه الشروط 
والأحكام للقوانين المطبقة في المملكة العربية السعودية ذات العلاقة، وأي نزاع ينشأ يكون خاضعاً للجهات القضائية المختصة في المملكة العربية السعودية.
                    </li> <br>
                    <li class="t-desc">
                        - إن إدارة الجائزة ليست مسؤولة عن أيّ خسارة أو ضرر يلحق بالمتسابق المشارك في الجائزة بما في ذلك الأضرار الناتجة عن قبوله في الجائزة. كما لا تتحمل  مسؤولية أيّ أعطال تقنية قد تحدث نتيجة لاشتراكه في الجائزة أو تحميله أية مواد أو معلومات ضمن الجائزة.
                    </li>
                </ul>
            </div>
        </section>
		@include('layouts.User.footer')
    </div>
    <!-- body-wrapper end -->
    <!-- body-wrapper end -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"> </script>
</body>

</html>