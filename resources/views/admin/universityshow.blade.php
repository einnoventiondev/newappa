@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    {{-- <div class="card-header pb-0">
                        @if ($data->type == 2)
                        <h5>ترشیح مؤسسي</h5>
                        @else
                        <h5>تقدم ذاتي</h5> 
                        @endif
                    </div>  --}}
                    <div class="card-body">
                        <div class="default-according" id="accordion">


                            <div class="card">

                                <form action="{{url('unistatus/'.$data->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" value="{{$data->id}}" id="hidden">
                                    @if($data->accept == '0')
                                    <button class="btn btn-success" type="button" class="btn" onclick="return deleteConfirmation(<?php echo $data->id ?>);" id="popupModal">اعتماد</button>
                                    @endif
                                    @if($data->accept == '1')
                                    <button type="submit" class="btn btn-danger">رفض</button>
                                    @endif
                                </form>
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5>معلومات الجھة المرشحة</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم الجامعة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->orgniztionName }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                المدينة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->state }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> المنسق من قبل الجامعة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->fieldname }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                رقم التواصل</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->phoneNumber }}</h5>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">الإيميل الرسمي</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->inputEmail }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> معلومات المرشح</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المرشح الرباعي </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->inputName }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> الجنسية</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->inputNationality }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> العمر</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->age }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                رقم الهوية (للسعودي) والجواز لغير السعودي</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->idNumber }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> الرقم الجامعي</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->uniNumber }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> الإيميل الجامعي </h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->uniEmail }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> رقم التواصل </h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->phoneNumber2 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> نبذة عن المرشح</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->about }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> رفع صورة جواز السفر أو الھویة</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><img src="{{ url('uploads/passportimages/'.$data->passportimages)}}" width="70px" class="img-popup" data-bs-toggle="modal" data-bs-target="#myModal"></h5>
                                        <a class="btn btn-primary" href="{{ url('uploads/passportimages/'.$data->passportimages)}}" download>Download</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> تحميل السيرة الذاتية</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><img src="{{ url('uploads/candidateImage/'.$data->candidateImage)}}" width="70px" class="img-popup" data-bs-toggle="modal" data-bs-target="#myModal"></h5>
                                        <a class="btn btn-primary" href="{{ url('uploads/candidateImage/'.$data->candidateImage)}}" download>Download</a>
                                    </div>
                                </div>
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> مسوغات الترشیح</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">
                                            الترشیح</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->relation }}</h5>
                                    </div>
                                </div>

                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> تحمیل القصيدة الشعرية</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل </h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ url('uploads/publishedWorks/'.$data->publishedWorks)}}">{{$data->publishedWorks }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @foreach($field as $item)
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> عنوان الدیوان </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $item->title }}</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> دار النشر </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $item->place }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        سنة الإصدار</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $item->release }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        التحمیل </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5><a href="{{ url('uploads/publishedWorks/'.$item->publishedWorks)}}">{{$item->publishedWorks }}</a>
                                    </h5>

                                </div>
                            </div>

                            @endforeach
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                        <h5> إرفاق خطاب الجھة</h5>
                                    </button>
                                </h5>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> ترفق الجهة خطاب الترشيح على ورق رسمي باستخدام الماسح
                                        الضوئي
                                        مصدقا بالختم الرسمي للجهة </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5><a href="{{ url('uploads/letter/'.$data->letter)}}">{{ $data->letter }}</a></h5>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<!-- JQUERY LINK -->
<script src="{{ asset('assets1/js/jquery-3.5.1.min.js') }}"></script>
<!-- POPUP's CDN  -->
<script src=https://cdn.jsdelivr.net/npm/sweetalert2@11></script>

<script>
    function deleteConfirmation(id) {
        // alert(id);
        swal.fire({
            title: 'هل أنت متأكد؟',
            icon: 'question',
            iconHtml: '؟',
            confirmButtonText: 'نعم',
            cancelButtonText: 'إغلاق',
            showCancelButton: true,
            showCloseButton: true,
            buttons: false,
            reverseButtons: 0,
        }).then(function(e) {
            if (e.value === true) {
                let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `/unistatus/` + id;
                // alert(_url);
                $.ajax({
                    type: 'PUT',
                    url: _url,
                    data: {
                        _token: token
                    },
                    success: function(resp) {
                        if (resp.success) {
                            swal.fire("لقد وافقت بنجاح");
                            location.reload();
                        } else {
                            swal.fire("Error", 'هناك خطأ ما', "error");
                        }
                    },
                    error: function(resp) {
                        swal.fire("Error!", 'هناك خطأ ما', "error");
                    }
                });

            } else {
                e.dismiss;
            }

        }, function(dismiss) {
            return false;
        })
    }
</script>
<!-- modal -->
<div class="modal fade img-modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <button class="btn-close theme-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
            <img class="img-fluid modal-image" src="" alt="">
        </div>
    </div>
</div>
</div>
<!-- modal -->
@endsection