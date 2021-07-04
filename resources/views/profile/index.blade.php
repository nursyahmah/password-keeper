@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <h1 class="text-uppercase ml-5 mt-5">User Profile</h1>
    <div class="container-fluid mt-5">
        {{ Form::open(['route' => ['profile.store', 'user_id'=>$user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class'=>'row']) }}
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
            <div class="col-md-6" style="justify-content:center">
                
                    <div style="text-align:center;overflow:hidden;">
                        <img src="{{ asset($user->profile_picture) ?? '' }}" alt="profile_picture" style="max-height:200px;  min-width: 200px; border-radius:50%;object-fit: cover;">
                    </div>
                <input type="file" name="profile_picture" id="" class="form-control">
            </div>
        </div>
        <div style="text-align:center;" class="mt-5">
            <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-check mr-2"></i>Submit</button>
        </div>
        {{ Form::close() }}
        
        <!-- @include('layouts.footers.auth') -->
@endsection