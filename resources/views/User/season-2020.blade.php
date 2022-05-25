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
							<h1 class="animate__animated animate__fadeInRight animate_slower">الموسم الثاني</h1>
							<h2 class="animate__animated animate__fadeInRight animate_slower">٢٠٢٠</h2>
						</div>
						<div class="col-md-12">
							<label for="video" class="video-box">Video</label>
							
						</div>

						<div class="col-md-6">
							<label for="img-1" class="image-box-season">Images</label>
							
						</div>
						<div class="col-md-6">
							<label for="img-2" class="image-box-season">Images</label>
							
						</div>

						<div class="col-md-6">
							<label for="img-3" class="image-box-season">Images</label>
							
						</div>
						<div class="col-md-6">
							<label for="img-4" class="image-box-season">Images</label>
							
						</div>

						<div class="col-md-6">
							<label for="img-5" class="image-box-season">Images</label>
							
						</div>
						<div class="col-md-6">
							<label for="img-6" class="image-box-season">Images</label>
							
						</div>
						<!-- <div class="col-md-12">
							<button class="btn btn-primary img-submit"> Submit</button>
					</div> -->
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