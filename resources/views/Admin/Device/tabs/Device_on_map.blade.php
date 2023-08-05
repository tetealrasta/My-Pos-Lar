@extends('includes.admin.admin')
@section('title', 'تفاصيل الأجهزة')
@section('content')
@section('Page-Title', 'تفاصيل جهاز')

<style>
    select.form-control:not([size]):not([multiple]) {
        height: calc(2.299999999999997rem + 1px) !important;
        /* border: 1px solid black; */
    }

    label {
        font-size: 16px;
    }

    #device_photo {
        float: left;
        width: 200px;
        height: 150px;
        border: 1px solid #ddd
    }

    button.f {
        border: 1px solid #ddd;
        position: absolute;
        left: 6px;
        height: 150px;
        width: 200px;
    }
</style>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">دورة حياة جهاز</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">معرفة جهاز في الخريطة</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">جميع الأجهزة على الخريطة</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form id="new_blag_Form">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="">اسم وحدة الجهاز </label>
                    <select name="Dev_Id" id="" required class="form-control">
                        <option value=""></option>

                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">شركة الجهاز</label>
                    <select name="Dev_Id" id="" required class="form-control">
                        <option value=""></option>

                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">نوع الجهاز</label>
                    <select name="Dev_Id" id="" required class="form-control">
                        <option value=""></option>

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">نوع الجهاز </label>
                    <select name="Dev_Id" id="" required class="form-control">
                        <option value=""></option>

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">الرقم التسلسلي الجهاز</label>
                    <input type="text" name="Blag_Id" required class="form-control">
                </div>
            </div>
            <div class="form-row">

            </div>

            <div class="form-group">
                <label for="">اسم المتحصل</label>
                <select name="Dev_Id" id="" required class="form-control">
                    <option value=""></option>

                </select>
            </div>


    </div>
    </form>

</div>
</div>

<br><br><br>

<div class="optionss">

    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
        بحث <i class="fa fa-plus"></i>
    </button>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
        حذف المحدد <i class="fa fa-trash"></i>
    </button>
    <br>
    <i class="fa-solid fa-triangle-exclamation"></i>
</div>
<br>
</div>
<!-- first tab -->





<!-- second tab -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>














<!-- third tab -->
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>


</div>
@endsection