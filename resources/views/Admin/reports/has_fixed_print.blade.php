@extends('includes.admin.admin')
@section('title', 'طباعه الأجهزه التي تمت صيانتها')
@section('content')


    <div class="top">
        <div align="center">
            <h3>طباعه الإيصال</h3>
            <a href="#" class="btn btn-info btn-sm">طباعه البلاغ</a>
        </div>
        <div align="left">
            <h6> تاريخ البلاغ :22-03-2022</h6>
        </div>

        <div align="right">
            <h6>رقم البلاغ : 00026520</h6>
        </div>
    </div>
    <div class="right">
        <div align="right">

            <h5><strong>إسم المتحصل</strong> : محمد علي كلاي</h5>
            {{-- <br> --}}
            <h5><strong>عنوان المتحصل</strong> : امدرمان امبده الحاره السابعه</h5>
            {{-- <br> --}}
            <h5><strong>رقم هاتف المتحصل</strong> : 0990124548</h5>
            {{-- <br> --}}
        </div>
    </div>
    <hr>
    <div align="center">
        <div class="detailse">
            <table class="table">
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
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-sm-6">
            <h3>توقيع مهندس الصيانة </h3>
            <br>
            <span>..................</span>
        </div>
        <div class="col-sm-6">
            <h3>توقيع المتحصل على الإستلام</h3>
            <br>
            <span>..................</span>
        </div>

    </div>


@endsection
