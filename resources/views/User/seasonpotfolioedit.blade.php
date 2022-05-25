<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عبدالله الفيصل الشعر العربي</title>
	<link rel="icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/icons/favicon-01.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/khurram.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <img src="{{('assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">

    <div class="content-wrapper index-wrapper">

        @include('layouts.User.nav')

<!-- season images page start -->
<section id="season-view">
    <div class="container">
        <form action="{{route('store_portfolio')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="season-title">
                    <h1>الموسم الأول</h1>
                    <h2>{{$year ?? ''}}</h2>
                </div>
                <input type="hidden" name="year" value="{{$year ?? ''}}">
                <div class="col-md-12">
                    <label for="video" class="video-box">Video</label>
                    <input type="file"  name="video" id="video" class="d-none">
                </div>

                <div class="col-md-6">
                    <label for="img-1" class="image-box-season">Images</label>

                    <input type="file" name="image1" id="img-1" class="d-none">
                </div>
                <div class="col-md-6">
                    <label for="img-2" class="image-box-season">Images</label>
                    <input type="file" name="image2" id="img-2" class="d-none">
                </div>

                <div class="col-md-6">
                    <label for="img-3" class="image-box-season">Images</label>
                    <input type="file" name="image3" id="img-3" class="d-none">
                </div>
                <div class="col-md-6">
                    <label for="img-4" class="image-box-season">Images</label>
                    <input type="file" name="image4" id="img-4" class="d-none">
                </div>

                <div class="col-md-6">
                    <label for="img-5" class="image-box-season">Images</label>
                    <input type="file" name="image5" id="img-5" class="d-none">
                </div>
                <div class="col-md-6">
                    <label for="img-6" class="image-box-season">Images</label>
                    <input type="file" name="image6" id="img-6" class="d-none">
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary img-submit"> Submit</button>
            </div>
            </div>
        </form>

    </div>
</section>
<!-- season images page start -->

@include('layouts.User.footer')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"> </script>
<script src="{{asset('assets/js/scripts.js')}}"> </script>
</body>

</html>
