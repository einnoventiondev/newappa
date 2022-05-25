<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عبدالله الفيصل الشعر العربي </title>
	<link rel="icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/khurram.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/responsive.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="bg-light-img mobile-show">
    <img src="{{asset('./assets/images/mobile-img/index-bg-m.png')}}" class="img-fluid" alt="bg-img">
  </div>
  <div class="content-wrapper">
    @include('layouts.User.nav')
    <section class="poetic-sec content-container">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-4 title-right green title-hide-mobile">
            <div class="title-box">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                <p><p>جائزة الأمير<br> عبدالله الفيصل
              </span><p><p>
              <h1 class="animate__animated animate__fadeInRight animate_slower">للتجربة الشعرية</h1>
            </div>
            <div class="box-theatrical">
              <img src="{{asset('./assets/images/red.svg')}}" class="animate__animated animate__pulse animate__infinite animate_slowy" alt="brown-diamond">
              <img src="{{asset('./assets/images/creme-diamond.png')}}" class="animate__animated animate__shakeY animate__infinite animate_slowest" alt="creme-diamond">
              <!-- <img src="./assets/images/golden-group.png" alt="golden"> -->
            </div>
          </div>

          <div class="col-md-4 title-right green sub-title-mobile">
            <div class="title-box">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
              <p><p>جائزة الأمير <br>عبدالله الفيصل
              </span><p><p>
              <h1 class="animate__animated animate__fadeInRight animate_slower">للتجربة الشعرية</h1>
            </div>
          </div> 
          <div class="col-md-6 content-mobile">
        <!--  <h2>الشروط العامة</h2>
            <p>
                <ul class="paragraph">
                  <li>ألا يكون المرشح من العاملين في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها إلا بعد مضي
                    ثلاث دورات من
                    انتهاء مهمته.
                  </li>
                  <li>لا يحق للفائزين في أي من فروع جائزة الأمير عبدالله الفيصل التقدم للجائزة قبل مضي ثلاث دورات من فوزهم.</li>
                  <li> ألا يسبق فوز العمل المرشح لأي من فروع جائزة الأمير عبدالله الفيصل بأي جائزة أخرى.</li>
                  <li>لأكاديمية الشعر العربي حق التصرف بالأعمال الفائزة بالجائزة.</li>
                  <li>أكاديمية الشعر العربي ليست ملزمة بإعادة الأعمال المرشحة للجائزة.</li>
                  

                </ul>
               
      
              </p> -->
              <h2>شروط الترشيح</h2>
              <ul class="paragraph">
                <li>أن يكون المرشح شاعرا فصيحا معاصرا بارزا مؤثرا في المشهد الشعري العربي، يمتاز بثراء التجربة الشعرية ألا يكون المرشح ممن يعمل في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها في الموسم نفسه.
</li>
				  <li>لا يحق للفائز في أيٍّ من فروع جائزة الأمير عبدالله الفيصل التقدم للحصول على الجائزة مرةً أخرى في الفرع نفسه مطلقاً، ويُـتـاح له ذلك في بقية الفروع في العام الذي يليه.
</li>
				  <li>لأكاديمية الشعر العربي حق النشر غير التجاري  للأعمال الفائزة بالجائزة لمدة ثلاث سنوات.</li>
				  <li>يحق للجنسين الترشح للجائزة.</li>
				  <li>تدرس لجنة تحكيم جائزة التجربة الشعرية جميع الأسماء المرشحة دراسة مستفيضة، وترفع اسمين إلى مجلس الأمناء لاختيار الأجدر بالفوز.
</li>
				  <li>تكون الجائزة لمجموع الأعمال الشعرية.
</li>
				  <li>أن يكون الشاعر أو الشاعرة على قيد الحياة خلال فترة الترشيح.
</li>
				  <li>أن تكون تجربةُ الشاعر أو الشاعرة المُرشَّحَة لهذه الجائزة مُـتمَثِّـلةً في شعرٍ عربيٍّ باللغة العربية الفصحى مؤثر في المشهد الشعري العربي متميز بثرائه وعمقه ونوعيته.
</li>
				  
</ul>
            
<!-- 
            <p>
              • تمنح الجائزة لشاعر من شعراء العربية
              المعاصرين على أن يكون صاحب تجربة شعرية
              أصيلة تمثل المشهد الشعري العربي من الناحية
              الجمالية والدلالية
            </p>
            <p>
              • ألا يقل إنتاج الشاعر المرشح للجائزة عن
              ديوانين منشورين بالعربية الفصحى وينظر في
              التحكيم إلى قيم التلقي النقدي لتجربة الشاعر
            </p>

            <p>• أن يكون الإنتاج الشعري المرشح متوافقًا مع
              موسيقى الشعر العربي العمودي أو التفعيلي</p>
            <p>• أن يؤخذ في تقدير التحكيم مجمل التجربة
              الشعرية للمرشح ومدى امتياز ما قدمه من نتاج
              شعري</p>
            <p>• يتم ترشيح الشاعر من خلال إحدى
              المؤسسات العلمية أو الأكاديمية أو الثقافية
              المتخصصة أو دور النشر العربية أو العالمية،
              ويمكن الترشيح الشخصي على أن يوصى به من
              إحدى الجهات السابقة ويجب أن يشار إلى ذلك في
              بيانات الترشيح</p>
            <p class="m-0">
              • ألا يكون المرشح للجائزة عضوًا في لجان
              تحكيم الجائزة في العام نفسه
            </p> -->
            <h2 class="prize-value-txt">قيمة الجائزة</h2>
            <span class="prize">(٥٠٠,٠٠٠) خمسمائة ألف ريال</span>
		 <a href="{{ route('eight') }}" class="btn btn-green mt-4 apply-nomination-btn"> ترشيح مؤسسي <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a>
            <!-- <a href="advance.html" class="btn btn-green mt-4 ">تقدم للترشيح<img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a> -->

          </div>
          <div class="col-md-6 desk-content">
            <div class="content paragraph-signing"> <!--
              <h2>الشروط العامة</h2>
              <p>
                <ul class="paragraph">
                  <li>ألا يكون المرشح من العاملين في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها إلا بعد مضي
                    ثلاث دورات من
                    انتهاء مهمته.
                  </li>
                  <li>لا يحق للفائزين في أي من فروع جائزة الأمير عبدالله الفيصل التقدم للجائزة قبل مضي ثلاث دورات من فوزهم.</li>
                  <li> ألا يسبق فوز العمل المرشح لأي من فروع جائزة الأمير عبدالله الفيصل بأي جائزة أخرى.</li>
                  <li>لأكاديمية الشعر العربي حق التصرف بالأعمال الفائزة بالجائزة.</li>
                  <li>أكاديمية الشعر العربي ليست ملزمة بإعادة الأعمال المرشحة للجائزة.</li>
                  

                </ul>
               
      
              </p> -->
            
             <h2>شروط الترشيح</h2> <p>
              <ul class="paragraph">
                <li>أن يكون المرشح شاعرا فصيحا معاصرا بارزا مؤثرا في المشهد الشعري العربي، يمتاز بثراء التجربة الشعرية ألا يكون المرشح ممن يعمل في أكاديمية الشعر العربي ولا عضوا (بأي صفة) في أي من لجانها في الموسم نفسه.
</li>
				  <li>لا يحق للفائز في أيٍّ من فروع جائزة الأمير عبدالله الفيصل التقدم للحصول على الجائزة مرةً أخرى في الفرع نفسه مطلقاً، ويُـتـاح له ذلك في بقية الفروع في العام الذي يليه.
</li>
				  <li>لأكاديمية الشعر العربي حق النشر غير التجاري  للأعمال الفائزة بالجائزة لمدة ثلاث سنوات.</li>
				  <li>يحق للجنسين الترشح للجائزة.</li>
				  <li>تدرس لجنة تحكيم جائزة التجربة الشعرية جميع الأسماء المرشحة دراسة مستفيضة، وترفع اسمين إلى مجلس الأمناء لاختيار الأجدر بالفوز.
</li>
				  <li>تكون الجائزة لمجموع الأعمال الشعرية.
</li>
				  <li>أن يكون الشاعر أو الشاعرة على قيد الحياة خلال فترة الترشيح.
</li>
				  <li>أن تكون تجربةُ الشاعر أو الشاعرة المُرشَّحَة لهذه الجائزة مُـتمَثِّـلةً في شعرٍ عربيٍّ باللغة العربية الفصحى مؤثر في المشهد الشعري العربي متميز بثرائه وعمقه ونوعيته.
</li>
				  
</ul>
              <h2 class="mt-3">قيمة الجائزة</h2>
              <span class="prize mt-3">(٥٠٠,٠٠٠) خمسمائة ألف ريال</span>
 <a href="{{ route('eight') }}" class="btn btn-green mt-4 apply-nomination-btn"> ترشيح مؤسسي <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a></div>
              <!-- <a href="#" class="btn btn-green mt-4 apply-nomination-btn"> تقدم للترشيح <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a> -->

            <!-- <a href="{{ route('first.paricipationb') }}" class="btn btn-green mt-4 apply-nomination-btn-2"> ترشيح فردي <img src="{{asset('./assets/icons/arrow-back.png')}}" alt=""></a> --> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <img src="{{asset('./assets/images/detail-of-an-arabic.png')}}" class="side-img animate__animated animate__slideInLeft animate__slower" alt="vintage-microphone">
    <img src="{{asset('./assets/images/mobile-img/detail-of-an-arabic-m.png')}}" class="side-img mobile-show animate__animated animate__slideInLeft animate__slower" alt="vintage-microphone">
    <img src="{{asset('./assets/images/mobile-img/blur-bg-m.png')}}" class="side-img blur-img mobile-show animate__animated animate__slideInLeft animate__slower" alt="vintage-microphone">
    @include('layouts.User.footer') 

  </div>
  <img src="{{asset('/assets/images/bg-img.png')}}" class="img-fluid bg-img mobile-hide" alt="bg-img">

  <script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('./assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('./assets/js/scripts.js')}}"></script>
</body>

</html>