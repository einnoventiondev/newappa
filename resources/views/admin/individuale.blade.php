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

<div  class="candidate-form corporate-form corporate-form1 ">
    <div class="card-body">

        <div class="table-responsive product-table">

            <table class="display" id="example">
                <thead>
                    <tr>

                        <!-- state -->
                        <th> اسم المشروع </th>
                        <!-- phone -->
                        <th> نوعه</th>
                        <!-- emial -->
                        <th>  تاريخ الانطلاق</th>
                        <!-- candidtae -->
                        <th>   ادارة المشروع</th>
                        <!-- relation -->
                        <th>  الاسم</th>
                        <!-- title -->
                        <!-- release -->
                        <th>  الجنسية</th>
                        <!-- place -->
                        <th>   رقم التواصل</th>
                        <th>  البريد الالكتروني</th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> الدولة</th>
                        <th> المدينة</th>
                        <th>   فكرة المشروع</th>
                        <th>  اسم البرنامج</th>
                        <th> تاريخه</th>
                        <!-- candidtae -->
                        <th>   مكان إقامته    </th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> الهدف</th>
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
</div>

<div class="candidate-form corporate-form corporate-form2 d-none">
    <div class="card-body">

        <div class="table-responsive product-table">

            <table class="display" id="datatable2">
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
                        <th>   الدولة</th>
                        <!-- relation -->
                        <th>  المدينة</th>
                        <!-- title -->
                        <th>   فكرة المشروع</th>
                         <th> رابط الموقع الإلكتروني للتعريف بالمشروع وأنشطته</th>
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
                        <td>{{ $individual->behalf_site }}</td>

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


























































