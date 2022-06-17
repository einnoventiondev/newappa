@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <thead>
                <tr>

                    <!-- candidtae -->
                    <th>اسم المرشح الرباعي</th>
                    <!-- Nationality -->
                    <th>الجنسیة</th>
                    <!-- idnummber -->
                    <th>رقم الھویة</th>
                    <!-- about -->
                    <th>نبذة عن المرشح:</th>
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
                    <td>{{ $dat->inputName }}</td>
                    <td>{{ $dat->inputNationality }}</td>
                    <td>{{ $dat->idNumber }}</td>
                    <td>{{ $dat->about }}</td>
                    <td>{{ $dat->title }}</td>
                    <td>{{ $dat->place }}</td>
                    <td>{{ $dat->release }}</td>

                    <td>
                        <form method="POST" action="{{ route('delete') }}">
                            @csrf
                            <input type="text" name="id" value="{{ $dat->id }}" hidden>
                            <button type="submit" class="btn btn-danger">حذف</button>

                            <a class="btn btn-info" href="{{ route('show2', $dat->id) }}">يعرض</a>


                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection