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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/khurram.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <img src="{{ asset('assets/images/bg-img.png') }}" class="img-fluid bg-img" alt="bg-img">

    <div class="content-wrapper">

        @include('layouts.User.nav')


{{--- - - - - - - - - - -    individual section form start here   - - - - - - - - - - - - - - - - - - - - - - - ---}}

<section class="content-container coprate-section">
    <div class="container">
        <div class="row g-0">


            <div class="col-md-12 title-uni-stnd ">
                <div class="row">
                    <div class="col-md-10">
                        <div class="uni-stnd-txt partic-txt">
                            <span class="sub-title animate__animated animate__fadeInRight animate_slower d-block">
                            </span>
                            <h2 class="animate__animated animate__fadeInRight animate_slower per-color mb-3">ترشيح مؤسسات </h2>
                            <h2 class="animate__animated animate__fadeInRight animate_slower mb-3">جائزة الأمير عبدالله الفيصل  </h2>
                            <h1 class="animate__animated animate__fadeInRight animate_slower  mb-3"> لأفضل مشروع في خدمة
                                الشعر العربي  </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- coperate form start here --}}

            <div class="col-md-12">
                <div class="radio-btn radio-main">
                    <label for="inputName" class="form-label filter-txt">المرشح</label>
                    <div class="form-check">
                        <input class="form-check-input authentic-individual-radio" checked type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            أصالة
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input behalf-individual-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            نيابة
                        </label>
                    </div>
                </div>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{ route('second.paricipation') }}" class="row candidate-form corporate-form individual-form1 ">
                @csrf
                <input type="text" required name="form" value="third" hidden>
                <input type="text" required name="type" value="2" hidden>

                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="authentic_name" class="form-label">اسم المشروع</label>
                            <input type="text" class="form-control" required name="authentic_name" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                            <label for="authentic_type" class="form-label">نوعه</label>
                            <input type="text" class="form-control" required name="authentic_type" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="authentic_date" class="form-label">تاريخ الانطلاق</label>
                            <input type="text" class="form-control date" required name="authentic_date" id="inputName">
                         </div>
                    </div>
                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="authentic_project" class="form-label">ادارة المشروع</label>
                            <select required name="authentic_project" id="state" class="form-select">
                                <option selected disabled></option>
                                <option value="فريق">
                                    فريق
                                </option>
                                <option value="فرد">
                                    فرد
                                </option>

                            </select>

                        </div>
                    </div>
                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                        </div>
                    </div>

                <div class="padd-0">
                    <h2>بيانات مدير المشروع</h1>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_company" class="form-label">الاسم</label>
                        <input type="text" class="form-control" required name="authentic_company" id="inputName">
                    </div>
                </div>

                <div class="col-md-4 padd-r-20  padd-l-20">
                    <div class="form-group">
                        <label for="authentic_age" class="form-label">العمر</label>
                        <input type="text" class="form-control" required name="authentic_age" id="idNumber">
                    </div>
                </div>


                <div class="col-md-4 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_contact" class="form-label">رقم الهوية</label>
                        <input type="number" class="form-control" required name="authentic_contact" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_options" class="form-label">الجنسية</label>
                        <select required name="authentic_options" id="inputNationality" class="form-select">
                            <option selected disabled></option>
                            <option value="حكومية">
                                حكومية
                            </option>
                            <option value="خاصة">
                                خاصة
                            </option>
                            <option value="تطوعية">
                                تطوعية
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 padd-r-20  padd-l-20">
                    <div class="form-group">
                        <label for="authentic_contact" class="form-label">رقم التواصل</label>
                        <input type="number" class="form-control" required name="authentic_contact" id="idNumber">
                    </div>
                </div>
                <div class="col-md-4 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_email" class="form-label">البريد الالكتروني</label>
                        <input type="email" class="form-control" required name="authentic_email" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_condition" class="form-label">الحالة</label>
                        <select required name="authentic_condition" id="inputNationality" class="form-select">
                            <option selected disabled></option>
                            <option value="مستثمر">
                                مستثمر
                            </option>
                            <option value="خاصة">
                                خاصة
                            </option>
                            <option value="موظف">
                                موظف
                            </option>
                            <option value="متطوع">
                                متطوع
                            </option>
                            <option value="أخرى ">
                                أخرى
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-8 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_choose" class="form-label">في حال اختيار أخرى يرجى ذكرها</label>
                        <input type="number" class="form-control" required name="authentic_choose" id="idNumber">
                    </div>
                </div>
                <div class="padd-0">
                    <h2>مكان تفعيل المشروع</h2>
                </div>

                <div class="col-md-6 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_country" class="form-label">الدولة</label>
                        <select required name="authentic_country" id="inputNationality" class="form-select">
                            <option selected disabled></option>
                            <option value="حكومية">
                                الدولة
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_city" class="form-label">المدينة</label>
                        <input type="text" class="form-control" required name="authentic_city" id="idNumber">
                    </div>
                </div>

                <div class="col-md-12 padd-0">
                    <div class="form-group">
                       <label for="authentic_idea" class="form-label">فكرة المشروع</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required name="authentic_idea" id="about" ></textarea>
                    </div>
                </div>


                <div class="padd-0">
                    <h2>البرامج أو الفعاليات أو الأنشطة المتعلقة بالشعر العربي التي نفذها المشروع:</h2>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_program" class="form-label">اسم البرنامج</label>
                        <input type="text" class="form-control" required name="authentic_program" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-l-20 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_history" class="form-label">تاريخه</label>
                        <input type="text" class="form-control" required name="authentic_history" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_place" class="form-label">مكان إقامته</label>
                        <input type="text" class="form-control" required name="authentic_place" id="idNumber">
                    </div>
                </div>

                <div class="col-md-6 padd-l-20">
                    <div class="form-group">
                        <label for="city" class="form-label">الهدف</label>
                        <input type="text" class="form-control" required name="authentic_history" id="idNumber">
                    </div>
                </div>

                <div class="col-md-6 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_target" class="form-label"> الشريحة المستهدفة</label>
                        <input type="text" class="form-control" required name="authentic_target" id="idNumber">
                    </div>
                </div>

                <div class="add-more">

                </div>

             <div class="content add-more-btn-main">
                <button type="button" class="btn btn-green-icon add-more-btn mt-4"><img src="{{ asset('assets/icons/plus-circle.png') }}" alt=""> إضافة جديد</button>
            </div>

            <div class="col-md-6 padd-l-20">
                <div class="form-group">
                    <label for="authentic_link" class="form-label"> رابط الموقع الإلكتروني للتعريف بالمشروع وأنشطته</label>
                    <input type="url" class="form-control" required name="authentic_link" id="idNumber">
                </div>
            </div>



            <div class="padd-0">
                <h2>شهادات حصل عليها المشروع</h2>
            </div>

            <div class="col-md-6 padd-l-20">
                <div class="form-group upload-file">
                    <label for="authentic_cv" class="form-label" > جهة الشهادة Pdf, jpg, png</label>

                    <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="authentic_cv" id="candidateImage">
                    <span class="upload-file-img download-cv">
                        ارفاق ملف <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
                    </span>
                </div>
            </div>


            <div class="col-md-6 padd-r-20">
                <div class="form-group upload-file">
                    <label for="authentic_cv1" class="form-label" > جهة الشهادة Pdf, jpg, png</label>
                    <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="authentic_cv1" id="candidateImage">
                    <span class="upload-file-img download-cv">
                        ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
                    </span>
                </div>
            </div>


            <div class="col-md-6 padd-l-20">
                <div class="form-group upload-file">
                    <label for="authentic_cv2" class="form-label" > جهة الشهادة Pdf, jpg, png</label>
                    <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="authentic_cv2" id="candidateImage">
                    <span class="upload-file-img download-cv">
                        ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
                    </span>
                </div>
            </div>


            <div class="col-md-6 padd-r-20">
                <div class="form-group upload-file">
                    <label for="authentic_cv3" class="form-label" > جهة الشهادة Pdf, jpg, png</label>
                    <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="authentic_cv3" id="candidateImage">
                    <span class="upload-file-img download-cv">
                        ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
                    </span>
                </div>
            </div>


            <div class="add-more-upload">

            </div>
            <div class="content add-more-btn-main">
                <button type="button" class="btn btn-green-icon add-more-upload-btn mt-4"><img src="{{ asset('assets/icons/plus-circle.png') }}" alt=""> إضافة جديد</button>
            </div>



            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" required name="check2" id="check2">
                <label class="form-check-label check-label" for="check2">نملك جميع الحقوق الفكرية للمشروع المرشح، وجميع المعلومات المدونة والمرفقة في هذا النموذج صحيحة ودقيقة ونتحمل مسؤولية ما يخالف ذلك.
                </label>
            </div>

            <div class="content">
                <button type="submit" class="btn btn-green submit-btn mt-4">ارسال الطلب</button>
            </div>

            </form>


            {{-- individual form end here --}}


              {{-- individual form 2 start here --}}
            <form method="POST" enctype="multipart/form-data" action="{{ route('second.paricipation') }}" class="row candidate-form corporate-form individual-form2 d-none">


                @csrf
                <input type="text" required name="form" value="third" hidden>
                <input type="text" required name="type" value="2" hidden>


                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="behalf_candidate_name" class="form-label">اسم المرشح</label>
                            <input type="text" class="form-control" required name="behalf_candidate_name" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                            <label for="behalf_options" class="form-label">خيارات</label>
                            <select required name="behalf_options" id="state" class="form-select">
                                <option selected disabled></option>
                                <option value="مؤسسة">
                                    مؤسسة
                                </option>
                                <option value="فرد">
                                    فرد
                                </option>

                            </select>

                        </div>
                    </div>

                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="behalf_name" class="form-label">اسم المشروع</label>
                            <input type="text" class="form-control" required name="behalf_name" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                            <label for="behalf_type" class="form-label">نوعه</label>
                            <input type="text" class="form-control" required name="behalf_type" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="behalf_date" class="form-label">تاريخ الانطلاق</label>
                            <input type="text" class="form-control date" required name="behalf_date" id="inputName">
                        </div>
                    </div>

                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                        </div>
                    </div>



                <div class="padd-0">
                    <h2>مكان تفعيل المشروع</h2>
                </div>

                <div class="col-md-6 padd-l-20">
                    <div class="form-group">
                        <label for="behalf_country" class="form-label">الدولة</label>
                        <select required name="behalf_country" id="inputNationality" class="form-select">
                            <option selected disabled></option>
                            <option value="حكومية">
                                حكومية
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 padd-r-20">
                    <div class="form-group">
                        <label for="behalf_city" class="form-label">المدينة</label>
                        <input type="text" class="form-control" required name="behalf_city" id="idNumber">
                    </div>
                </div>



                <div class="col-md-12 padd-0">
                    <div class="form-group">
                       <label for="behalf_about" class="form-label">فكرة المشروع</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required name="behalf_about" id="about" ></textarea>
                    </div>
                </div>
                <div class="col-md-6 padd-l-20">
                    <div class="form-group">
                        <label for="behalf_site" class="form-label">رابط الموقع الإلكتروني للتعريف بالمشروع وأنشطته</label>
                        <input type="url" class="form-control" required name="behalf_site" id="idNumber">
                    </div>
                </div>
            <div class="content">
                <button type="submit" class="btn btn-green submit-btn mt-4">ارسال الطلب</button>
            </div>

            </form>

              {{-- individual form 2 end here --}}


        </div>
    </div>
</section>


{{-- individual section end here --}}



        <img src="{{ asset('assets/images/top-side.png') }}" class="side-img" alt="close-up-hands">

        @include('layouts.User.footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('assets/js/scripts.js')}}"> </script>

    <script>
        $(document).ready(function () {


    $("input[type=radio]").change(function(){
        if( $('.authentic-radio').is(":checked") ){

            $('.corporate-form1').removeClass('d-none');
            $('.corporate-form2').addClass('d-none');
        }
        if( $('.behalf-radio').is(":checked") ){

            $('.corporate-form2').removeClass('d-none');
            $('.corporate-form1').addClass('d-none');
        }
    });

    $("input[type=radio]").change(function(){
        if( $('.authentic-individual-radio').is(":checked") ){

            $('.individual-form1').removeClass('d-none');
            $('.individual-form2').addClass('d-none');
        }
        if( $('.behalf-individual-radio').is(":checked") ){

            $('.individual-form2').removeClass('d-none');
            $('.individual-form1').addClass('d-none');
        }
    });


    let count=0;
	 $(".add-more-btn").click(function () {
		 var add= `<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="city" class="form-label">اسم البرنامج</label>
            <input type="text" class="form-control" required name="city`+ count +`" id="idNumber">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="date" class="form-label">تاريخه</label>
            <input type="text" class="form-control" required name="date`+ count +`" id="idNumber">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="city" class="form-label">مكان إقامته</label>
            <input type="text" class="form-control" required name="city`+ count +`" id="idNumber">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city" class="form-label">الهدف</label>
            <input type="text" class="form-control" required name="city`+ count +`" id="idNumber">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city" class="form-label"> الشريحة المستهدفة</label>
            <input type="text" class="form-control" required name="city`+ count +`" id="idNumber">
        </div>
    </div>
</div>`;
        $(".add-more").append(add);

 });


 // upload file


 $(".add-more-upload-btn").click(function () {
		 var add= `<div class="row">
            <div class="col-md-6">
    <div class="form-group upload-file">
        <label for="candidateImage" class="form-label">تحمیل السیرة الذاتیة</label>
        <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required  name="candidateImage`+ count +`" id="candidateImage">
        <span class="upload-file-img download-cv">
            ارفاق ملف <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
        </span>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group upload-file">
        <label for="candidateImage" class="form-label">تحمیل السیرة الذاتیة</label>
        <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required  name="candidateImage`+ count +`" id="candidateImage">
        <span class="upload-file-img download-cv">
            ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
        </span>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group upload-file">
        <label for="candidateImage" class="form-label">تحمیل السیرة الذاتیة</label>
        <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required  name="candidateImage`+ count +`" id="candidateImage">
        <span class="upload-file-img download-cv">
            ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
        </span>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group upload-file">
        <label for="candidateImage" class="form-label">تحمیل السیرة الذاتیة</label>
        <input class="form-control" accept="image/*" type="file" id="download-cv-file-name" required name="candidateImage`+ count +`"  id="candidateImage">
        <span class="upload-file-img download-cv">
            ارفاق ملف  <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
        </span>
    </div>
</div>

</div>`;
        $(".add-more-upload").append(add);

 });




 $(".date").datepicker({
        autoclose: true,
        todayHighlight: true,
        locale: 'en'
  }).datepicker('update', new Date());


        });

    </script>
</body>

</html>
