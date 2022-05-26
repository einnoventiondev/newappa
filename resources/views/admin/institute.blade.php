@extends('layouts.Admin.app')
@section('content')

<div class="col-md-12">
    <div class="radio-btn radio-main">
        <label for="inputName" class="form-label filter-txt">المرشح</label>
        <div class="form-check">
            <input class="form-check-input authentic-radio" checked type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                أصالة
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input behalf-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                نيابة
            </label>
        </div>
    </div>
</div>

<form method="POST" enctype="multipart/form-data"  class="row gx-5 gy-3 candidate-form corporate-form corporate-form1 ">
    <div class="card-body">
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <thead>
                    <tr>

                        <!-- candidtae -->
                        <th>اسم المشروع</th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> نوعه </th>
                        <!-- state -->
                        <th>تاريخ الانطلاق </th>
                        <!-- phone -->
                        <th> ادارة المشروع</th>
                        <!-- emial -->
                        <th> اسم المؤسسة</th>
                        <!-- candidtae -->
                        <th>خيارات  </th>
                        <!-- relation -->
                        <th>مسوغات الترشیح:</th>
                        <!-- title -->
                        <th>عنوان الدیوان</th>
                        <!-- place -->
                        <th>دار النشر</th>
                        <!-- release -->
                        <th>سنة الإصدار</th>

                        <th>اسم المرشح الرباعي</th>
                        <th>العمر</th>
                        <th>الرقم الجامعي</th>
                        <th>الإيميل الجامعي</th>
                        <th>رقم التواصل</th>
                        {{-- delete --}}
                        <th>عمل</th>




                    </tr>
                </thead>
                <tbody>
                    @foreach ($corporate1 as $corporate)

                    <tr>
                        <td>{{ $corporate->authentic_name }}</td>
                        <td>{{ $corporate->authentic_type }}</td>
                        <td>{{ $corporate->authentic_date }}</td>
                        <td>{{ $corporate->authentic_project }}</td>
                        <td>{{ $corporate->authentic_options }}</td>
                        <td>{{ $corporate->authentic_manager_name }}</td>
                        <td>{{ $corporate->authentic_contact }}</td>
                        <td>{{ $corporate->authentic_email }}</td>
                        <td>{{ $corporate->authentic_country }}</td>
                        <td>{{ $corporate->authentic_city }} </td>
                        <td>{{ $corporate->authentic_idea}}</td>
                        <td>{{ $corporate->authentic_program }}</td>
                        <td>{{ $corporate->authentic_history }}</td>
                        <td>{{ $corporate->authentic_place }}</td>
                        <td>
                            <a href="" class="view-btn"> <i class="fa fa-eye"></i></a>
                            <a href="" class="delete-btn"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>
<form method="POST" enctype="multipart/form-data"  class="row gx-5 gy-3 candidate-form corporate-form corporate-form2 d-none">
    <div class="card-body">
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <thead>
                    <tr>

                        <!-- candidtae -->
                        <th>حالة</th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th>اسم الجھة</th>
                        <!-- state -->
                        <th>المدينة </th>
                        <!-- phone -->
                        <th>رقم التواصل</th>
                        <!-- emial -->
                        <th>الإیمیل الرسمي</th>
                        <!-- candidtae -->
                        <th>اسم المرشح الرباعي</th>
                        <!-- relation -->
                        <th>مسوغات الترشیح:</th>
                        <!-- title -->
                        <th>عنوان الدیوان</th>
                        <!-- place -->
                        <th>دار النشر</th>
                        <!-- release -->
                        <th>سنة الإصدار</th>

                        <th>اسم المرشح الرباعي</th>
                        <th>العمر</th>
                        <th>الرقم الجامعي</th>
                        <th>الإيميل الجامعي</th>
                        <th>رقم التواصل</th>
                        {{-- delete --}}
                        <th>عمل</th>




                    </tr>
                </thead>
                <tbody>
                    @foreach ($corporate2 as $corporate)

                    <tr>


                        <td>{{ $corporate->behalf_candidate_name }}</td>
                        <td>{{ $corporate->behalf_options }}</td>
                        <td>{{ $corporate->behalf_name }}</td>
                        <td>{{ $corporate->behalf_type }}</td>
                        <td>{{ $corporate->behalf_date }}</td>
                        <td>{{ $corporate->behalf_company_name }}</td>
                        <td>{{ $corporate->behalf_options1 }}</td>
                        <td>{{ $corporate->behalf_project }}</td>
                        <td>{{ $corporate->behalf_number }}</td>

                        <td>{{ $corporate->behalf_email }} </td>
                        <td>{{ $corporate->behalf_country}}</td>
                        <td>{{ $corporate->behalf_city }}</td>

                        <td>
                            <a href="" class="view-btn"> <i class="fa fa-eye"></i></a>
                            <a href="" class="delete-btn"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>



@endsection
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
});
 </script>
