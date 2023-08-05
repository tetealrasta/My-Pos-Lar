@extends('includes.admin.admin')
@section('title', 'الأجهزة')
@section('content')
@section('Page-Title', 'صفحه الأجهزه')

<style>
    select.form-control:not([size]):not([multiple]) {
        height: calc(-11.700000000000003rem + 1px) !important;
        /* border: 1px solid black; */
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="new_blag_Form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">اسم  وحدة الجهاز </label>
                            <select name="Dev_Id" id="" required class="form-control">
                                <option value=""></option>
                                 @foreach ($company as $item)
                                    <option value="{{ $item->Company_id }}">{{ $item->Company_Name }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">شركة الجهاز</label>
                            <select name="Dev_Id" id="" required class="form-control">
                                <option value=""></option>
                                 @foreach ($company as $item)
                                    <option value="{{ $item->Company_id }}">{{ $item->Company_Name }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">نوع الجهاز</label>
                            <select name="Dev_Id" id="" required class="form-control">
                                <option value=""></option>
                                 @foreach ($company as $item)
                                    <option value="{{ $item->Company_id }}">{{ $item->Company_Name }}</option>
                                @endforeach 
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">نوع الجهاز </label>
                            <select name="Dev_Id" id="" required class="form-control">
                                <option value=""></option>
                                 @foreach ($company as $item)
                                    <option value="{{ $item->Company_id }}">{{ $item->Company_Name }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">الرقم التسلسلي الجهاز</label>
                            <input type="text" name="Blag_Id" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">حالة الجهاز</label>
                        <select name="Dev_Id" id="" required class="form-control">
                            <option value=""></option>
                             @foreach ($unit as $item)
                                <option value="{{ $item->Local_id }}">{{ $item->Local_Name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-row">
                        {{-- <div class="col-md-3"></div> --}}
                        <div class="form-group col-md-12">
                            <label for="inputState">صوره للجهاز</label>

                            <input type="file" class="form-control" name="" id="device_photo">
                            <button class="f">add your picture</button>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <div align="right">
                    <input type="submit" id="blag_submit" value="إضافه البلاغ" class="btn btn-success btn-sm">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="optionss">

    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
        إضافه <i class="fa fa-plus"></i>
    </button>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
        حذف المحدد <i class="fa fa-trash"></i>
    </button>
    <br>
    <i class="fa-solid fa-triangle-exclamation"></i>
</div>
<br>
<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>رقم الجهاز</td>
                <td>اسم الجهاز</td>
                <!-- <td>اسم القسم</td>
                <td>اسم المستخدم</td>
                <td> المحلية</td>
                <td>مشكله الجهاز</td>
                <td>صوره الجهاز</td> -->
                <td>حاله الجهاز</td>
                <td> معلومات الجهاز</td>
                <td>تعديل</td>
                <td>حذف</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($device as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->Dev_Parcode }}</td>
                <td>{{ $cat->Dev_Name }}</td>
                 <td>{{ $cat->Dev_Cat }}</td>
               <!-- <td>{{ $cat->Dev_Mo }}</td>
                <td>{{ $cat->Dev_Unit }}</td>
                <td>{{ $cat->Dev_Status }}</td>
                <td>{{ $cat->Dev_Pic }}</td>
                <td>{{ $cat->Dev_Status }}</td> -->
                <td><a href="{{ url('Admin/Device/view/' . $cat->id) }}" class="btn btn-secondary btn-sm" value="{{ $cat->id }}"><i class="fa fa-flag"></i></a>
                </td>
                <td><a href="{{ url('Admin/Device/edit/' . $cat->id) }}" class="btn btn-success btn-sm" value="{{ $cat->id }}"><i class="fa fa-edit"></i></a>
                </td>
                <td><a href="{{ url('Admin/Device/delete/' . $cat->id) }}" class="btn btn-danger btn-sm" value="{{ $cat->id }}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection