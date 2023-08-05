@extends('includes.admin.admin')
@section('title','Category')
@section('content')
@section('Page-Title','صفحه الأقسام')    

<form action="{{URL('Admin\Category\store')}}" method="post">
    @csrf
<div class="row">
    
@if (session()->has("sucess"))
    <div class="alert alert-success"></div>
@endif
    <div class="col-sm-3">
        <label for="">اسم القسم</label>
        <input type="text" name="Cat_Name" class="form-control">
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
            {{-- <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>اسم القسم</td>            
                    <td>تعديل</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($Category as $cat)
                <tr>
                    
                    <td>{{$cat->Cat_Id}}</td>
                    <td>{{$cat->Cat_Name}}</td>
                    <td><button class="btn btn-success btn-sm"value="{{$cat->Cat_Id}}"><i class="fa fa-edit"></i></button></td>      
                    <td><button class="btn btn-danger btn-sm"value="{{$cat->Cat_Id}}"><i class="fa fa-edit"></i></button></td>
                </tr>
               @endforeach
            </tbody>
            </table> --}}

</div>
@endsection