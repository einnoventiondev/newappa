@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="default-according" id="accordion">
                            {{-- @if ($data->type == 2) --}}
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
                                            <h5 style="margin-left: 25%;">اسم الجھة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->orgniztionName }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">الدولة</h5>
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
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>معلومات المرشح</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">اسم الجھة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->inputName }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">الجنسية</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->inputNationality }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;"> رقم الهوية</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->idNumber }}</h5>
                                        </div>
                                    </div>



                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">نبذة عن المرشح</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->about }}</h5>
                                        </div>
                                    </div>
                                    {{-- to download cv --}}
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">نبذة عن المرشح</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5> <a href="{{ asset('storage/' . $data->passportimages) }}" download="{{ $data->passportimages }}">
                                                    <img src="{{ asset('storage/' . $data->passportimages) }}" class="size-image">
                                                </a></h5>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">تحمیل السیرة الذاتیة</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5> <a href="{{ asset('storage/' . $data->candidateImage) }}" download="{{ $data->candidateImage }}">
                                                    <img src="{{ asset('storage/' . $data->candidateImage) }}" class="size-image">
                                                </a></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @if ($data->type == 2) --}}
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
                                            <h5>مسوغات الترشیح</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapsenine" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 col-lg-6">
                                            <h5 style="margin-left: 25%;">الترشیح</h5>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6">
                                            <h5>{{ $data->relation }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
                                            <h5>تحمیل أعمال المرشح</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks) }}" download="{{ $data->publishedWorks }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @if ($data->title1 != null)
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title1 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place1 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release1 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks1) }}" download="{{ $data->publishedWorks1 }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @endif
                                @if ($data->title2 != null)
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title2 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place2}}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release2 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks2) }}" download="{{ $data->publishedWorks2 }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @endif
                                @if ($data->title3 != null)
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title3 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place3 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release3 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks3) }}" download="{{ $data->publishedWorks3 }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @endif
                                @if ($data->title4 != null)
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title4 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place4 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release4 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks4) }}" download="{{ $data->publishedWorks4 }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @endif
                                @if ($data->title5 != null)
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">عنوان الدیوان</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->title5 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;">دار النشر</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->place5 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> سنة الإصدار</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5>{{ $data->release5 }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6 col-lg-6">
                                        <h5 style="margin-left: 25%;"> التحمیل</h5>
                                    </div>
                                    <div class=" col-sm-6 col-lg-6">
                                        <h5><a href="{{ asset('storage/' . $data->publishedWorks5) }}" download="{{ $data->publishedWorks5 }}">Download</a>
                                        </h5>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> التحمیل</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5><a href="{{ asset('storage/' . $data->publishedWorks) }}" download="{{ $data->publishedWorks }}">Download</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsesaven" aria-expanded="true" aria-controls="collapsesaven">
                                    <h5>إرفاق خطاب الجھة</h5>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="collapsesaven" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <h5 style="margin-left: 25%;"> إرفاق خطاب الجھة</h5>
                                </div>
                                <div class=" col-sm-6 col-lg-6">
                                    <h5><a href="{{ asset('storage/' . $data->letter) }}" download="{{ $data->letter }}">Download</a>
                                    </h5>
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