@extends('includes.admin.admin')
@section('title', 'Category')
@section('content')
@section('Page-Title', 'صفحه الأقسام')

<form action="{{ URL('Admin\Category\store') }}" method="post">
    @csrf
    <div class="row">

        @if (session()->has('sucess'))
            <div class="alert alert-success"></div>
        @endif
        <div class="col-sm-3">
            <label for="">اسم القسم</label>
            <input type="text" name="Cat_Name" value="{{ $edit_Cat ->Cat_Name }}" class="form-control">
        </div>
        <div class="col-sm-6">
        
        </div>
    </div>

    <br>
    <div align="right">
        <input type="submit" value="Save" class="btn btn-success btn-sm">
    </div>
</form>
<br>

</div>
@endsection
