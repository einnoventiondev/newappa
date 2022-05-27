@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    {{--  <div class="card-header pb-0">
                        @if ($data->type == 2)
                        <h5>ترشیح مؤسسي</h5>
                        @else
                        <h5>تقدم ذاتي</h5>
                        @endif
                    </div>  --}}
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
                                            <h5>  بيانات المؤسسة</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> اسم المؤسسة   </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_company }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">  خيارات</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_options }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">اسم مدير المشروع</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_manager_name }}</h5>
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
                                            <h5 style="margin-left: 25%;">  البريد الالكتروني</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_email }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5>   مكان تفعيل المشروع</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">  الدولة   </h5>
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
                                            <h5 style="margin-left: 25%;">فكرة المشروع  </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_manager_idea }}</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <h5>     البرامج أو الفعاليات أو الأنشطة المتعلقة بالشعر العربي التي نفذها المشروع:</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsetwo" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">  اسم البرنامج   </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_program }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                تاريخه</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_history }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                مكان إقامته  </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_place }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">   الهدف   </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_history1 }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_target }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">
                                                رابط الموقع الإلكتروني للتعريف بالمشروع وأنشطته  </h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->authentic_link }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>



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
                                            <img src="{{  asset('authentic/image/' . $data->authentic_cv) }}" alt="image" class="card-img">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> جهة الشهادة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <img src="{{  asset('authentic/image/' . $data->authentic_cv1) }}" alt="image" class="card-img">

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> جهة الشهادة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <img src="{{  asset('authentic/image/' . $data->authentic_cv2) }}" alt="image" class="card-img">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> جهة الشهادة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <img src="{{  asset('authentic/image/' . $data->authentic_cv3) }}" alt="image" class="card-img">
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
@endsection
