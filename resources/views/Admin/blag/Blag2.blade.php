</style>
@extends('includes.admin.admin')
@section('title', 'بلاغات اليوم')
@section('content')
@section('Page-Title', 'صفحه بلاغات اليوم')

<style>
    .col-sm-7 {
        border: 1px solid #ddd;
        min-height: 100px;
        padding: 10px;
        cursor: pointer;
        position: relative;
        background-color: #fff;
        border-radius: 6px;
    }



    .un {
        position: absolute;
        top: -16px;
        right: 100px;
        background-color: #e01d1dd6;
        width: 100px;
        height: 24px;
        text-align: center;
        line-height: 25px;
        color: #fff;
    }

    label {
        /* color:
            #b444b4; */
        font-size: 15px;
    }

    h3 {
        position: absolute;
        top: -16px;
        right: 200px;
        background-color: #1d43e0d6;
        width: 100px;
        height: 24px;
        text-align: center;
        line-height: 25px;
        color: #fff;
    }

    .desc {
        color: #fff;
        margin-right: 10px;
    }

    #sear {
        position: absolute;
        top: 36px;
        height: 40px;
    }
</style>



<br>

<div class="optionss">
    <div class="row">
        <div class="form-group col-md-3">
            <h4 for="">الوحدات الإدارية</h4>
            <select name="Dev_type" id="" required class="form-control">
                <option value=""></option>
             
            </select>
        </div>
        <div class="form-group col-md-3">
            <h4 for="">من فترة</h4>
            <input type="date" class="form-control">
        </div>
        
        <!-- <div class="row"> -->


        <div class="form-group col-md-3">
            <h4 for="">الى فترة</h4>
            <input type="date" class="form-control">
        </div>
        <div class="form-group col-md-2">
            <h4 for="">نوع الإجراء</h4>
            <select name="Dev_type" id="" required class="form-control">
                <option value=""></option>
           
            </select>
        </div> 
           <!-- </div> -->

        <div class="col-sm-1">
            <button type="button" id="sear" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                [ جميع بلاغات الوحدة ]
            </button>
        </div>



    </div>


    <br>
    <i class="fa-solid fa-triangle-exclamation"></i>
</div>
<br>

<div class="row">
    <div class="col-sm-7">
        <label class="un">الوحدة الإدارية</label>
    </div>
    <div class="col-sm-5"></div>
</div>
<br>
<br>

</div>
@endsection