@extends('includes.admin.admin')
@section('title','المتحصل')
@section('content')
@section('Page-Title','صفحه المتحصلين')

<form action="{{URL('Admin\Mothasilen\store')}}" method="post">
    @csrf
    <div class="row">

        @if (session()->has("sucess"))
        <div class="alert alert-success"></div>
        @endif
        <div class="col-sm-3">
            <label for="">اسم المتحصل</label>
            <input type="text" name="Mo_Name" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">رقم المتحصل</label>
            <input type="text" name="Mo_Number" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">ايميل المتحصل</label>
            <input type="text" name="Mo_Email" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">عنوان المتحصل</label>
            <input type="text" name="Mo_Address" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">مستخدم المتحصل</label>
            <input type="text" name="Mo_User" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for=""> الوحدة التي يتبع إليها</label>
            <select name="Mo_Unit" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">DeActive</option>
            </select>
            <br>
            <input type="submit" value="Save" class="btn btn-success btn-sm">
        </div>
    </div>


</form>
<br>
<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>اسم المتحصل</td>
                <td>رقم المتحصل</td>
                <td>ايميل المتحصل</td>
                <td>عنوان المتحصل</td>
                <td>وحدة المتحصل</td>
                <td>تعديل</td>
                <td>حذف</td>
            </tr>
        </thead>
        <tbody>


            <tr>


                <td>1</td>
                <td>احمد علي ادم</td>
                <td>5410245421</td>
                <td>ahmed@ahmed.com</td>
                <td>امبدة الراشدين</td>
                <td>امبدة</td>
                <td><a href="#" class="btn btn-success btn-sm" value=""><i class="fa fa-edit"></i></a></td>
                <td><a href="#" class="btn btn-danger btn-sm" value=""><i class="fa fa-edit"></i></a></td>
            </tr>

        </tbody>
    </table>

</div>
@endsection