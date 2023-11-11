@extends('admin.layout')
@section('container')
<h2>Add User</h2>
{{-- <div class="card-body">
    <div class="table-responsive"> --}}
<form method="post" action="{{route('register_store')}}">@csrf
    {{-- @if ($errors->any())
<div class="alert alert-danger">
   <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif --}}
    
    <div class="form-group">
        <label for="name">Name:</label> 
        <input type="text" value="{{old('name')}}" class="form-control" id="name"  name="name">
        @error('name')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">
    </div> --}}
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email">
        @error('email')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div> --}}
    {{-- <div class="form-group">
        <label for="img">img</label>
        <input type="file" class="form-control" id="img" name="img">
    </div> --}}

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password">
        @error('password')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" name="status">
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <input type="text" class="form-control" id="role" name="role">
    </div> --}}
    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
    {{-- @include('partials.formerrors') --}}
</form>
    </div>
</div>


@endsection