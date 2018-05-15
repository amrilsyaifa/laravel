@extends('dashboard.dashboard_utama')
@section('content')
@foreach($data as $datas)
            <form action="{{ route('admin.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $datas->name }}">
                </div>
                <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $datas->username }}">
                    </div>
                <div class="form-group">
                    <label for="email">Email Adress:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="rules">Rules :</label>
                    <input type="text" class="form-control" id="rules" name="rules" value="{{ $datas->role_id }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        @endsection