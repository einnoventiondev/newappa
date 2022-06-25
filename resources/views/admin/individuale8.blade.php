

@extends('layouts.Admin.app')
@section('content')



<div  class="candidate-form corporate-form corporate-form1 ">
    <div class="card-body">

        <div class="table-responsive product-table">

            <table class="display" id="example">
                <thead>
                    <tr>

                        <!-- candidtae -->
                        <th> الاسم الرباعي</th>
						<th>البريد الإلكتروني</th>
                        <th>رقم الهاتف  </th>
                        <!-- candidtae -->
                        <!-- orgnization name  -->
                        <th> الجنسية</th>
                        <!-- state -->
                        <th> رقم الهوية</th>
                        <!-- phone -->
                        <th> نبذة عن المرشح</th>
                        <!-- emial -->
                        <th>  عنوان الدیوان</th>
                        <!-- candidtae -->
                        <th>دار النشر  </th>
                        <!-- relation -->
                        <th> سنة الإصدار</th>
                        <!-- title -->
                        <!-- <th>نبذة عن المرشح</th> -->
                        <!-- place -->
                        <!-- <th> الترشیح</th> -->
                        <!-- release -->



                        {{-- delete --}}
                        <th>عمل</th>




                    </tr>
                </thead>
                <tbody>
                  @foreach ($competitions as $corporate)

                    {{--  @dd($corporate);  --}}
                    @if(auth()->user()->role == "admin1" || auth()->user()->role == "admin2" || $corporate->accept)

                    <tr>
                        <td>{{ $corporate->inputName ?? ' ' }}</td>
						  <td>{{ $corporate->inputEmail ?? ' ' }}</td>
                        <td>{{ $corporate->phoneNumber ?? ' '}}</td>
                        <td>{{ $corporate->inputNationality ?? ' '}}</td>
                        <td>{{ $corporate->idNumber ?? ' '}}</td>
                        <td>{{ $corporate->about ?? ' '}}</td>
                        <td>{{ $corporate->formfield->title ?? ' '}}</td>
                        <td>{{ $corporate->formfield->place ?? ' '}}</td>
                        <td>{{ $corporate->formfield->release ?? ' ' }}</td>
                        <!-- <td>{{ $corporate->about }}</td> -->
                        <!-- <td>{{ $corporate->relation }}</td> -->


                        <td>
                         
                            <a href="{{ route('show.corporate1',$corporate) }}" class="view-btn"> <i class="fa fa-eye"></i></a>
                            {{--  <a href="{{ route('delete.corporate', $corporate)}}" class="delete-btn"><i class="fa fa-trash-o" style="color:red"></i></a>  --}}
                            @if(auth()->user()->role == 'admin1')
                            <form action="{{ route('delete.corporate', $corporate)}}" method="post"  accept-charset="UTF-8" style="display:inline">
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
