</style>
@extends('includes.admin.admin')
@section('title', 'البلاغات')
@section('content')
@section('Page-Title', 'صفحه البلاغات')





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
                <form id="new_blag_Form" action="{{ route('admin.Blag.store') }}" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">رقم البلاغ </label>
                            <input type="text" name="Blag_Id" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">نوع الجهاز</label>
                            <select name="Dev_type" id="" required class="form-control">
                                <option value=""></option>
                                @foreach ($Blag as $item)
                                <option value="{{ $item->id }}">{{ $item->Cat_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">شركة الجهاز </label>
                            <select name="comp" id="" required class="form-control">
                                <option value=""></option>
                                @foreach ($Blag as $item)
                                <option value="{{ $item->Company_id }}">{{ $item->Company_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">رقم الجهاز</label>
                            <select name="Device_Id" id="" required class="form-control">
                                <option value=""></option>
                                @foreach ($Blag as $item)
                                <option value="{{ $item->id }}">{{ $item->Dev_Parcode }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">نوع العطل </label>
                        <select name="prob" id="" required class="form-control">
                            <option value=""></option>
                            @foreach ($Blag as $item)
                            <option value="{{ $item->Problem_Id }}">{{ $item->Problem_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">جهة الجهاز</label>
                        <select name="unit_id" id="" required class="form-control">
                            <option value=""></option>
                            @foreach ($Blag as $item)
                            <option value="{{ $item->Local_Id }}">{{ $item->Local_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">اسم المتحصل</label>
                            <select name="mothasilee" id="" required class="form-control">
                                <option value=""></option>
                                @foreach ($Blag as $item)
                                <option value="{{ $item->id }}">{{ $item->Mo_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">اسم مهندس الصيانة</label>
                            <select name="user_id" id="" required class="form-control">
                                <option value=""></option>
                                @foreach ($Blag as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <div align="right">
                    <input type="submit" id="blag_submitt" value="إضافه البلاغ" class="btn btn-success btn-sm">
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
                <th><input type="checkbox" name="" id=""></th>
                <th>ID</th>
                <th>رقم البلاغ</th>
                <th>نوع الجهاز</th>
                <th>نوع العطل</th>
                <th>رقم الجهاز التسلسلي</th>
                <th>تاريخ العطل</th>
                <th>جهة الجهاز</th>
                <th>تفاصيل البلاغ</th>
                <th>إصلاح الجهاز</th>
                <th>تعديل</th>
                <th>حذف</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($Blag as $Blag)
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>{{ $Blag->Blag_ID }}</td>
                <td>{{ $Blag->Blag_Number }}</td>
                <td>{{ $Blag->company_id }}</td>
                <td>{{ $Blag->categoryy->Cat_Name }}</td>
                <td>{{ $Blag->Type_Of_Error }}</td>
                <td>{{ $Blag->Number_of_ment }}</td>
                <td>{{ $Blag->commentss }}</td>
                <td>{{ $Blag->blag_status_id }}</td>
                <td>{{ $Blag->device_id }}</td>
                <td>{{ $Blag->mothasil_id }}</td>
                <td>{{ $Blag->created_at }}</td>
                <td>{{ $Blag->unit_id }}</td>
                <td><a href="{{ url('Admin/Blag/view/' . $Blag->id) }}" class="btn btn-secondary btn-sm" value="{{ $Blag->id }}">مراجعة البلاغ <i class="fa fa-flag"></i></a>
                </td>

                <td>
                    <a href="#" value="view" blag_id="{{ $Blag->id }}" id="{{ $Blag->id }}" class="has_done btn btn-primary btn-sm">تمت الصيانه <i class="fa fa-check highlight-icon" aria-hidden="true"></i></a>
                </td>
                <td><a href="{{ url('Admin/Blag/edit/' . $Blag->id) }}" class="btn btn-success btn-sm" value="{{ $Blag->id }}"><i class="fa fa-edit"></i></a></td>
                <td><a href="{{ url('Admin/Blag/delete/' . $Blag->id) }}" class="btn btn-danger btn-sm" value="{{ $Blag->id }}"><i class="fa fa-edit"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection