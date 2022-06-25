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

                                <!-- @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2")
                                <form action="{{ url('authenticity_single/'.$data->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    @if($data->accept == '0')
                                    <button class="btn btn-success" type="submit" onclick="myFunction()">يوافق </button>
                                    @endif
                                    @if($data->accept == '1')
                                    <button type="submit" class="btn btn-danger" onclick="fun()">رفض </button>
                                    @endif
                                </form>
                                @endif -->
                                @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2")
                                <form method="post" action="{{url('authenticity_single/'.$data->id)}}">


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
                                            <h5>لأفضل مشروع في خدمة الشعر العربي</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المشروع</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">نوعه</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_type }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> تاريخ الانطلاق </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_date }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> ادارة المشروع</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_project }}</h5>
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5> بيانات مدير المشروع</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> الاسم </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_company }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> العمر</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_age }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">رقم الهوية </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_contact }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                الجنسية </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_options }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                رقم التواصل </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_contact }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> البريد الالكتروني</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_email }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> الحالة</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->authentic_condition }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> في حال اختيار أخرى يرجى ذكرها</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_choose }}</h5>
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
                                    <h5>{{ $data->authentic_country }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        المدينة</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_city }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">فكرة المشروع </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_idea }}</h5>
                                </div>
                            </div>

                        </div>
                    </div>


                    @foreach($data->authentic_program as $key => $authentic_data )
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    <h5> البرامج أو الفعاليات أو الأنشطة المتعلقة بالشعر العربي التي نفذها المشروع:</h5>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">

                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> اسم البرنامج </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $authentic_data }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        تاريخه</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_history[$key] ?? ' ' }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        مكان إقامته </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_place[$key] ?? ' '  }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> الهدف </h5>
                                </div>

                                <div class=" col-sm-6 col-lg-6">
                                    <!-- Error Resolved of array's offset by using ternary operator and a null string -->
                                    <h5>{{ $data->authentic_history1[$key] ?? ' ' }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">الشريحة المستهدفة</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_target[$key] ?? ' ' }}</h5>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;">
                                        رابط الموقع الإلكتروني للتعريف بالمشروع وأنشطته </h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5>{{ $data->authentic_link }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @foreach($data->authentic_cv as $key => $image1)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
                                    <h5> شهادات حصل عليها المشروع </h5>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="collapseeight" aria-labelledby="headingOne" data-bs-parent="#accordion">


                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> جهة الشهادة</h5>
                                </div>

                                <div class=" col-sm-6 col-lg-6">

                                    <h5> <img src="{{  $image1 != ' ' ? asset('authentic/image/' . $image1) : asset('uploads/test.png') }}" alt="image" width="70px" class="img-popup" data-bs-toggle="modal" data-bs-target="#myModal"></h5>

                                    <a class="btn btn-primary" href="{{  asset('authentic/image/' . $image1) }}" download>Download</a>
                                </div>
                            </div>



                        </div>
                    </div>

                    @endforeach

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

<!-- modal -->


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
                let _url = `/authenticity_single/` + id;
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
                            // swal.fire("Done!", resp.message, "success", {
                            //     showConfirmButton: false,
                            //     className: "confirmButton",
                            // });
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