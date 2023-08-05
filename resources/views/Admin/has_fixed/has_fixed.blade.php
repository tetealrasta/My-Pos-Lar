@extends('includes.admin.admin')
@section('title', 'أجهزه تمت صيانتها')
@section('content')
@section('Page-Title', 'صفحه الأجهزه التي تمت صيانتها')

<form action="{{ URL('Admin\Category\store') }}" method="post">
    @csrf
    <h1><?php echo csrf_token(); ?></h1>
    <div class="row">
        <form action="" method="post">
            @if (session()->has('sucess'))
                <div class="alert alert-success"></div>
            @endif
            <div class="col-sm-3">
                <label for="">جهة الجهاز</label>
                <select name="Cat_Status" id=""class="form-control">
                    <option value=""></option>
                    <option value="1">محليه كرري</option>
                    <option value="0">محليه امبده</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="">نوع الجهاز</label>
                <select name="Cat_Status" id=""class="form-control">
                    <option value=""></option>
                    <option value="1">جهاز طرفي</option>
                    <option value="0">موبايل</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="">رقم البلاغ </label>
                <input type="text" name="Cat_Name" placeholder="أكتب رقم البلاغ هنا" class="form-control">
            </div>

            <div class="col-sm-3">
                <label for=""> البحث</label>
                <div align="right">
                    <input type="submit" value="بحث عن البلاغ" class="btn btn-success btn-sm">
                </div>
            </div>
        </form>
    </div>



</form>
<br>
{{-- {{$Blags}} --}}
<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>رقم البلاغ</th>
                <th>نوع العطل</th>
                <th>رقم الجهاز</th>
                <th>تاريخ العطل</th>
                <th>جهة الجهاز</th>
                <th>طباعه</th>
                {{-- <th>تعديل</th>
                    <th>حذف</th> --}}
            </tr>
        </thead>
        <tbody>

            @foreach ($Blags as $Blag)
                <tr>
                    <td>{{ $Blag->id }}</td>
                    <td>{{ $Blag->Blag_Number }}</td>
                    <td>{{ $Blag->Type_Of_Error }}</td>
                    <td>{{ $Blag->Devv_id }}</td>
                    <td>{{ $Blag->created_at }}</td>
                    <td>{{ $Blag->Unit_Id }}</td>
                    <td><a href="{{ url('Admin/Fixed/Print/' . $Blag->id) }}"class="btn btn-primary btn-sm">طباعه
                            وصل إستلام</a></td>
                    {{-- <td><a href="{{url('Admin/Fixed/edit/'. $Blag->id)}}" class="btn btn-success btn-sm"value="{{$Blag->id}}"><i class="fa fa-edit"></i></a></td>      
                    <td><a href="{{url('Admin/Fixed/delete/'. $Blag->id)}}" class="btn btn-danger btn-sm"value="{{$Blag->id}}"><i class="fa fa-edit"></i></a></td>       --}}
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
