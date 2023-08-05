@extends('includes.admin.admin')
@section('title','الوحدات')
@section('content')
@section('Page-Title','')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-cycle-tab" data-toggle="tab" data-target="#nav-cycle" type="button" role="tab" aria-controls="nav-cycle" aria-selected="true"> إضافة وحدة جديدة</button>
        <button class="nav-link" id="nav-Device_on_map-tab" data-toggle="tab" data-target="#nav-Device_on_map" type="button" role="tab" aria-controls="nav-Device_on_map" aria-selected="false">متحصلين الوحدة</button>
    </div>
</nav>


<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-cycle" role="tabpanel" aria-labelledby="nav-cycle-tab">
        <br>
        <form action="{{URL('Admin\Units\store')}}" method="post">
            @csrf
            <div class="row">

                @if (session()->has("sucess"))
                <div class="alert alert-success"></div>
                @endif
                <div class="col-sm-3">
                    <h3>الوحدات</h3>

                    <input type="text" name="Unit_Name" class="form-control">
                </div>

            </div>

            <br>
            <div align="right">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
        </form>
        <br>
        <div class="table-responsive">
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>اسم الوحده</td>
                        <td>تعديل</td>
                        <td>حذف</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($Units as $unit)
                    <tr>


                        <td>{{$unit->id}}</td>
                        <td>{{$unit->Local_Name}}</td>
                        <td><a href="{{url('Admin/unit/edit/'. $unit->id)}}" class="btn btn-success btn-sm" value="{{$unit->id}}"><i class="fa fa-edit"></i></a></td>
                        <td><a href="{{url('Admin/unit/delete/'. $unit->id)}}" class="btn btn-danger btn-sm" value="{{$unit->id}}"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="tab-pane fade" id="nav-Device_on_map" role="tabpanel" aria-labelledby="nav-Device_on_map-tab">
        <br>

        <h3>متحصلين الوحدة المحددة</h3>
        <div class="form">

            <form action="" method="post">
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <br>
                <input type="submit" value="Save" class="btn btn-info btn-sm">
            </form>
            <br>
            <br>
        </div>
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
                        
                    </tr>
                </thead>
                <tbody>


                    <tr>
                    @foreach ($Units as $unit)
                        <td>{{$unit->id}}</td>
                        <td>{{$unit->id}}</td>
                        <td>{{$unit->id}}</td>
                        <td>{{$unit->id}}</td>
                        <td>{{$unit->id}}</td>
                        <td>{{$unit->id}}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
        @endsection