@extends('includes.admin.admin')
@section('title', 'أجهزه تحت الصيانة')
@section('content')
@section('Page-Title', 'صفحه الأجهزه التي لم تتم صيانتها بعد')

<form action="{{ URL('Admin\Category\store') }}" method="post">

    <div class="row">
        @csrf
        <h1><?php echo csrf_token(); ?></h1>
        <div class="optionss">
            <div class="row">
                <div class="col-sm-1">
                    <h4 for="">العدد الكلي </h4>
                    <div class="card">

                        <div class="card-body" style="background-color: #000;color:#fff">
                            5,000
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-3">
                    <h4 for="">الوحدة الإدارية</h4>
                    <select name="Dev_type" id="" required class="form-control">
                        <option value=""></option>

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <h4 for="">بحث من فترة</h4>
                    <input type="date" class="form-control">
                </div>

                <!-- <div class="row"> -->


                <div class="form-group col-md-3">
                    <h4 for="">الى فترة</h4>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <h4 for=""> الإجراء</h4>
                    <input type="submit" value="بحث">
                </div>
</form>

<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>رقم البلاغ</th>
                <th>نوع العطل</th>
                <th>رقم الجهاز</th>
                <th>تاريخ العطل</th>
                <th>جهة الجهاز</th>
                <th>طباعه</th>
                <th>تعديل</th>
                <th>حذف</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td><a href="" class="btn btn-success btn-sm" value=""><i class="fa fa-edit"></i></a></td>
                <td><a href="" class="btn btn-danger btn-sm" value=""><i class="fa fa-edit"></i></a></td>
            </tr>


        </tbody>
    </table>

</div>
@endsection