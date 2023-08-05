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





<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-cycle-tab" data-toggle="tab" data-target="#nav-cycle" type="button" role="tab" aria-controls="nav-cycle" aria-selected="true">دورة حياة الجهاز</button>
        <button class="nav-link" id="nav-Device_on_map-tab" data-toggle="tab" data-target="#nav-Device_on_map" type="button" role="tab" aria-controls="nav-Device_on_map" aria-selected="false">متابعة جهاز في الخريطة</button>
        <button class="nav-link" id="nav-All_Devices_on_map-tab" data-toggle="tab" data-target="#nav-All_Devices_on_map" type="button" role="tab" aria-controls="nav-All_Devices_on_map" aria-selected="false">متابعة جميع الأجهزة على الخريطة</button>
    </div>
</nav>


<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-cycle" role="tabpanel" aria-labelledby="nav-cycle-tab">
        <br>
        <h3>دورة حياة الجهاز</h3>
        <br>
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
            <a class="btn btn-info" href="#">بحث عن بيانات الجهاز</a>
        </form>
    </div>





    <div class="tab-pane fade" id="nav-Device_on_map" role="tabpanel" aria-labelledby="nav-Device_on_map-tab">
        <br>
        <h3> جهاز على الخريطة </h3>
        <br>

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
            <a class="btn btn-success" href="#">بحث عن بيانات الجهاز</a>
        </form>


    </div>

    <div class="tab-pane fade" id="nav-All_Devices_on_map" role="tabpanel" aria-labelledby="nav-All_Devices_on_map-tab">

        <br>
        <h3>جميع الأجهزة على الخريطة </h3>
        <br>


        <div class="card">
            <div class="card-header">
                <h4>test</h4>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline__wrap">
                        <div class="timeline__items">

                            <div class="timeline__item">

                                <h3></h3>
                                <div class="timeline__content">
                                    <h3></h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>







@endsection