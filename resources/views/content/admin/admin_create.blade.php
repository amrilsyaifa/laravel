@extends('dashboard.dashboard_utama')
@section('content')
<form action="{{ route('admin.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
        <div class="form-group">
            <label for="email">Email Adress :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="rules">Rules :</label>
            <select name="rules" id="rules" class="form-control" required>
                    <option value="">Choose..</option>
                    <option value="2">DSU</option>
                    <option value="3">ONB</option>
                    <option value="7">GUEST</option>
                  </select>
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
    </form>
@stop