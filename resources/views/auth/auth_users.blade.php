@extends('layouts.Admin.app')
@section('content')
<div class="candidate-form corporate-form corporate-form1 ">
    <div class="card-body">
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <thead>
                    <tr>
                        <!-- candidtae -->
                        <th>اسم</th>
                        <th>صلاحية</th>
                        <th>البريد الإلكتروني</th>
                        <th>خيارات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{route('edit_admin',[$item->id])}}" class="view-btn"> <i class="fa fa-eye">يحرر</i></a>
                            <a href="{{route('delete_user',[$item->id])}}"><button class="btn btn-danger btn-sm"><i
                                    class="fa fa-trash-o"></i> حذف</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection