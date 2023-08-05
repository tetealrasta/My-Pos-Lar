<style>
   
</style>
@extends('includes.admin.admin')
@section('title', 'صرف الأجهزة')
@section('Page-Title', 'صفحه صرف الأجهزة')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>إجراءات طلب جهاز</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>نوع الجهاز</th>
                                    <th>العدد المتبقي منه في المخزن</th>
                                    <th>إضافة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>جهاز طرفي</td>
                                    <td>18,000</td>
                                    <td><button class="btn btn-success btn-sm">+</button></td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>طلبات الأجهزة</h3>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>النوع</th>
                                    <th>الكمية المطلوبة</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>جهاز طرفي</td>
                                    <td><input type="number" name="" class="form-control" id=""></td>
                                    <td> <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> </td>
                                </tr>
                            </tbody>
                        </table>

                        <span> العدد الكلي للأجهزة: </span>
                        <span>17 جهاز طرفي </span><br>
                        <span></span><br>
                        <span></span><br>
                        <button class="btn btn-primary">
                            إضافة الطلب +</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>


@endsection
