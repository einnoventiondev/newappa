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
                                @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2")
                                <form method="post" action="{{url('behalf/'.$data->id)}}">
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
                                @endif
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5>لأفضل مشروع في خدمة الشعر العربي </h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المرشح</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_candidate_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">خيارات</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_options }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المشروع </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">نوعه</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_type }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> تاريخ الانطلاق </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_date }}</h5>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> بيانات المؤسسة</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المؤسسة </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_company_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> خيارات</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_options1 }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">اسم مدير المشروع</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_project }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                رقم التواصل </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_number }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> البريد الالكتروني</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_email }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> مكان تفعيل المشروع</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> الدولة </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_country }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                المدينة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_city }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">فكرة المشروع </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->behalf_about }}</h5>
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
            reverseButtons: 0,
        }).then(function(e) {
            if (e.value === true) {
                let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `/behalf/` + id;
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