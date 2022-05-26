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
                        <th>اسم مدير المشروع :</th>
                        <!-- title -->
                        <th>رقم التواصل </th>
                        <!-- place -->
                        <th> البريد الالكتروني</th>
                        <!-- release -->
                        <th>الدولة </th>

                        <th>  المدينة</th>
                        <th>فكرة المشروع</th>
                        <th> اسم البرنامج</th>
                        <th> تاريخه</th>
                        {{-- delete --}}
                        <th>عمل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($individual1 as $individual)
                    <tr>

                        <td>{{ $individual->authentic_name }}</td>
                        <td>{{ $individual->authentic_type }}</td>
                        <td>{{ $individual->authentic_date }}</td>
                        <td>{{ $individual->authentic_project }}</td>
                        <td>{{ $individual->authentic_company }}</td>
                        <td>{{ $individual->authentic_options }}</td>
                        <td>{{ $individual->authentic_contact }}</td>
                        <td>{{ $individual->authentic_email }}</td>
                        <td>{{ $individual->authentic_condition }}</td>
                        <td>{{ $individual->authentic_choose }}</td>
                        <td>{{ $individual->authentic_country }}</td>
                        <td>{{ $individual->authentic_city }}</td>
                        <td>{{ $individual->authentic_idea }}</td>
                        <td>{{ $individual->authentic_program }}</td>
                        <td>{{ $individual->authentic_history }}</td>
                        <td>{{ $individual->authentic_place }}</td>
                        <td>{{ $individual->authentic_history1 }}</td>
                        <td>
                            <a href="" class="view-btn"> <i class="fa fa-eye"></i></a>
                            <a href="" class="delete-btn"><i class="far fa-trash-alt"></i></a>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class=" candidate-form corporate-form corporate-form2 d-none">

    <div class="card-body">
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <thead>
                    <tr>
                        <!-- candidtae -->
                        <th> اسم المرشح</th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> خيارات</th>
                        <!-- state -->
                        <th> اسم المشروع </th>
                        <!-- phone -->
                        <th> نوعه</th>
                        <!-- emial -->
                        <th>  تاريخ الانطلاق</th>
                        <!-- candidtae -->
                        <th>  اسم المؤسسة</th>
                        <!-- relation -->
                        <th>  خيارات</th>
                        <!-- title -->
                        <th> اسم مدير المشروع</th>
                        <!-- place -->
                        <th> رقم التواصل</th>
                        <!-- release -->
                        <th> البريد الالكتروني</th>

                        <th>  الدولة</th>
                        <th> المدينة</th>
                        <th> فكرة المشروع</th>

                        <th>رقم التواصل</th>
                        {{-- delete --}}
                        <th>عمل</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($individual2 as $individual)
                    <tr>

                        <td>{{ $individual->behalf_candidate_name }}</td>
                        <td>{{ $individual->behalf_options }}</td>
                        <td>{{ $individual->behalf_name }}</td>
                        <td>{{ $individual->behalf_type }}</td>
                        <td>{{ $individual->behalf_date }}</td>
                        <td>{{ $individual->behalf_country }}</td>
                        <td>{{ $individual->behalf_city }}</td>
                        <td>{{ $individual->behalf_about }}</td>

                        <td>
                            <a href="" class="view-btn"> <i class="fa fa-eye"></i></a>
                            <a href="" class="delete-btn"><i class="far fa-trash-alt"></i></a>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



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












