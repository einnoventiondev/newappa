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
                <div class="row justify-content-center">
                    <div class="col-md-12 title-uni-stnd ">
                        <div class="row">
                            {{-- <div class="col-md-2 mob-order-1">
                                <!-- <div class="top-prize">
                                    <img src="{{ asset('assets/images/prize4.svg') }}" alt="top">
                                </div> -->
                            </div> --}}
                            <div class="col-md-12">
                                <div class="uni-stnd-txt partic-txt">
                                    {{-- <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block"></span> --}}
                                    <h2 class="animate__animated animate__fadeInRight text-center animate_slower">جائزة الأمير عبدالله الفيصل</h2>
                                    <h1 class="animate__animated animate__fadeInRight text-center  animate_slower mb-4">ابق على تواصل معنا</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{route('sendemail')}}" method="POST" class="row justify-content-center candidate-form">
                        @csrf
                        <h2 class="text-center">اتصل بنا</h2>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="exampleInputUsername" class="form-label">اسمك</label>
                                <input type="text" name="name" class="form-control" id="" placeholder=" أدخل الاسم">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail" class="form-label">عنوان بريد الكتروني</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder=" أدخل  البريد الإلكتروني">
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="form-label">رقم الجوال</label>
                                <input type="tel" name="phone" class="form-control" id="telephone" placeholder=" أدخل رقم الجوال">
                            </div>
                       
                            <div class="form-group">
                                <label for="description" class="form-label">رسالة</label>
                                <textarea class="form-control" rows="4" name="description" id="description" placeholder="اكتب رسالتك"></textarea>
                            </div>
							 <div class="content justify-content-center">

                            <button type="submit" class="btn btn-green main-form-btn submit-btn mt-4">أرسل رسالة<img src="{{ asset('/assets/icons/arrow-back.png')}}" alt=""></button>
                        </div>


                        </div>
                       
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