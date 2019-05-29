@extends('admin.layouts.main')
@section('content')

<section class="row " id="admin-reg">
    <div class="col-md-8 col-sm-8 col-xs-12 ">

        <form class="form form-1 row" enctype="multipart/form-data" method="POST" action="{{route('admin.register.submit')}}">

            {{ csrf_field() }}

            <div class="col-md-12">
                <h1 class="header-1">Add New Admin</h1>
            </div>

            <div class="col-md-6">
                <label>First Name</label>
                <input  type="text" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
                <label >Last Name</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>

            <div class="col-md-12">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div>

            <div class="col-md-6">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="col-md-6">
                <label >Phone</label>
                <input  type="text" class="form-control" name="phone" required>
            </div>

            <div class="col-md-6">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo">
            </div>

            <div class="col-md-6">
                <label>Select Admin Type</label>
                <select name="role_id" class="form-control">
                    <option value="1">Super Admin</option>
                    <option value="2">Regular Admin</option>
                </select>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn1">
                    Add Admin
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
