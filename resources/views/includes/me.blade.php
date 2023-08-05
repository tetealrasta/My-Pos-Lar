@extends('includes.admin.admin')
@section('title','Programmer Info')
@section('Page-Title','Who is The Programmer :-')
    <style>
        img{
            border: 1px solid rgb(109, 106, 106);
            box-shadow: 1px 1px 15px rgb(0 0 0 / 10%);
        }
    </style>
@section('content')
<hr>
<div class="row">
    <div class="col-sm-8">
        <h3><u><i><b>About Me</b></u></i></h3>
        <br>
    
        <h3>Name :Nasr Alden Osman<h3>
        <h5>Nationality : Sudanes <h5>
        <h5>Born :199*-04-16      <h5>
    
        <br>
        {{-- <h3><u><i><b>Education :-</b></u></i></h3> --}}
        <br>
         {{-- <h4> - Bachelor Degree From Al-Imam Alhadi College </h4> --}}
         {{-- <h4> - Information Technology </h4> --}}
         {{-- <h4> - From The Grade Honor The Second Degree First Class(Very Good) </h4> --}}
         
         <h3><u><i><b>Hobits </b></u></i></h3>
         <br>
         <h4>Foot Ball </h4>
         <h4> Swimming </h4>
         <h4>Karate</h4>
    
         <br>
         <h3><u><i><b>Contact Me</b></u></i></h3>
    <br>
         <h4>Whatsapp : 0114700220</h4>
         <h4>Call : 0114700220</h4>
         <h4>E-mail : NasrAldenOsman@Outlook.sa</h4>
    
    </div>
    <div class="col-sm-4">
        <img src="{{ URL::asset("assets/me.jpg") }}" width="400px" height="570px" alt="" srcset="">
    </div>
</div>

   @endsection
