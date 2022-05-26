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

<form method="POST" enctype="multipart/form-data" action="{{ route('first.corporation.form') }}" class="row gx-5 gy-3 candidate-form corporate-form corporate-form1 ">
111111111111111111111111
</form>
<form method="POST" enctype="multipart/form-data" action="{{ route('second.corporation.form') }}" class="row gx-5 gy-3 candidate-form corporate-form corporate-form2 d-none">
2222222222222222
</form>


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
					@if(request()->segment(1) == 'institute6' || request()->segment(1) == 'institute7')
					<th>اسم المرشح الرباعي</th>
					<th>العمر</th>
					<th>الرقم الجامعي</th>
					<th>الإيميل الجامعي</th>
					<th>رقم التواصل</th>

					@else

					@endif
                    {{-- delete --}}
                    <th>عمل</th>




                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dat)

                <tr>
                    @if(auth()->user()->role == 'admin1')
                    @if($dat->accept == 0)
                    <td>ريثما</td>
                    @else
                    <td style="background-color: grean; color:green">وافق</td>
                    @endif
                    @endif
                    @if(auth()->user()->role == 'admin2')
                    @if($dat->accept == 1)
                    <td>ريثما</td>
                    @else
                    <td style="background-color: grean; color:green">وافق</td>
                    @endif
                    @endif
                    <td>{{ $dat->orgniztionName }}</td>
                    <td>{{ $dat->state }}</td>
                    <td>{{ $dat->phoneNumber }}</td>
                    <td>{{ $dat->inputEmail }}</td>
                    <td>{{ $dat->inputName }}</td>
                    <td>{{ $dat->relation }}</td>
                    <td>{{ $dat->title }}</td>
                    <td>{{ $dat->place }}</td>
                    <td>{{ $dat->release }}</td>
						@if(request()->segment(1) == 'institute6' || request()->segment(1) == 'institute7')
					<td>{{ $dat->fieldname }} </td>
					<td>{{ $dat->age}}</td>
					<td>{{ $dat->uni_number }}</td>
					<td>{{ $dat->uni_email }}</td>
					<td>{{ $dat->phone_number2 }}</td>

					@else

					@endif
                    <td>
                        <form method="POST" action="{{ route('delete') }}">
                            @csrf
                            <input type="text" name="id" value="{{ $dat->id }}" hidden>
                            <button type="submit" class="btn btn-danger">حذف</button>
                            <a class="btn btn-info" href="{{ route('show', $dat->id) }}">يعرض</a>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
 </script>
