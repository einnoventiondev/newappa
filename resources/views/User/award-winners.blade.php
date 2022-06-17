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
  <div class="content-wrapper">
    
  @include('layouts.User.nav')
    <section class="content-container">
      <div class="container award-winners">
        <div class="row g-0">
          <div class="col-md-4 title-advance award-winner-heading">
            <div class="title">
              <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                الفائزون بالجائزة
              </span>
              <h1 class="animate__animated animate__fadeInRight animate_slower">للنسخ السابقة</h1>
            </div>
          </div>
          <div class="col-md-8">
            <div class="content-award-table">
              <h2>الدورة الأولى (٢٠١٩)
              </h2>
              <table class="award-tbody">
                <tr>
                  <th>فرع الجائزة</th>
                  <th>الفائز</th>
                  <th>الجنسية</th>
                  <th>الجائزة</th>
                </tr>
                <tr>
                  <td>الشعر العربي الفصيح </td>
                  <td>محمد عبد الله عبد الباري</td>
                  <td>السودان</td>
                  <td>٥٠٠ ألف ريال سعودي</td>

                </tr>
                <tr>
                  <td>الشعر المسرحي</td>
                  <td>فوزي خضر</td>
                  <td>مصر</td>
                  <td>٣٠٠ ألف ريال سعودي
                  </td>
                </tr>
                <tr>
                  <td>الشعر المغنى </td>
                  <td>كريم عودة لعيبي</td>
                  <td>العراق</td>
                  <td>٢٠٠ ألف ريال سعودي</td>
                </tr>
              </table>
            </div>
            <div class="content-award-table">
              <h2>الدور الثانية (٢٠٢٠)
              </h2>
              <table class="award-tbody">
                <tr>
                  <th>فرع الجائزة</th>
                  <th>الفائز</th>
                  <th>الجنسية</th>
                  <th>الجائزة</th>
                </tr>
                <td>الشعر العربي الفصيح </td>
                <td>عبد اللطيف بن يوسف المبارك</td>
                <td>السعودية</td>
                <td>٥٠٠ ألف ريال سعودي</td>

                </tr>
                <tr>
                  <td>الشعر المسرحي </td>
                  <td>سيد محمد عبد الرازق</td>
                  <td>مصر</td>
                  <td>٢٠٠ ألف ريال سعودي</td>

                </tr>
                <tr>
                  <td>الشعر المغنى </td>
                  <td>هيفاء بنت عبد الرحمن الجبري</td>
                  <td>السعودية</td>
                  <td>٢٠٠ ألف ريال سعودي</td>
                </tr>
                <tr>
                  <td>أفضل مبادرة في خدمة الشعر العربي </td>
                  <td>برنامج أمير الشعراء </td>
                  <td>الإمارات</td>
                  <td>١٠٠ ألف ريال سعودي</td>
                </tr>
              </table>
            </div>
            <div class="content-award-table">
              <h2>الدورة الثالثة (٢٠٢١)</h2>
              <table class="award-tbody last-table-award">
                <tr>
                  <th>فرع الجائزة</th>
                  <th>الفائز</th>
                  <th>الجنسية</th>
                  <th>الجائزة</th>
                </tr>
                <tr>
                  <td>التجربة الشعرية</td>
                  <td>عارف حمود الساعدي </td>
                  <td>السعودية </td>
                  <td>٥٠٠ ألف ريال سعودي</td>

                </tr>
                <tr>
                  <td>الشعر المسرحي </td>
                  <td>جيهان بركات </td>
                  <td>مصر</td>
                  <td>٢٠٠ ألف ريال سعودي</td>
                </tr>
                <tr>
                  <td>القصيدة المغناة</td>
                  <td>ابراهيم حلوش </td>
                  <td>السعودية</td>
                  <td>٢٠٠ ألف ريال سعودي</td>
                </tr>
                <tr>
                  <td>أفضل مبادرة في خدمة الشعر العربي </td>
                  <td>جامعة أم القرى عن موسوعة الشعر العربي</td>
                  <td>السعودية</td>
                  <td>١٠٠ ألف ريال سعودي</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <img src="{{asset('/assets/images/top-side.png')}}" class="side-img" alt="top-side">

    <section class="footer-wrap">
      <footer>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('/assets/images/footer-bg.png')}}" class="footer-img" alt="">
              <div class="partners">
                <!-- <img src="/assets/icons/academy.png" alt="academy"> -->
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
  <img src="{{asset('/assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">
  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/scripts.js')}}"> </script>

</body>

</html>