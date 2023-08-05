@extends('includes.admin.admin')
@section('title','المشرفين')
@section('content')
@section('Page-Title','صفحه المشرفين')

<style>
    label {
        font-size: 16px;
    }

    .per label {

        padding: 10px;
    }

    .ch {
        padding: 10px;

    }
</style>
<form action="{{URL('Admin\Units\store')}}" method="post">
    @csrf
    <div class="row">

        @if (session()->has("sucess"))
        <div class="alert alert-success"></div>
        @endif
        <div class="col-sm-3">
            <label for="">اسم المشرف</label>
            <input type="text" name="Unit_Name" class="form-control">

            <label for=""> User Name</label>
            <input type="text" name="Unit_Name" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">رقم المشرف</label>
            <input type="text" name="Unit_Name" class="form-control">

            <label for=""> Password</label>
            <input type="text" name="Unit_Name" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">ايميل المشرف</label>
            <input type="text" name="Unit_Name" class="form-control">
            <label for=""> الوحدة التي يشرف عليها</label>
            <select name="Cat_Status" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">DeActive</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="">عنوان المشرف</label>
            <input type="text" name="Unit_Name" class="form-control">

        </div>
    </div>


    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">


        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="per">

                <label for="">قراءة</label>
                <label for="">تعديل</label>
                <label for="">حذف</label>
                <label for="">إضافة </label>
            </div>

            <input type="checkbox" name="" class="ch" id="">
            <input type="checkbox" name="" class="" id="">
            <input type="checkbox" name="" class="" id="">
            <input type="checkbox" name="" class="" id="">



        </div>



        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">





        </div>


        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">





        </div>
    </div>
    <div class="">
        <br> <br>
        <input type="submit" value="Save" class="btn btn-success btn-sm">
    </div>
</form>

<br>
<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>اسم المشرف</td>
                <td>رقم المشرف</td>
                <td>ايميل المشرف</td>
                <td>عنوان المشرف</td>
                <td>وحدة المشرف</td>
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