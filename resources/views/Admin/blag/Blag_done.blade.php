<?php
// print_r($_POST);

?>

<!-- @extends('includes.admin.admin')
@section('title', 'عرض تفاصيل البلاغ')
@section('content')

<style>
    body {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important
    }
</style>
<div align="center">
    <h1>مراجعة البلاغات</h1><br>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="">اسم القسم</label>
        <input type="text" name="Cat_Name" class="form-control">
    </div>
    <div class="col-sm-3">
        <label for="">اسم القسم</label>
        <input type="text" value="{{ $data->Blag_Number }}" name="Cat_Name" class="form-control">
    </div>
    <div class="col-sm-3">
        <label for="">اسم القسم</label>
        <input type="text" name="Cat_Name" class="form-control">
    </div>
    <div class="col-sm-3">
        <label for="">اسم القسم</label>
        <input type="text" name="Cat_Name" class="form-control">
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-sm-3">
        <h5><strong>إسم المتحصل</strong> : محمد علي كلاي</h5>
    </div>
    <div class="col-sm-4">
        <h5><strong>عنوان المتحصل</strong> : امدرمان امبده الحاره السابعه</h5>
    </div>
    <div class="col-sm-3">
        <h5><strong>رقم هاتف المتحصل</strong> : 0990124548</h5>
    </div>
    <div class="col-sm-2">
        <h5><strong>العطل</strong> : يحتاج الى تروس وورق </h5>
    </div>
</div>

<hr>
<div align="center">

    <div class="detailse">
        <table class="table  table-hover table-striper">
            <thead>
                <tr>
                    <th>رقم الجهاز</th>
                    <th>نوع الجهاز</th>
                    <th>وحده الجهاز</th>
                    <th>رقم الجهاز</th>
                    <th>نوع الجهاز</th>
                    <th>وحده الجهاز</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>65</td>
                    <td>جهاز طرفي</td>
                    <td>امبده</td>
                    <td>65</td>
                    <td>جهاز طرفي</td>
                    <td>امبده</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="#" class="btn btn-success btn-sm">تمت الصيانة</a>
</div>

@endsection -->