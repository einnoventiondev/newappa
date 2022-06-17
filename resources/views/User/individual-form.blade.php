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
                            <h2 class="animate__animated animate__fadeInRight animate_slower per-color mb-3">  </h2>
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

            <form method="POST" enctype="multipart/form-data" action="{{ route('first.individual2.form') }}" class="row candidate-form corporate-form individual-form1 ">
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
                        <input type="number" class="form-control" required name="authentic_age" id="idNumber">
                    </div>
                </div>


                <div class="col-md-4 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_contact" class="form-label">رقم الهوية</label>
                        <input type="text" class="form-control" required name="authentic_contact" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_options" class="form-label">الجنسية</label>
                        <select required name="authentic_options" id="inputNationality" class="form-select">
                            <option selected="" disabled=""></option>
                            <option value="أفغاني">أفغاني</option>
                            <option value="ألباني">ألباني</option>
                            <option value="جزائري">جزائري</option>
                            <option value="أمريكي">أمريكي</option>
                            <option value="أندوري">أندوري</option>
                            <option value="أنغولي">أنغولي</option>
                            <option value="انتيغوا">انتيغوا</option>
                            <option value="أرجنتيني">أرجنتيني</option>
                            <option value="أرميني">أرميني</option>
                            <option value="أسترالي">أسترالي</option>
                            <option value="نمساوي">نمساوي</option>
                            <option value="أذربيجاني">أذربيجاني</option>
                            <option value="باهامى">باهامى</option>
                            <option value="بحريني">بحريني</option>
                            <option value="بنجلاديشي">بنجلاديشي</option>
                            <option value="باربادوسي">باربادوسي</option>
                            <option value="بربودا">بربودا</option>
                            <option value="بوتسواني">بوتسواني</option>
                            <option value="بيلاروسي">بيلاروسي</option>
                            <option value="بلجيكي">بلجيكي</option>
                            <option value="بليزي">بليزي</option>
                            <option value="بنيني">بنيني</option>
                            <option value="بوتاني">بوتاني</option>
                            <option value="بوليفي">بوليفي</option>
                            <option value="بوسني">بوسني</option>
                            <option value="برازيلي">برازيلي</option>
                            <option value="بريطاني">بريطاني</option>
                            <option value="بروناى">بروناى</option>
                            <option value="بلغاري">بلغاري</option>
                            <option value="بوركيني">بوركيني</option>
                            <option value="بورمي">بورمي</option>
                            <option value="بوروندي">بوروندي</option>
                            <option value="كمبودي">كمبودي</option>
                            <option value="كاميروني">كاميروني</option>
                            <option value="كندي">كندي</option>
                            <option value="االرأس الأخضر">االرأس الأخضر</option>
                            <option value="وسط أفريقيا">وسط أفريقيا</option>
                            <option value="تشادي">تشادي</option>
                            <option value="شيلي">شيلي</option>
                            <option value="صينى">صينى</option>
                            <option value="كولومبي">كولومبي</option>
                            <option value="جزر القمر">جزر القمر</option>
                            <option value="كونغولي">كونغولي</option>
                            <option value="كوستاريكي">كوستاريكي</option>
                            <option value="كرواتية">كرواتية</option>
                            <option value="كوبي">كوبي</option>
                            <option value="قبرصي">قبرصي</option>
                            <option value="تشيكي">تشيكي</option>
                            <option value="دانماركي">دانماركي</option>
                            <option value="جيبوتي">جيبوتي</option>
                            <option value="دومينيكاني">دومينيكاني</option>
                            <option value="هولندي">هولندي</option>
                            <option value="تيموري شرقي">تيموري شرقي</option>
                            <option value="اكوادوري">اكوادوري</option>
                            <option value="مصري">مصري</option>
                            <option value="إماراتي">إماراتي</option>
                            <option value="غيني  استوائي">غيني  استوائي</option>
                            <option value="إريتري">إريتري</option>
                            <option value="إستوني">إستوني</option>
                            <option value="حبشي">حبشي</option>
                            <option value="فيجي">فيجي</option>
                            <option value="فلبيني">فلبيني</option>
                            <option value="فنلندي">فنلندي</option>
                            <option value="فرنسي">فرنسي</option>
                            <option value="جابوني">جابوني</option>
                            <option value="غامبيي">غامبيي</option>
                            <option value="جورجي">جورجي</option>
                            <option value="ألماني">ألماني</option>
                            <option value="غاني">غاني</option>
                            <option value="إغريقي">إغريقي</option>
                            <option value="جرينادي">جرينادي</option>
                            <option value="غواتيمالي">غواتيمالي</option>
                            <option value="غيني بيساوي">غيني بيساوي</option>
                            <option value="غيني">غيني</option>
                            <option value="جوياني">جوياني</option>
                            <option value="هايتي">هايتي</option>
                            <option value="هرسكي">هرسكي</option>
                            <option value="هندوراسي">هندوراسي</option>
                            <option value="هنغاري">هنغاري</option>
                            <option value="إيسلندي">إيسلندي</option>
                            <option value="هندي">هندي</option>
                            <option value="إندونيسي">إندونيسي</option>
                            <option value="إيراني">إيراني</option>
                            <option value="عراقي">عراقي</option>
                            <option value="إيرلندي">إيرلندي</option>
                            <option value="إيطالي">إيطالي</option>
                            <option value="إفواري">إفواري</option>
                            <option value="جامايكي">جامايكي</option>
                            <option value="ياباني">ياباني</option>
                            <option value="أردني">أردني</option>
                            <option value="كازاخستاني">كازاخستاني</option>
                            <option value="كيني">كيني</option>
                            <option value="كيتياني ونيفيسياني">كيتياني ونيفيسياني</option>
                            <option value="كويتي">كويتي</option>
                            <option value="قيرغيزستان">قيرغيزستان</option>
                            <option value="لاوسي">لاوسي</option>
                            <option value="لاتفي">لاتفي</option>
                            <option value="لبناني">لبناني</option>
                            <option value="ليبيري">ليبيري</option>
                            <option value="ليبي">ليبي</option>
                            <option value="ليختنشتايني">ليختنشتايني</option>
                            <option value="لتواني">لتواني</option>
                            <option value="لكسمبرغي">لكسمبرغي</option>
                            <option value="مقدوني">مقدوني</option>
                            <option value="مدغشقري">مدغشقري</option>
                            <option value="مالاوى">مالاوى</option>
                            <option value="ماليزي">ماليزي</option>
                            <option value="مالديفي">مالديفي</option>
                            <option value="مالي">مالي</option>
                            <option value="مالطي">مالطي</option>
                            <option value="مارشالي">مارشالي</option>
                            <option value="موريتاني">موريتاني</option>
                            <option value="موريشيوسي">موريشيوسي</option>
                            <option value="مكسيكي">مكسيكي</option>
                            <option value="ميكرونيزي">ميكرونيزي</option>
                            <option value="مولدوفي">مولدوفي</option>
                            <option value="موناكو">موناكو</option>
                            <option value="منغولي">منغولي</option>
                            <option value="مغربي">مغربي</option>
                            <option value="ليسوتو">ليسوتو</option>
                            <option value="لتسواني">لتسواني</option>
                            <option value="موزمبيقي">موزمبيقي</option>
                            <option value="ناميبي">ناميبي</option>
                            <option value="ناورو">ناورو</option>
                            <option value="نيبالي">نيبالي</option>
                            <option value="نيوزيلندي">نيوزيلندي</option>
                            <option value="ني فانواتي">ني فانواتي</option>
                            <option value="نيكاراغوا">نيكاراغوا</option>
                            <option value="نيجري">نيجري</option>
                            <option value="كوري شمالي">كوري شمالي</option>
                            <option value="إيرلندي شمالي">إيرلندي شمالي</option>
                            <option value="نرويجي">نرويجي</option>
                            <option value="عماني">عماني</option>
                            <option value="باكستاني">باكستاني</option>
                            <option value="بالاوي">بالاوي</option>
                            <option value="فلسطيني">فلسطيني</option>
                            <option value="بنمي">بنمي</option>
                            <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                            <option value="باراغواياني">باراغواياني</option>
                            <option value="بيروفي">بيروفي</option>
                            <option value="بولندي">بولندي</option>
                            <option value="برتغالي">برتغالي</option>
                            <option value="قطري">قطري</option>
                            <option value="روماني">روماني</option>
                            <option value="روسي">روسي</option>
                            <option value="رواندي">رواندي</option>
                            <option value="لوسياني">لوسياني</option>
                            <option value="سلفادوري">سلفادوري</option>
                            <option value="ساموايان">ساموايان</option>
                            <option value="سان مارينيز">سان مارينيز</option>
                            <option value="ساو توميان">ساو توميان</option>
                            <option value="سعودي">سعودي</option>
                            <option value="سكتلندي">سكتلندي</option>
                            <option value="سنغالي">سنغالي</option>
                            <option value="صربي">صربي</option>
                            <option value="سيشلي">سيشلي</option>
                            <option value="سيرا ليوني">سيرا ليوني</option>
                            <option value="سنغافوري">سنغافوري</option>
                            <option value="سلوفاكي">سلوفاكي</option>
                            <option value="سلوفيني">سلوفيني</option>
                            <option value="جزر سليمان">جزر سليمان</option>
                            <option value="صومالي">صومالي</option>
                            <option value="جنوب افريقيي">جنوب افريقيي</option>
                            <option value="كوري جنوبي">كوري جنوبي</option>
                            <option value="إسباني">إسباني</option>
                            <option value="سري لانكي">سري لانكي</option>
                            <option value="سوداني">سوداني</option>
                            <option value="سورينامي">سورينامي</option>
                            <option value="سوازي">سوازي</option>
                            <option value="سويدي">سويدي</option>
                            <option value="سويسري">سويسري</option>
                            <option value="سوري">سوري</option>
                            <option value="تايواني">تايواني</option>
                            <option value="طاجيكي">طاجيكي</option>
                            <option value="تنزاني">تنزاني</option>
                            <option value="التايلاندي">التايلاندي</option>
                            <option value="توغواني">توغواني</option>
                            <option value="تونجاني">تونجاني</option>
                            <option value="ترينيدادي أو توباغوني">ترينيدادي أو توباغوني</option>
                            <option value="تونسي">تونسي</option>
                            <option value="تركي">تركي</option>
                            <option value="توفالي">توفالي</option>
                            <option value="أوغندي">أوغندي</option>
                            <option value="أوكراني">أوكراني</option>
                            <option value="أوروجواي">أوروجواي</option>
                            <option value="أوزبكستاني">أوزبكستاني</option>
                            <option value="فنزويلي">فنزويلي</option>
                            <option value="فيتنامي">فيتنامي</option>
                            <option value="ويلزي">ويلزي</option>
                            <option value="يمني">يمني</option>
                            <option value="زامبي">زامبي</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 padd-r-20  padd-l-20">
                    <div class="form-group">
                        <label for="authentic_contact" class="form-label">رقم التواصل</label>
                        <input type="number" class="form-control" required name="authentic_contact1" id="idNumber">
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
                        <input type="text" class="form-control" required name="authentic_choose" id="idNumber">
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
                           <option value="AW">آروبا</option>
	<option value="AZ">أذربيجان</option>
	<option value="AM">أرمينيا</option>
	<option value="ES">أسبانيا</option>
	<option value="AU">أستراليا</option>
	<option value="AF">أفغانستان</option>
	<option value="AL">ألبانيا</option>
	<option value="DE">ألمانيا</option>
	<option value="AG">أنتيجوا وبربودا</option>
	<option value="AO">أنجولا</option>
	<option value="AI">أنجويلا</option>
	<option value="AD">أندورا</option>
	<option value="UY">أورجواي</option>
	<option value="UZ">أوزبكستان</option>
	<option value="UG">أوغندا</option>
	<option value="UA">أوكرانيا</option>
	<option value="IE">أيرلندا</option>
	<option value="IS">أيسلندا</option>
	<option value="ET">اثيوبيا</option>
	<option value="ER">اريتريا</option>
	<option value="EE">استونيا</option>
	<option value="AR">الأرجنتين</option>
	<option value="JO">الأردن</option>
	<option value="EC">الاكوادور</option>
	<option value="AE">الامارات العربية المتحدة</option>
	<option value="BS">الباهاما</option>
	<option value="BH">البحرين</option>
	<option value="BR">البرازيل</option>
	<option value="PT">البرتغال</option>
	<option value="BA">البوسنة والهرسك</option>
	<option value="GA">الجابون</option>
	<option value="ME">الجبل الأسود</option>
	<option value="DZ">الجزائر</option>
	<option value="DK">الدانمرك</option>
	<option value="CV">الرأس الأخضر</option>
	<option value="SV">السلفادور</option>
	<option value="SN">السنغال</option>
	<option value="SD">السودان</option>
	<option value="SE">السويد</option>
	<option value="EH">الصحراء الغربية</option>
	<option value="SO">الصومال</option>
	<option value="CN">الصين</option>
	<option value="IQ">العراق</option>
	<option value="VA">الفاتيكان</option>
	<option value="PH">الفيلبين</option>
	<option value="AQ">القطب الجنوبي</option>
	<option value="CM">الكاميرون</option>
	<option value="CG">الكونغو - برازافيل</option>
	<option value="KW">الكويت</option>
	<option value="HU">المجر</option>
	<option value="IO">المحيط الهندي البريطاني</option>
	<option value="MA">المغرب</option>
	<option value="TF">المقاطعات الجنوبية الفرنسية</option>
	<option value="MX">المكسيك</option>
	<option value="SA">المملكة العربية السعودية</option>
	<option value="GB">المملكة المتحدة</option>
	<option value="NO">النرويج</option>
	<option value="AT">النمسا</option>
	<option value="NE">النيجر</option>
	<option value="IN">الهند</option>
	<option value="US">الولايات المتحدة الأمريكية</option>
	<option value="JP">اليابان</option>
	<option value="YE">اليمن</option>
	<option value="GR">اليونان</option>
	<option value="ID">اندونيسيا</option>
	<option value="IR">ايران</option>
	<option value="IT">ايطاليا</option>
	<option value="PG">بابوا غينيا الجديدة</option>
	<option value="PY">باراجواي</option>
	<option value="PK">باكستان</option>
	<option value="PW">بالاو</option>
	<option value="BW">بتسوانا</option>
	<option value="PN">بتكايرن</option>
	<option value="BB">بربادوس</option>
	<option value="BM">برمودا</option>
	<option value="BN">بروناي</option>
	<option value="BE">بلجيكا</option>
	<option value="BG">بلغاريا</option>
	<option value="BZ">بليز</option>
	<option value="BD">بنجلاديش</option>
	<option value="PA">بنما</option>
	<option value="BJ">بنين</option>
	<option value="BT">بوتان</option>
	<option value="PR">بورتوريكو</option>
	<option value="BF">بوركينا فاسو</option>
	<option value="BI">بوروندي</option>
	<option value="PL">بولندا</option>
	<option value="BO">بوليفيا</option>
	<option value="PF">بولينيزيا الفرنسية</option>
	<option value="PE">بيرو</option>
	<option value="TZ">تانزانيا</option>
	<option value="TH">تايلند</option>
	<option value="TW">تايوان</option>
	<option value="TM">تركمانستان</option>
	<option value="TR">تركيا</option>
	<option value="TT">ترينيداد وتوباغو</option>
	<option value="TD">تشاد</option>
	<option value="TG">توجو</option>
	<option value="TV">توفالو</option>
	<option value="TK">توكيلو</option>
	<option value="TO">تونجا</option>
	<option value="TN">تونس</option>
	<option value="TL">تيمور الشرقية</option>
	<option value="JM">جامايكا</option>
	<option value="GI">جبل طارق</option>
	<option value="GD">جرينادا</option>
	<option value="GL">جرينلاند</option>
	<option value="AX">جزر أولان</option>
	<option value="AN">جزر الأنتيل الهولندية</option>
	<option value="TC">جزر الترك وجايكوس</option>
	<option value="KM">جزر القمر</option>
	<option value="KY">جزر الكايمن</option>
	<option value="MH">جزر المارشال</option>
	<option value="MV">جزر الملديف</option>
	<option value="UM">جزر الولايات المتحدة البعيدة الصغيرة</option>
	<option value="SB">جزر سليمان</option>
	<option value="FO">جزر فارو</option>
	<option value="VI">جزر فرجين الأمريكية</option>
	<option value="VG">جزر فرجين البريطانية</option>
	<option value="FK">جزر فوكلاند</option>
	<option value="CK">جزر كوك</option>
	<option value="CC">جزر كوكوس</option>
	<option value="MP">جزر ماريانا الشمالية</option>
	<option value="WF">جزر والس وفوتونا</option>
	<option value="CX">جزيرة الكريسماس</option>
	<option value="BV">جزيرة بوفيه</option>
	<option value="IM">جزيرة مان</option>
	<option value="NF">جزيرة نورفوك</option>
	<option value="HM">جزيرة هيرد وماكدونالد</option>
	<option value="CF">جمهورية افريقيا الوسطى</option>
	<option value="CZ">جمهورية التشيك</option>
	<option value="DO">جمهورية الدومينيك</option>
	<option value="CD">جمهورية الكونغو الديمقراطية</option>
	<option value="ZA">جمهورية جنوب افريقيا</option>
	<option value="GT">جواتيمالا</option>
	<option value="GP">جوادلوب</option>
	<option value="GU">جوام</option>
	<option value="GE">جورجيا</option>
	<option value="GS">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
	<option value="DJ">جيبوتي</option>
	<option value="JE">جيرسي</option>
	<option value="DM">دومينيكا</option>
	<option value="RW">رواندا</option>
	<option value="RU">روسيا</option>
	<option value="BY">روسيا البيضاء</option>
	<option value="RO">رومانيا</option>
	<option value="RE">روينيون</option>
	<option value="ZM">زامبيا</option>
	<option value="ZW">زيمبابوي</option>
	<option value="CI">ساحل العاج</option>
	<option value="WS">ساموا</option>
	<option value="AS">ساموا الأمريكية</option>
	<option value="SM">سان مارينو</option>
	<option value="PM">سانت بيير وميكولون</option>
	<option value="VC">سانت فنسنت وغرنادين</option>
	<option value="KN">سانت كيتس ونيفيس</option>
	<option value="LC">سانت لوسيا</option>
	<option value="MF">سانت مارتين</option>
	<option value="SH">سانت هيلنا</option>
	<option value="ST">ساو تومي وبرينسيبي</option>
	<option value="LK">سريلانكا</option>
	<option value="SJ">سفالبارد وجان مايان</option>
	<option value="SK">سلوفاكيا</option>
	<option value="SI">سلوفينيا</option>
	<option value="SG">سنغافورة</option>
	<option value="SZ">سوازيلاند</option>
	<option value="SY">سوريا</option>
	<option value="SR">سورينام</option>
	<option value="CH">سويسرا</option>
	<option value="SL">سيراليون</option>
	<option value="SC">سيشل</option>
	<option value="CL">شيلي</option>
	<option value="RS">صربيا</option>
	<option value="CS">صربيا والجبل الأسود</option>
	<option value="TJ">طاجكستان</option>
	<option value="OM">عمان</option>
	<option value="GM">غامبيا</option>
	<option value="GH">غانا</option>
	<option value="GF">غويانا</option>
	<option value="GY">غيانا</option>
	<option value="GN">غينيا</option>
	<option value="GQ">غينيا الاستوائية</option>
	<option value="GW">غينيا بيساو</option>
	<option value="VU">فانواتو</option>
	<option value="FR">فرنسا</option>
	<option value="PS">فلسطين</option>
	<option value="VE">فنزويلا</option>
	<option value="FI">فنلندا</option>
	<option value="VN">فيتنام</option>
	<option value="FJ">فيجي</option>
	<option value="CY">قبرص</option>
	<option value="KG">قرغيزستان</option>
	<option value="QA">قطر</option>
	<option value="KZ">كازاخستان</option>
	<option value="NC">كاليدونيا الجديدة</option>
	<option value="HR">كرواتيا</option>
	<option value="KH">كمبوديا</option>
	<option value="CA">كندا</option>
	<option value="CU">كوبا</option>
	<option value="KR">كوريا الجنوبية</option>
	<option value="KP">كوريا الشمالية</option>
	<option value="CR">كوستاريكا</option>
	<option value="CO">كولومبيا</option>
	<option value="KI">كيريباتي</option>
	<option value="KE">كينيا</option>
	<option value="LV">لاتفيا</option>
	<option value="LA">لاوس</option>
	<option value="LB">لبنان</option>
	<option value="LU">لوكسمبورج</option>
	<option value="LY">ليبيا</option>
	<option value="LR">ليبيريا</option>
	<option value="LT">ليتوانيا</option>
	<option value="LI">ليختنشتاين</option>
	<option value="LS">ليسوتو</option>
	<option value="MQ">مارتينيك</option>
	<option value="MO">ماكاو الصينية</option>
	<option value="MT">مالطا</option>
	<option value="ML">مالي</option>
	<option value="MY">ماليزيا</option>
	<option value="YT">مايوت</option>
	<option value="MG">مدغشقر</option>
	<option value="EG">مصر</option>
	<option value="MK">مقدونيا</option>
	<option value="MW">ملاوي</option>
	<option value="ZZ">منطقة غير معرفة</option>
	<option value="MN">منغوليا</option>
	<option value="MR">موريتانيا</option>
	<option value="MU">موريشيوس</option>
	<option value="MZ">موزمبيق</option>
	<option value="MD">مولدافيا</option>
	<option value="MC">موناكو</option>
	<option value="MS">مونتسرات</option>
	<option value="MM">ميانمار</option>
	<option value="FM">ميكرونيزيا</option>
	<option value="NA">ناميبيا</option>
	<option value="NR">نورو</option>
	<option value="NP">نيبال</option>
	<option value="NG">نيجيريا</option>
	<option value="NI">نيكاراجوا</option>
	<option value="NZ">نيوزيلاندا</option>
	<option value="NU">نيوي</option>
	<option value="HT">هايتي</option>
	<option value="HN">هندوراس</option>
	<option value="NL">هولندا</option>
	<option value="HK">هونج كونج الصينية</option>
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
                        <span class="text-count">300 / 0</span>
                    </div>
                </div>


                <div class="padd-0">
                    <h2>البرامج أو الفعاليات أو الأنشطة المتعلقة بالشعر العربي التي نفذها المشروع:</h2>
                </div>

                <div class="col-md-4 padd-l-20">
                    <div class="form-group">
                        <label for="authentic_program" class="form-label">اسم البرنامج</label>
                        <input type="text" class="form-control" required name="authentic_program[]" id="idNumber">
                    </div>
                </div>

                <div class="col-md-4 padd-l-20 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_history" class="form-label">تاريخه</label>
                        <input type="date" class="form-control" required name="authentic_history[]" id="authentic_history">
                    </div>
                </div>

                <div class="col-md-4 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_place" class="form-label">مكان إقامته</label>
                        <input type="text" class="form-control" required name="authentic_place[]" id="authentic_place">
                    </div>
                </div>

                <div class="col-md-6 padd-l-20">
                    <div class="form-group">
                        <label for="city" class="form-label">الهدف</label>
                        <input type="text" class="form-control" required name="authentic_history1[]" id="authentic_history1">
                    </div>
                </div>

                <div class="col-md-6 padd-r-20">
                    <div class="form-group">
                        <label for="authentic_target" class="form-label"> الشريحة المستهدفة</label>
                        <input type="text" class="form-control" required name="authentic_target[]" id="authentic_target">
                    </div>
                </div>

                <div class="add-more-program">

                </div>

             <div class="content add-more-btn-main">
                <button type="button" class="btn btn-green-icon add-more-program-btn mt-4"><img src="{{ asset('assets/icons/plus-circle.png') }}" alt=""> إضافة جديد</button>
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
                    <label for="download-cv-file-name-first" class="form-label" > جهة الشهادة Pdf, jpg, png</label>

                    <input class="form-control" accept="image/*" type="file" id="download-cv-file-name-first" required name="authentic_cv[]" id="candidateImage">
                    <span class="upload-file-img download-cv">
                        ارفاق ملف <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
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
            <form method="POST" enctype="multipart/form-data" action="{{ route('second.individual2.form') }}" class="row candidate-form corporate-form individual-form2 d-none">


                @csrf
                <input type="text" required name="form" value="third" hidden>
                <input type="text" required name="type" value="2" hidden>


                    <div class="col-md-6 padd-l-20">
                        <div class="form-group">
                            <label for="behalf_candidate_name" class="form-label">اسم المرشح</label>
                            <input type="text" class="form-control" required name="behalf_candidate_name" id="inputName">
                        </div>
                    </div>


                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="behalf_number" class="form-label">رقم التواصل</label>
                                <input type="number" class="form-control" required name="behalf_number" id="behalf_number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="behalf_email" class="form-label">البريد الالكتروني</label>
                                <input type="email" class="form-control" required name="behalf_email" id="behalf_email">
                            </div>
                        </div>

                    <div class="col-md-6 padd-r-20">
                        <div class="form-group">
                            <label for="behalf_options" class="form-label">نوع الترشيح</label>
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
                            <option value="AW">آروبا</option>
                            <option value="AZ">أذربيجان</option>
                            <option value="AM">أرمينيا</option>
                            <option value="ES">أسبانيا</option>
                            <option value="AU">أستراليا</option>
                            <option value="AF">أفغانستان</option>
                            <option value="AL">ألبانيا</option>
                            <option value="DE">ألمانيا</option>
                            <option value="AG">أنتيجوا وبربودا</option>
                            <option value="AO">أنجولا</option>
                            <option value="AI">أنجويلا</option>
                            <option value="AD">أندورا</option>
                            <option value="UY">أورجواي</option>
                            <option value="UZ">أوزبكستان</option>
                            <option value="UG">أوغندا</option>
                            <option value="UA">أوكرانيا</option>
                            <option value="IE">أيرلندا</option>
                            <option value="IS">أيسلندا</option>
                            <option value="ET">اثيوبيا</option>
                            <option value="ER">اريتريا</option>
                            <option value="EE">استونيا</option>
                            <option value="AR">الأرجنتين</option>
                            <option value="JO">الأردن</option>
                            <option value="EC">الاكوادور</option>
                            <option value="AE">الامارات العربية المتحدة</option>
                            <option value="BS">الباهاما</option>
                            <option value="BH">البحرين</option>
                            <option value="BR">البرازيل</option>
                            <option value="PT">البرتغال</option>
                            <option value="BA">البوسنة والهرسك</option>
                            <option value="GA">الجابون</option>
                            <option value="ME">الجبل الأسود</option>
                            <option value="DZ">الجزائر</option>
                            <option value="DK">الدانمرك</option>
                            <option value="CV">الرأس الأخضر</option>
                            <option value="SV">السلفادور</option>
                            <option value="SN">السنغال</option>
                            <option value="SD">السودان</option>
                            <option value="SE">السويد</option>
                            <option value="EH">الصحراء الغربية</option>
                            <option value="SO">الصومال</option>
                            <option value="CN">الصين</option>
                            <option value="IQ">العراق</option>
                            <option value="VA">الفاتيكان</option>
                            <option value="PH">الفيلبين</option>
                            <option value="AQ">القطب الجنوبي</option>
                            <option value="CM">الكاميرون</option>
                            <option value="CG">الكونغو - برازافيل</option>
                            <option value="KW">الكويت</option>
                            <option value="HU">المجر</option>
                            <option value="IO">المحيط الهندي البريطاني</option>
                            <option value="MA">المغرب</option>
                            <option value="TF">المقاطعات الجنوبية الفرنسية</option>
                            <option value="MX">المكسيك</option>
                            <option value="SA">المملكة العربية السعودية</option>
                            <option value="GB">المملكة المتحدة</option>
                            <option value="NO">النرويج</option>
                            <option value="AT">النمسا</option>
                            <option value="NE">النيجر</option>
                            <option value="IN">الهند</option>
                            <option value="US">الولايات المتحدة الأمريكية</option>
                            <option value="JP">اليابان</option>
                            <option value="YE">اليمن</option>
                            <option value="GR">اليونان</option>
                            <option value="ID">اندونيسيا</option>
                            <option value="IR">ايران</option>
                            <option value="IT">ايطاليا</option>
                            <option value="PG">بابوا غينيا الجديدة</option>
                            <option value="PY">باراجواي</option>
                            <option value="PK">باكستان</option>
                            <option value="PW">بالاو</option>
                            <option value="BW">بتسوانا</option>
                            <option value="PN">بتكايرن</option>
                            <option value="BB">بربادوس</option>
                            <option value="BM">برمودا</option>
                            <option value="BN">بروناي</option>
                            <option value="BE">بلجيكا</option>
                            <option value="BG">بلغاريا</option>
                            <option value="BZ">بليز</option>
                            <option value="BD">بنجلاديش</option>
                            <option value="PA">بنما</option>
                            <option value="BJ">بنين</option>
                            <option value="BT">بوتان</option>
                            <option value="PR">بورتوريكو</option>
                            <option value="BF">بوركينا فاسو</option>
                            <option value="BI">بوروندي</option>
                            <option value="PL">بولندا</option>
                            <option value="BO">بوليفيا</option>
                            <option value="PF">بولينيزيا الفرنسية</option>
                            <option value="PE">بيرو</option>
                            <option value="TZ">تانزانيا</option>
                            <option value="TH">تايلند</option>
                            <option value="TW">تايوان</option>
                            <option value="TM">تركمانستان</option>
                            <option value="TR">تركيا</option>
                            <option value="TT">ترينيداد وتوباغو</option>
                            <option value="TD">تشاد</option>
                            <option value="TG">توجو</option>
                            <option value="TV">توفالو</option>
                            <option value="TK">توكيلو</option>
                            <option value="TO">تونجا</option>
                            <option value="TN">تونس</option>
                            <option value="TL">تيمور الشرقية</option>
                            <option value="JM">جامايكا</option>
                            <option value="GI">جبل طارق</option>
                            <option value="GD">جرينادا</option>
                            <option value="GL">جرينلاند</option>
                            <option value="AX">جزر أولان</option>
                            <option value="AN">جزر الأنتيل الهولندية</option>
                            <option value="TC">جزر الترك وجايكوس</option>
                            <option value="KM">جزر القمر</option>
                            <option value="KY">جزر الكايمن</option>
                            <option value="MH">جزر المارشال</option>
                            <option value="MV">جزر الملديف</option>
                            <option value="UM">جزر الولايات المتحدة البعيدة الصغيرة</option>
                            <option value="SB">جزر سليمان</option>
                            <option value="FO">جزر فارو</option>
                            <option value="VI">جزر فرجين الأمريكية</option>
                            <option value="VG">جزر فرجين البريطانية</option>
                            <option value="FK">جزر فوكلاند</option>
                            <option value="CK">جزر كوك</option>
                            <option value="CC">جزر كوكوس</option>
                            <option value="MP">جزر ماريانا الشمالية</option>
                            <option value="WF">جزر والس وفوتونا</option>
                            <option value="CX">جزيرة الكريسماس</option>
                            <option value="BV">جزيرة بوفيه</option>
                            <option value="IM">جزيرة مان</option>
                            <option value="NF">جزيرة نورفوك</option>
                            <option value="HM">جزيرة هيرد وماكدونالد</option>
                            <option value="CF">جمهورية افريقيا الوسطى</option>
                            <option value="CZ">جمهورية التشيك</option>
                            <option value="DO">جمهورية الدومينيك</option>
                            <option value="CD">جمهورية الكونغو الديمقراطية</option>
                            <option value="ZA">جمهورية جنوب افريقيا</option>
                            <option value="GT">جواتيمالا</option>
                            <option value="GP">جوادلوب</option>
                            <option value="GU">جوام</option>
                            <option value="GE">جورجيا</option>
                            <option value="GS">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
                            <option value="DJ">جيبوتي</option>
                            <option value="JE">جيرسي</option>
                            <option value="DM">دومينيكا</option>
                            <option value="RW">رواندا</option>
                            <option value="RU">روسيا</option>
                            <option value="BY">روسيا البيضاء</option>
                            <option value="RO">رومانيا</option>
                            <option value="RE">روينيون</option>
                            <option value="ZM">زامبيا</option>
                            <option value="ZW">زيمبابوي</option>
                            <option value="CI">ساحل العاج</option>
                            <option value="WS">ساموا</option>
                            <option value="AS">ساموا الأمريكية</option>
                            <option value="SM">سان مارينو</option>
                            <option value="PM">سانت بيير وميكولون</option>
                            <option value="VC">سانت فنسنت وغرنادين</option>
                            <option value="KN">سانت كيتس ونيفيس</option>
                            <option value="LC">سانت لوسيا</option>
                            <option value="MF">سانت مارتين</option>
                            <option value="SH">سانت هيلنا</option>
                            <option value="ST">ساو تومي وبرينسيبي</option>
                            <option value="LK">سريلانكا</option>
                            <option value="SJ">سفالبارد وجان مايان</option>
                            <option value="SK">سلوفاكيا</option>
                            <option value="SI">سلوفينيا</option>
                            <option value="SG">سنغافورة</option>
                            <option value="SZ">سوازيلاند</option>
                            <option value="SY">سوريا</option>
                            <option value="SR">سورينام</option>
                            <option value="CH">سويسرا</option>
                            <option value="SL">سيراليون</option>
                            <option value="SC">سيشل</option>
                            <option value="CL">شيلي</option>
                            <option value="RS">صربيا</option>
                            <option value="CS">صربيا والجبل الأسود</option>
                            <option value="TJ">طاجكستان</option>
                            <option value="OM">عمان</option>
                            <option value="GM">غامبيا</option>
                            <option value="GH">غانا</option>
                            <option value="GF">غويانا</option>
                            <option value="GY">غيانا</option>
                            <option value="GN">غينيا</option>
                            <option value="GQ">غينيا الاستوائية</option>
                            <option value="GW">غينيا بيساو</option>
                            <option value="VU">فانواتو</option>
                            <option value="FR">فرنسا</option>
                            <option value="PS">فلسطين</option>
                            <option value="VE">فنزويلا</option>
                            <option value="FI">فنلندا</option>
                            <option value="VN">فيتنام</option>
                            <option value="FJ">فيجي</option>
                            <option value="CY">قبرص</option>
                            <option value="KG">قرغيزستان</option>
                            <option value="QA">قطر</option>
                            <option value="KZ">كازاخستان</option>
                            <option value="NC">كاليدونيا الجديدة</option>
                            <option value="HR">كرواتيا</option>
                            <option value="KH">كمبوديا</option>
                            <option value="CA">كندا</option>
                            <option value="CU">كوبا</option>
                            <option value="KR">كوريا الجنوبية</option>
                            <option value="KP">كوريا الشمالية</option>
                            <option value="CR">كوستاريكا</option>
                            <option value="CO">كولومبيا</option>
                            <option value="KI">كيريباتي</option>
                            <option value="KE">كينيا</option>
                            <option value="LV">لاتفيا</option>
                            <option value="LA">لاوس</option>
                            <option value="LB">لبنان</option>
                            <option value="LU">لوكسمبورج</option>
                            <option value="LY">ليبيا</option>
                            <option value="LR">ليبيريا</option>
                            <option value="LT">ليتوانيا</option>
                            <option value="LI">ليختنشتاين</option>
                            <option value="LS">ليسوتو</option>
                            <option value="MQ">مارتينيك</option>
                            <option value="MO">ماكاو الصينية</option>
                            <option value="MT">مالطا</option>
                            <option value="ML">مالي</option>
                            <option value="MY">ماليزيا</option>
                            <option value="YT">مايوت</option>
                            <option value="MG">مدغشقر</option>
                            <option value="EG">مصر</option>
                            <option value="MK">مقدونيا</option>
                            <option value="MW">ملاوي</option>
                            <option value="ZZ">منطقة غير معرفة</option>
                            <option value="MN">منغوليا</option>
                            <option value="MR">موريتانيا</option>
                            <option value="MU">موريشيوس</option>
                            <option value="MZ">موزمبيق</option>
                            <option value="MD">مولدافيا</option>
                            <option value="MC">موناكو</option>
                            <option value="MS">مونتسرات</option>
                            <option value="MM">ميانمار</option>
                            <option value="FM">ميكرونيزيا</option>
                            <option value="NA">ناميبيا</option>
                            <option value="NR">نورو</option>
                            <option value="NP">نيبال</option>
                            <option value="NG">نيجيريا</option>
                            <option value="NI">نيكاراجوا</option>
                            <option value="NZ">نيوزيلاندا</option>
                            <option value="NU">نيوي</option>
                            <option value="HT">هايتي</option>
                            <option value="HN">هندوراس</option>
                            <option value="NL">هولندا</option>
                            <option value="HK">هونج كونج الصينية</option>
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
                        <span class="text-count">300 / 0</span>
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

// append


let count=1;
	 $(".add-more-program-btn").click(function () {
		 var add= `<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="city" class="form-label">اسم البرنامج</label>
            <input type="text" class="form-control" required name="authentic_program[]" id="idNumber">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="date" class="form-label">تاريخه</label>

            <input type="date" class="form-control date" required name="authentic_history[]" id="authentic_history">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="city" class="form-label">مكان إقامته</label>
            <input type="text" class="form-control" required name="authentic_place[]" id="idNumber">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city" class="form-label">الهدف</label>
            <input type="text" class="form-control" required name="authentic_history1[]" id="idNumber">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city" class="form-label"> الشريحة المستهدفة</label>
            <input type="text" class="form-control" required name="authentic_target[]" id="idNumber">
        </div>
    </div>
</div>`;
        $(".add-more-program").append(add);

 });


	 $(".add-more-upload-btn").click(function () {
		 var add= `<div class="row">
            <div class="col-md-6 padd-l-20">
    <div class="form-group upload-file">
        <label for="authentic_cv`+ count +`" class="form-label" > جهة الشهادة Pdf, jpg, png</label>

        <input class="form-control" accept="image/*" type="file" required id="download-cv-file-name`+ count +`" name="authentic_cv[]" id="candidateImage">
        <span class="upload-file-img download-cv">
            ارفاق ملف <img src="{{ asset('assets/images/cloud-upload-alt.png') }}" class="img-fluid" alt="">
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
