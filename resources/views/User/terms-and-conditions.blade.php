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
                <h1 class="t-heading">الشروط والأحكام</h1>
                <h2 class="t-sm-heading">الأحكام العامة</h2>
                <ul class="t-list">
                    <li class="t-desc">
                        الأحكام الواردة أدناه تتضمن أحكام جائزة الأمير عبد الله الفيصل للشعر العربي  للموسم الرابع وعليه، فإن الاشتراك في جائزة الأمير عبد الله الفيصل  يعني الموافقة والالتزام التام بهذه الأحكام وبما يترتب عليها.
                    </li>
                    <li class="t-desc">- تستقبل المشاركات من خلال الموقع الإلكتروني فقط ولن يتم قبول أي مشاركات من خارج الموقع الإلكتروني.        </li>
                    <li class="t-desc">
                        - لكل فرع من فروع  جائزة الأمير عبد الله الفيصل شروط خاصة به في الموقع الإلكتروني يجب الالتزام بها.
                    </li>
                    <li class="t-desc">
                        - تتولى لجنة تحكيم متخصصة لكل فرع تقييم  المشاركات وتحديد الفائزين.
                    </li>
                    <li class="t-desc">
                        - تُطبق شروط الجائزة على جميع الأعمال المرشحة من خلال الموقع الإلكتروني.
                    </li>
                    <li class="t-desc">
                        - ألا يكون المرشح ممن يعمل في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها في الموسم نفسه.
                    </li>
                    <li class="t-desc">
                        - أن تكون المعلومات الشخصية للمرشَّح كاملة وصحيحة.
                    </li>
                    <li class="t-desc">
                        - لا يحق للفائز في أيٍّ من فروع جائزة الأمير عبدالله الفيصل التقدم للحصول على الجائزة مرةً أخرى في الفرع نفسه مطلقاً، ويُـتـاح له ذلك في بقية الفروع في العام الذي يليه.
                    </li>
                    <li class="t-desc">
                        - يحق للجنسين الترشح للجائزة. 
                    </li>
                    <li class="t-desc">
                        - على جميع المشاركين الالتزام بمواعيد تقديم المشاركات من خلال الموقع الالكتروني.
                    </li>
                    <li class="t-desc">
                        - كل المشاركات التي تُقدم للجائزة تخضع للمراجعة  وذلك للتأكد من مدى موافقتها لمعايير/شروط وأحكام الجائزة، وسيتم استبعاد جميع المشاركات التي لا تتوافق مع أي من شروط الجائزة أو التي يثبت عدم انتمائها لصاحب المشاركة.
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