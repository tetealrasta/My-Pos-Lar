@extends('includes.admin.admin')
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
    <div class="col-sm-6">
        <h6>رقم البلاغ : {{$data->Blag_Number}}</h6>
    </div>
    <div class="col-sm-6">
        <h6> تاريخ البلاغ :{{$data->created_at}}</h6>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-sm-4">
        <h5><strong>إسم المتحصل</strong> : </h5>
    </div>
    <div class="col-sm-3">
        <h5><strong>عنوان المتحصل</strong> :</h5>
    </div>
    <div class="col-sm-3">
        <h5><strong>رقم هاتف المتحصل</strong> : </h5>
    </div>
    <div class="col-sm-2">
        <h5><strong>ايميل المتحصل</strong> :  </h5>
    </div>
   
</div>

<hr>
<br><br><br>
<div align="center">

    <div class="detailse">
        <table class="table">
            <thead>
                <tr>
                    <th> الوحدة الإدارية</th>
                    <th>نوع الجهاز</th>
                    <th>رقم الجهاز</th>
                     <th>نوع الجهاز</th>
                     <th>العطل الجهاز</th>

                  

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->Unit_Id}}</td>
                    <td>{{$data->Dev_Type}}</td>           
                    <td>{{$data->Devv_id}}</td>
                    <td>{{$data->company_id}}</td>
                    <td>{{$data->Type_Of_Error}}</td>
               
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
<br><br><br>
    <a href="{{$data->mo_id}}" class="btn btn-success btn-sm">تمت الصيانة <i class="fa fa-check highlight-icon" aria-hidden="true"></i></a>
</div>

@endsection