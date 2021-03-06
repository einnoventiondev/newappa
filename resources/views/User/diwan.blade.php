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
  <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/khurram.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="content-wrapper diwan-wrapper">
    @include('layouts.User.nav')
    <div class="content-container diwan">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-4 title-diwan title-right title-hide-mobile">
            <div class="title-box">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                جائزة الأمير <br>عبدالله الفيصل
              </span>
              <h1 class="animate__animated animate__fadeInRight animate_slower">للديوان</h1>
            </div>
            <div class="box-theatrical">
              <img src="{{asset('./assets/images/gold.svg')}}" class="animate__animated animate__pulse animate__infinite animate_slowy" alt="blue-diamond">
              <img src="{{asset('./assets/images/creme-diamond.png')}}" class="animate__animated animate__shakeY animate__infinite animate_slowest" alt="creme-diamond">
              <!-- <img src="./assets/images/golden-group.png" alt="golden"> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="content condition-content">
              <!-- <h2>الشروط العامة</h2>
              <p> 
                <ul class="paragraph">
                  <li>ألا يكون المرشح من العاملين في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها إلا بعد مضي ثلاث دورات من انتهاء مهمته.</li>
                  <li>لا يحق للفائزين في أي من فروع جائزة الأمير عبدالله الفيصل التقدم للجائزة قبل مضي ثلاث دورات من فوزهم.</li>
                  <li>ألا يسبق فوز العمل المرشح لأي من فروع جائزة الأمير عبدالله الفيصل بأي جائزة أخرى.</li>
                  <li>لأكاديمية الشعر العربي حق التصرف بالأعمال الفائزة بالجائزة.</li>
                  <li>أكاديمية الشعر العربي ليست ملزمة بإعادة الأعمال المرشحة للجائزة.</li>
</ul>
              </p> -->
            </div>
            <div class="content paragraph-signing">
              <h2>شروط الترشيح</h2>
              <p>
                <ul class="paragraph">
                  <li> ألا يكون المرشح ممن يعمل في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها في الموسم نفسه.
</li>
                  <li>لا يحق للفائز في أيٍّ من فروع جائزة الأمير عبدالله الفيصل التقدم للحصول على الجائزة مرةً أخرى في الفرع نفسه مطلقاً؛ ويُـتـاح له ذلك في بقية الفروع في العام الذي يليه.</li>
                  <li>لأكاديمية الشعر العربي حق النشر غير التجاري للأعمال الفائزة بالجائزة لمدة ثلاث سنوات.
</li>
                  <li>يحق للجنسين الترشح للجائزة.
</li>
                  <li>أن ترشح الديوان إحدى دور النشر المعتمدة، أو المؤسسات الثقافية العربية ، أو الوكالات الأدبية ، كما يحق للأفراد ترشيح أنفسهم.
</li>
					<li>الموافقة الخطية من المرشح، متضمنة عنوان الديوان الشعري.</li>
					<li> أن يكون الديوان صادرًا بطبعته الأولى عن دار نشر معتمدة، أو الوكالات الأدبية ، أو مؤسسة ثقافية معتمدة، ولم يمض على صدوره عامان قبل تاريخ الترشيح.
</li>
					<li>استكمال بيانات المرشح الشخصية وصورة من جواز السفر أو الهوية الوطنية، من خلال موقع الأكاديمية وإرفاق الديوان بنسخة pdf، والسيرة الذاتية للشاعر.</li>
					
                </ul>
              </p>
              <h2 class="mt-4">قيمة الجائزة</h2>
              <span class="prize">٢٠٠,٠٠٠ مئتا ألف ريال</span>

              <a href="{{ route('five') }}" class="btn btn-green mt-4 apply-nomination-btn"> ترشيح مؤسسي <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a>

              <a  href="{{ route('fiveb') }}" class="btn btn-green mt-4 apply-nomination-btn-2"> ترشيح فردي <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <img src="{{asset('/assets/images/top-view-islamic.png')}}" class="side-img animate__animated animate__slideInLeft animate__slower" alt="top-view-islamic">
    <section class="footer-wrap">
      <footer>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('/assets/images/footer-bg.png')}}" class="footer-img" alt="">
              <div class="partners">
                <!-- <img src="{{asset('/assets/icons/academy.png')}}" alt="academy"> -->
                <img src="{{asset('/assets/icons/moc.png')}}" alt="moc">
                <img src="{{asset('/assets/icons/taif.png')}}" alt="taif">
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
  <script src="{{asset('assets/js/scripts.js')}}"> </script>

</body>

</html>