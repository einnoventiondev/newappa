@extends('layouts.Admin.app')
@section('content')
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