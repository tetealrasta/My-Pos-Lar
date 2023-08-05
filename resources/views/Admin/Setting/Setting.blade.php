@extends('includes.admin.admin')
@section('title','Setting')
@section('content')
@section('Page-Title','Setting Page')    

<div class="row">
    <div class="col-sm-4">
        <label for="">Category Name</label>
        <select name="" id=""class="form-control">
            <option value="1">Laptop</option>
            <option value="2">Phone</option>
            <option value="3">Laptop</option>
            <option value="4">Phone</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label for="">Setting Name</label>
        <input type="text"class="form-control">
    </div>
    <div class="col-sm-4">
        <label for="">Category Status</label>
        <select name="" id=""class="form-control">
            <option value="1">Active</option>
            <option value="0">DeActive</option>
        </select>
    </div>
</div>
<form action="" method="post">
    @csrf
    
    <br>
    <div align="center">
    <input type="submit" value="Save" class="btn btn-success">
    </div>
</form>
<br>
<div class="table-responsive">
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Category Name</td>
                    <td>Setting Name</td>
                    <td>Setting Status</td>
                    <td>Edit</td>
                    <td>Delelt</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laptops</td>
                    <td>Toshipa</td>
                    <td>Acive</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Laptops</td>
                    <td>Dell</td>
                    <td>Acive</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Laptops</td>
                    <td>LG</td>
                    <td>Acive</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
            </tbody>
            </table>

</div>
@endsection