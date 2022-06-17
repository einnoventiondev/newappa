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



                        {{-- delete --}}
                        <th>عمل</th>




                    </tr>
                </thead>
                <tbody>
                    @foreach ($corporate1 as $corporate)
                    @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2" || $corporate->accept)
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


                        <td>
                            <a href="{{ route('show.individual3',$corporate) }}" class="view-btn"> <i class="fa fa-eye"></i></a>
                            {{--  <a href="{{ route('delete.corporate', $corporate)}}" class="delete-btn"><i class="fa fa-trash-o" style="color:red"></i></a>  --}}
                            <form action="{{ route('delete.corporate9', $corporate)}}" method="post"  accept-charset="UTF-8" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                             </form>
                        </td>
                    </tr>
                    @endif
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

                        <th> اسم المرشح</th>
                        <th> خيارات</th>
                        <th> اسم المشروع </th>
                        <th> نوعه</th>
                        <th>  تاريخ الانطلاق</th>
                        <th>  اسم المؤسسة</th>
                        <th>  خيارات</th>
                        <th> اسم مدير المشروع</th>
                        <th> رقم التواصل</th>



                        <th>عمل</th>




                    </tr>
                </thead>
                <tbody>
                    @foreach ($corporate2 as $corporate)
                    @if(auth()->user()->role == 'admin1' || $corporate->accept)

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




                        <td> 
                            <a href="{{ route('show.corporate2',$corporate) }}" class="view-btn"> <i class="fa fa-eye"></i></a>
                            {{--  <a href="{{ route('delete.corporate2', $corporate)}}" class="delete-btn"><i class="fa fa-trash-o" style="color:red"></i></a>  --}}
                            <form action="{{ route('delete.corporate2', $corporate)}}" method="post"  accept-charset="UTF-8" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                             </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
