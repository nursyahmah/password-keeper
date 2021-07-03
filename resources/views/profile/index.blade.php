@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <h1 class="text-uppercase ml-5 mt-5">User Profile</h1>
    <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Name : </label>
                <input name="name" type="text" class="form-control" value="{{ $user->name ?? '' }}">
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input name="password" type="password" class="form-control" id="" placeholder= "hidden">
            </div>
            <div class="form-group">
                <label for="">Email : </label>
                <input name="email" type="email" class="form-control" id="" value="{{ $user->email ?? '' }}">
            </div>
        </div>
        <div class="col-md-6" style="text-align:center">
            <div style="text-align:center; overflow: hidden;height: 200px;min-width: 200px;border-radius:50%;">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/86/Avatar_Aang.png" alt="" style="height:200px;  max-width: none; min-width: 200px;">
            </div>
            <input type="file" name="profile_picture" id="" class="form-control">
        </div>
    </div>
        
        <!-- @include('layouts.footers.auth') -->
    </div>
@endsection