@extends('includes.admin.admin')
@section('title','Problems')
@section('content')
@section('Page-Title','صفحه الأعطال')    

<form action="{{URL('Admin\Problems\store')}}" method="post">
    @csrf
<div class="row">
    
@if (session()->has("sucess"))
    <div class="alert alert-success"></div>
@endif
    <div class="col-sm-3">
        <label for="">اسم العطل</label>
        <input type="text" name="Problem_Name" class="form-control">
    </div>
    <div class="col-sm-6">
        {{-- <input type="hidden" name="_token()" value="{{csrf_token()}}"> --}}
        {{-- <label for="">Category Status</label>
        <select name="Cat_Status" id=""class="form-control">
            <option value="1">Active</option>
            <option value="0">DeActive</option>
        </select> --}}
        {{-- <input type="submit" value="Save" class="btn btn-success"> --}}
    </div>
</div>

    <br>
    <div align="right">
    <input type="submit" value="Save" class="btn btn-success btn-sm">
    </div>
</form>
<br>

<div class="table-responsive">
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>اسم القسم</td>
                    {{-- <td>Category Status</td> --}}
                    <td>تعديل</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($Problems as $Prob)
                <tr>
                    <td>{{$Prob->Problem_Id}}</td>
                    <td>{{$Prob->Problem_Name}}</td>
                    <td><a href="{{url('Admin/Problem/edit/'. $Prob->Problem_Id)}}" class="btn btn-success btn-sm"value="{{$Prob->Problem_Id}}"><i class="fa fa-edit"></i></a></td>      
                    <td><a href="{{url('Admin/Problem/delete/'. $Prob->Problem_Id)}}" class="btn btn-danger btn-sm"value="{{$Prob->Problem_Id}}"><i class="fa fa-edit"></i></a></td>      
               </tr>
               @endforeach
            </tbody>
            </table>

</div>
@endsection