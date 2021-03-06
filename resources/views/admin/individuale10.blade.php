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
                    </div>  
                    <div class="card-body">
                        
                     
                        <div class="default-according" id="accordion">

                            <div class="card">
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
                                            <h5 style="margin-left: 25%;"> اسم الجھة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->orgniztionName }}</h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 col-lg-6">
                    <h5 style="margin-left: 25%;">
                        الدولة</h5>
                </div>
                <div class=" col-sm-6 col-lg-6">
                    <h5>{{ $data->state }}</h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 col-lg-6">
                    <h5 style="margin-left: 25%;"> رقم التواصل</h5>
                </div>
                <div class=" col-sm-6 col-lg-6">
                    <h5>{{ $data->phoneNumber }}</h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 col-lg-6">
                    <h5 style="margin-left: 25%;">الإیمیل الرسمي</h5>
                </div>
                <div class=" col-sm-6 col-lg-6">
                    <h5>{{ $data->inputEmail }}</h5>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">

        <div class="card">
            <!-- @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2")
            <form action="{{url('status/'.$data->id)}}" method="post">
                @method('PUT')
                @csrf
                @if($data->accept == '0')
                <button class="btn btn-success" type="submit" onclick="myFunction()">يوافق</button>
                @endif
                @if($data->accept == '1')
                <button type="submit" class="btn btn-danger" onclick="fun()">رفض</button>
                @endif
            </form>
            @endif -->
            @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2")
            <form method="post" action="{{url('status/'.$data->id)}}">


                @csrf
                <input type="hidden" value="{{$data->id}}" id="hidden">
                @if($data->accept == '0')
                <button class="btn btn-success" type="button" class="btn" onclick="return deleteConfirmation(<?php echo $data->id ?>);" id="popupModal">اعتماد</button>
                @endif
                @if($data->accept == '1')
                <button type="submit" class="btn btn-danger">رفض</button>
                @endif
            </form>
            @endif
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            <h5> معلومات المرشح</h5>
                        </button>
                    </h5>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;"> الاسم الرباعي </h5>
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
                        <h5 style="margin-left: 25%;"> رقم الهوية </h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $data->idNumber }}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            نبذة عن المرشح </h5>
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
                        <h5><img src="{{$data->passportimages != null ? url('uploads/passportimages/'.$data->passportimages) : asset('uploads/test.png')}}" width="70px" class="img-popup" data-bs-toggle="modal" data-bs-target="#myModal"></h5>
                        <a type="button" class="btn btn-primary" href="{{ url('uploads/passportimages/'.$data->passportimages)}}" download>Download</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;"> تحمیل السیرة الذاتیة </h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5><img src="{{ url('uploads/candidateImage/'.$data->candidateImage)}}" width="70px" class="img-popup" data-bs-toggle="modal" data-bs-target="#myModal"></h5>
                        <a type="button" class="btn btn-primary" href="{{ url('uploads/candidateImage/'.$data->candidateImage)}}" download>Download</a>
                    </div>
                </div>
            </div>
            <div class="card">

                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            <h5> تحمیل أعمال المرشح</h5>
                        </button>
                    </h5>
                </div>

            </div>
            @foreach($field as $item)
            <div class="card">
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;"> عنوان الدیوان </h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $item->title }}</h5>
                    </div>
                </div>
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

                        <h5> <a href="{{ url('uploads/publishedWorks/'.$item->publishedWorks)}}" download>{{$item->publishedWorks}}</a></h5>
                    </div>
                </div>

                @endforeach

                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            القصيدة المغناة</h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $data->sung_poem  }}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            اسم المطرب</h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $data->singer_name  }}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            اسم الملحن</h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $data->composer_name  }}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            تاريخ التسجيل</h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>{{ $data->date_of_registration  }}</h5>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-6">
                        <h5 style="margin-left: 25%;">
                            تحميل الأغنية</h5>
                    </div>
                    <div class=" col-sm-6 col-lg-6">
                        <h5>
                            @if(!empty($data->song))
                            <a href="{{ url('uploads/songs/'.$data->song)}}" download>Download File</a>
                            @else
                            <span>No File Available</span>
                            @endif
                        </h5>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div>


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

<!-- JQUERY LINK -->
<script src="{{ asset('assets1/js/jquery-3.5.1.min.js') }}"></script>
<!-- POPUP's CDN  -->
<script src=https://cdn.jsdelivr.net/npm/sweetalert2@11></script>

<script>
    function deleteConfirmation(id) {
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
                let _url = `/status/` + id;
                // alert(_url);
                $.ajax({
                    type: 'POST',
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
                        swal.fire("Error", 'هناك خطأ ما', "error");
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
@endsection