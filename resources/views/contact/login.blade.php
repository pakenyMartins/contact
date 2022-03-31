@extends('layouts.app')

@section('title','List Contact')
@section('content')

<div class="d-flex justify-content-center">


      <form action="{{route('contact.loginSet')}}" method="post" class="row g-3 col-lg-6 ">
      @csrf
      <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input readonly type="email" class="form-control" value="admin@admin.com" >
              
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input  value="admin@admin.com" readonly type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>