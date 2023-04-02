@extends('layout')
@section('content')
<div class="login">
    <div class="style">
    <form class="form">
     <h1>Create your account</h1> 
    <label for="firstname" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstname">
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastname">
    <label for="numbre" class="form-label">Phone number</label>
    <input type="text " class="form-control" id="numbre">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address">
    <label for="City" class="form-label">City</label>
    <input type="text" class="form-control" id="City">
 <div class="submit"> <button type="submit" class="btn rounded-pill main-btn bg-info mt-10 ">sing in</button></div>
</div>
@endsection