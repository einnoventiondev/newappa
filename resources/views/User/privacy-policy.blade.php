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
  <div class="bg-light-img mobile-show">
    <img src="{{asset('/assets/images/mobile-img/index-bg-m.png')}}" class="img-fluid" alt="bg-img">
  </div>
  <div class="content-wrapper">
    @include('layouts.User.nav')
        <section class="tc">
            <div class="container">
                <h1 class="t-heading">الملكية الفكرية</h1>
                <h2 class="t-sm-heading"></h2>
                <ul class="t-list">
                    <li class="t-desc">
                        - يُقرّ المشارك بأن كل المعلومات التي تقدم بها إلى الجائزة لا تنتهك حقوق الملكية الفكرية، أو الحقوق الخاصة، والخصوصية -أو غيرها من الحقوق لأي طرف ثالث -وأنها   
                    </li>
                    <li class="t-desc">
                        لاتتعرض لحرمة المقدسات، وألا تعكس سمة عنصرية أو ألفاظ خادشة للحياء والذوق العام؛ وأي مشاركة تثبت انتهاكها لحقوق الملكية الفكرية أو حقوق النشر فسوف تستبعدها إدارة الجائزة، وقد يعرض المشارك نفسه للمساءلة القانونية.
                    </li>
                    <li class="t-desc">
                        - لا تتحمل إدارة الجائزة أي مسؤولية قانونية تختص بالملكية الفكرية للمواد المرفوعة على موقع الجائزة، في حال انتهكت حقوق ملكية مسجلة.
                    </li>
                    <li class="t-desc">
                        - لأكاديمية الشعر العربي حق النشر غير التجاري للأعمال الفائزة بالجائزة لمدة ثلاث سنوات.
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
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery-equal-height.min.js"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"> </script>
	<!-- <script src="assets/js/jquery-equal-height-old.js"></script> -->
	<script src="assets/js/scripts.js"></script>

</body>

</html>