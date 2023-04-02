@extends('layout')
@section('content')
<div class="login">
    <div class="style">
    <form class="form">
     <h1>log in</h1> 
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
 <div class="submit"> <button type="submit" class="btn rounded-pill main-btn bg-info">log in</button></div>
</div>  
    </form>
  </div>
@endsection