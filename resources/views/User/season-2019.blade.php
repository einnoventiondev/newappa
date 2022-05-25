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
   <!-- season images page start
   <section id="season-view">
            <div class="container">

                <div class="row">
                    <div class="season-title">
                        <h1  class="animate__animated animate__fadeInRight animate_slower">الموسم الأول</h1>
                        <h2>٢٠١٩</h2>
                    </div>
                    <input type="hidden" name="year" value="">
                    <div class="col-md-12 mb-4">
                        <td class="video-box">
                            <video  controls width="100%">
                                <source  src=""  type="video/mp4"  >

                            </video>
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="" width="100%">
                        </td>
                    </div>

                </div>
                <form action="{{ route('update_portfolio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="year" value="{{ $year ?? '' }}">
                    <button  type="submit" class="btn btn-primary img-submit mt-4"> update</button>

                </form>

            </div>
        </section> -->
        <!-- season images page start -->

    <section class="content-container video-content-container">
     
      <div class="container-fluid">
        <div class="row g-0">
          <div class="col-md-12 title-video">

            <h1 class="animate__animated animate__fadeInRight animate_slower">المحتوى المرئي للحفل الموسم الأو ل</h1>
          </div>

          <div class="content-video">
            <div class="row tbody-video">
              <div class="col-md-6">
                
                <div class="iframe">
                <h4>حفل الجائزة للموسم الأول كاملاً	</h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/drVoOD9fy4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>السلام الملكي	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/CnWQSD4v1vc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>القرآن الكريم	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/4Dc1BaD8hNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>كلمة الأمير خالد الفيصل	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/3Zg7lVYdZ6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>كلمة أمين الجائزة	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/EVFNbwUUhCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>كلمة مستشار رئيس مجلس الأمناء	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/oHVyTm1-P_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                  <h4>تدشين موسوعة الشعر العربي	</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/6dK0UdXZ_ZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                 <h4>العمل النثري	</h4>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/ty8_-dfHz_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                <h4>الفاصل الغنائي	</h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TUuWr16IV0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                <h4>الفائزين</h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/fxfSFb_RNzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
              </div>
              <div class="col-md-6">
                <div class="iframe">
                 <h4>المكرمين	</h4>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/Vse6yywXvWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          </div>
              </div>
              
            </div>

          
          </div>
        </div>
      </div>
    </section>

    <img src="{{asset('/assets/images/top-side.png')}}" class="side-img" alt="top-side">
    @include('layouts.User.footer')
  </div>
  <img src="{{asset('./assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">

  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/scripts.js')}}"> </script>


  
</body>

</html>