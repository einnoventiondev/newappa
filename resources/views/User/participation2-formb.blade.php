<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta required name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عبدالله الفيصل الشعر العربي</title>
	<link rel="icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/khurram.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <img src="{{ asset('assets/images/bg-img.png') }}" class="img-fluid bg-img" alt="bg-img">

    <div class="content-wrapper">

        @include('layouts.User.nav')

        <section class="content-container">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-12 title-uni-stnd ">
                        <div class="row">
                            <div class="col-md-2 mob-order-1">
                                <div class="top-prize">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="uni-stnd-txt partic-txt">
                                    <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block"> </span>
                                    <h2 class="animate__animated animate__fadeInRight animate_slower">جائزة </h2>
                                    <h1 class="animate__animated animate__fadeInRight animate_slower">القصيدة المغناة </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="POST" enctype="multipart/form-data" action="{{ route('second.paricipation') }}" class="row gx-5 gy-3 candidate-form">
                        @csrf
                        <input type="text" required name="form" value="second" hidden>
                        <input type="text" required name="type" value="1" hidden>
                        <div>
                            <h2>معلومات المرشح</h1>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" class="form-label">الاسم الرباعي</label>
                                <input type="text" class="form-control" required name="inputName" id="inputName">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputNationality" class="form-label">الجنسية</label>
                                <select required name="inputNationality" id="inputNationality" class="form-select">
                                    <option selected disabled>اختارالجنسية</option>
                                    @foreach ($nation as $nat)
                                    <option value="{{$nat->name}}">{{$nat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idNumber" class="form-label">رقم الهوية</label>
                                <input type="text" class="form-control" required name="idNumber" id="idNumber">
                            </div>
                        </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                   <label for="about" class="form-label">نبذة عن المرشح</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required name="about" id="about" ></textarea>

                                    <!-- <input type="text" class="form-control" required name="relation" id="relation"> -->
                                </div>
                            </div>

                        <div class="col-md-12">
                            <div class="form-group upload-file">
                                <label for="passportimages" class="form-label">رفع صورة جواز السفر أو
                                    الھویة</label>
                                <input class="form-control" accept="image/*" type="file" id="passport-id-file-name" required name="passportimages" id="passportimages">
                                <span class="upload-file-img passport-id">
                                    <img src="{{ asset('assets/images/file-icon.png') }}" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="form-group upload-file">
                                <label for="candidateImage" class="form-label">تحمیل السیرة الذاتیة</label>
                                <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="candidateImage" id="candidateImage">
                                <span class="upload-file-img download-cv">
                                    <img src="{{ asset('assets/images/file-icon.png') }}" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>


                        <div>
                            <h2>تحمیل أعمال المرشح</h2>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-label">عنوان الدیوان</label>
                                <input type="text" class="form-control" required name="title" id="title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="place" class="form-label">دار النشر</label>
                                <input type="text" class="form-control" required name="place" id="place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="release" class="form-label">سنة الإصدار</label>
                                <input type="date" class="form-control" required name="release" id="release">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group upload-file">
                                <label for="publishedWorks" class="form-label">التحمیل</label>
                                <input class="form-control" type="file" id="download-file-name" accept="application/pdf, application/vnd.ms-excel" required name="publishedWorks" id="publishedWorks">
                                <span class="upload-file-img download-file-name">
                                    <img src="{{ asset('assets/images/file-icon.png') }}" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
							<div class="add-more">
						
							</div>
						 <div class="content add-more-btn-main">
                            <button type="button" class="btn btn-green add-more-btn mt-4">أضف المزيد<img src="{{ asset('assets/icons/arrow-back.png') }}" alt=""></button>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" required name="check2" id="check2">
                            <label class="form-check-label" for="check2">ترفق الجھة خطاب الترشیح على ورق رسمي
                                باستخدام الماسح الضوئي مصدقا بالختم الرسمي للجھة </label>
                        </div>

                        <div class="content">
                            <button type="submit" class="btn btn-green submit-btn mt-4">إرسال طلب الترشح<img src="{{ asset('assets/icons/arrow-back.png') }}" alt=""></button>
                        </div>
                        <!-- </div> -->
                    </form>

                </div>
            </div>
        </section>

        <img src="{{ asset('assets/images/top-side.png') }}" class="side-img" alt="close-up-hands">

        @include('layouts.User.footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"> </script>
    <script src="{{asset('assets/js/scripts.js')}}"> </script>


</body>

</html>