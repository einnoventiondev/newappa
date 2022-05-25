<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apaa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{('assets/css/khurram.css')}}">
  <link rel="stylesheet" href="{{('assets/css/responsive.css')}}">
</head>

<body>
  <img src="{{('assets/images/bg-img.png')}}" class="img-fluid bg-img" alt="bg-img">

  <div class="content-wrapper">

    @include('layouts.User.nav')
    @yield('content')

    @include('layouts.User.footer')

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="{{asset('assets/js/jquery.min.js')}}">
  </script>
</body>

</html>