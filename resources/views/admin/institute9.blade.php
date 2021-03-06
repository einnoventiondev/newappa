@extends('layouts.Admin.app')
@section('content')

<!--<div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input authentic-radio" checked type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                أصالة
            </label>
        </div>
    </div>  -->

<div  class="candidate-form corporate-form corporate-form1 ">
    <div class="card-body">

        <div class="table-responsive product-table">

            <table class="display" id="example">
                <thead>
                    <tr>

                        <!-- candidtae -->
                        <th>اسم الجھة</th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> الدولة</th>
                        <!-- state -->
                        <th>رقم التواصل</th>
                        <!-- phone -->
                        <th>الإیمیل الرسمي</th>
                        <!-- emial -->
                        <th> الاسم الرباعي</th>
                        <!-- candidtae -->
                        <th>الجنسية </th>
                        <!-- relation -->
                        <th>رقم الهوية</th>
                        <!-- title -->
                        <th>نبذة عن المرشح</th>
                        <!-- place -->
                        <th> الترشیح</th>
                        <!-- release -->



                        {{-- delete --}} 
                        <th>عمل</th>




                    </tr> 
                </thead>
                <tbody>
                    @foreach ($competitions as $corporate)
                    @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2" ||  $corporate->accept)
                    <tr>
                        <td>{{ $corporate->orgniztionName }}</td>
                        <td>{{ $corporate->state }}</td>
                        <td>{{ $corporate->phoneNumber }}</td> 
                        <td>{{ $corporate->inputEmail }}</td>
                        <td>{{ $corporate->inputName }}</td>
                        <td>{{ $corporate->inputNationality }}</td>
                        <td>{{ $corporate->idNumber }}</td>
                        <td>{{ $corporate->about }}</td>
                        <td>{{ $corporate->relation }}</td> 


                        <td>
                           
                            <a href="{{ route('show.singing',$corporate) }}" class="view-btn"> <i class="fa fa-eye"></i></a>
                            {{--  <a href="{{ route('delete.corporate', $corporate)}}" class="delete-btn"><i class="fa fa-trash-o" style="color:red"></i></a>  --}}
                            @if(auth()->user()->role == 'admin1')
                            <form action="{{ route('delete.corporate',$corporate)}}" method="post"  accept-charset="UTF-8" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                             </form>
                             @endif
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
