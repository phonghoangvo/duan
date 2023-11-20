@extends('admin.layout')
@section('container')
<h2>Log In</h2>
@if( auth()->check() )
<li class="nav-item">
    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
</li>
@endif
        
 
<form method="POST" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
    </div>
    {{-- @include('partials.formerrors')     --}}
</form>
@endsection