@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <thead>
                <tr>
                    <!-- orgnization name  -->
                    <th>اسم الجھة</th>
                    <!-- state -->
                    <th>الدولة</th>
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
                    {{-- delete --}}
                    <th>عمل</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dat)
                <tr>
                    <td>{{ $dat->orgniztionName }}</td>
                    <td>{{ $dat->state }}</td>
                    <td>{{ $dat->phoneNumber }}</td>
                    <td>{{ $dat->inputEmail }}</td>
                    <td>{{ $dat->inputName }}</td>
                    <td>{{ $dat->relation }}</td>
                    <td>{{ $dat->title }}</td>
                    <td>{{ $dat->place }}</td>
                    <td>{{ $dat->release }}</td>
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