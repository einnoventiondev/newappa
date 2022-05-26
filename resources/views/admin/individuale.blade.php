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
@endsection
