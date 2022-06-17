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
  <link rel="stylesheet" href="{{asset('/assets/css/khurram.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="content-wrapper">
  @include('layouts.User.nav')

<!-- season images page start -->
		<section id="season-view">
			<div class="container">
				<form action="">
					<div class="row">
						<div class="season-title col-md-12 title-video">
							<h1 class="animate__animated animate__fadeInRight animate_slower">المحتوى المرئي للحفل الموسم الأو ل٢٠١٩                            </h1>
							<h2 class="animate__animated animate__fadeInRight animate_slower"></h2>
						</div>
						<div class="col-md-12">
							<label for="video" class="video-box">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vD2Q3UJR0Ig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </label>
						</div>

						<div class="col-md-6">
              {{-- <h4 class="video-heading">حفل الجائزة للموسم الأول كاملاً	</h4> --}}
              <img src="{{asset('/assets/images/2019/one.png')}}" alt="" class="image-box-season">
						</div>
						<div class="col-md-6">
              {{-- <h4 class="video-heading">السلام الملكي	</h4> --}}
              <img src="{{asset('/assets/images/2019/two.png')}}" alt="" class="image-box-season">
						</div>
						<div class="col-md-6">
              {{-- <h4 class="video-heading">القرآن الكريم	</h4> --}}
              <img src="{{asset('/assets/images/2019/three.png')}}" alt="" class="image-box-season">
						</div>
						<div class="col-md-6">
              {{-- <h4 class="video-heading">كلمة الأمير خالد الفيصل	</h4> --}}
              <img src="{{asset('/assets/images/2019/four.png')}}" alt="" class="image-box-season">
						</div>

						<div class="col-md-6">
              {{-- <h4 class="video-heading">كلمة أمين الجائزة	</h4> --}}
              <img src="{{asset('/assets/images/2019/five.png')}}" alt="" class="image-box-season">
						</div>
            <div class="col-md-6">
              {{-- <h4 class="video-heading">كلمة مستشار رئيس مجلس الأمناء	</h4> --}}
              <img src="{{asset('/assets/images/2019/six.png')}}" alt="" class="image-box-season">
						</div>
		
            <div class="col-md-12 season-table">
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
            </div>
					</div>
				</form>

			</div>
		</section>
		<!-- season images page start -->
    <img src="{{asset('/assets/images/top-side.png')}}" class="side-img" alt="top-side">
    @include('layouts.User.footer')
  </div>
  <img src="{{asset('./assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">

  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/scripts.js')}}"> </script>



</body>

</html>
