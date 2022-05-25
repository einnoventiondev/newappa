@extends('layouts.Admin.app')
@section('content')
<div class="card-body">
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <thead>
                <tr>
                    <!-- candidtae -->
                    <th>ID</th>
                    <!-- candidtae -->
                    <th>Name</th>
                    <!-- Nationality -->
                    <th>Email</th>
                    <!-- idnummber -->
                    <th>Phone</th>
                    <!-- about -->
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $data)
                <tr>

                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->message }}</td>

                    {{-- <td>
                        <form method="POST" action="{{ route('delete') }}">
                            @csrf
                            <input type="text" name="id" value="{{ $dat->id }}" hidden>
                            <button type="submit" class="btn btn-danger">حذف</button>
                            <a class="btn btn-info" href="{{ route('show', $dat->id) }}">يعرض</a>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
