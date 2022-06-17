<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عبدالله الفيصل الشعر العربي</title>
    <link rel="icon" href="{{ asset('/assets/icons/favicon-01.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/assets/icons/favicon-01.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/khurram.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <img src="{{ 'assets/images/bg-img.png' }}" class="img-fluid bg-img" alt="bg-img">

    <div class="content-wrapper index-wrapper">

        @include('layouts.User.nav')

        <!-- season images page start -->
        <section id="season-view">
            <div class="container">

                <div class="row">
                    <div class="season-title col-md-12 title-video">
                        <h1 class="animate__animated animate__fadeInRight animate_slower">الموسم الأول</h1>
                        <h2 class="animate__animated animate__fadeInRight animate_slower">{{ $year ?? '' }}</h2>
                    </div>
                    <input type="hidden" name="year" value="{{ $portfolio->year ?? '' }}">
                    <div class="col-md-12 mb-4">
                        <td class="video-box">
                            <video  controls width="100%">
                                <source  src="{{ asset('video/' . $portfolio->video ?? '') }}"  type="video/mp4"  >

                            </video>
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image1 ?? '') }}" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image2 ?? '') }}" width="100%">
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image3 ?? '') }}" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image4 ?? '') }}" width="100%">
                        </td>
                    </div>

                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image5 ?? '') }}" width="100%">
                        </td>
                    </div>
                    <div class="col-md-6 mb-4">
                        <td class="image-box-season">
                            <img src="{{ asset('images/' . $portfolio->image6 ?? '') }}" width="100%">
                        </td>
                    </div>

                </div>
                <form action="{{ route('update_portfolio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="year" value="{{ $year ?? '' }}">
                    <button  type="submit" class="btn btn-primary img-submit mt-4"> update</button>

                </form>

            </div>
        </section>
        <!-- season images page start -->

        @include('layouts.User.footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

  <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
