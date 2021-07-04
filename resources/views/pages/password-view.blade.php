@extends('layouts.app')


@section('content')

@include('layouts.headers.cards')

<h1 class="text-uppercase ml-5 mt-5">Passsword Details</h1>

<a href="{{ route('password.index') }}" class="btn btn-primary btn-sm ml-5 mt-5">Go Back</a>


<div class="container-fluid mt-5">
<div href="#" class="avatar rounded-circle mr-3 form-group" style="border-radius: 50%">                          
    <img alt="Image placeholder" src="https://freepikpsd.com/media/2019/10/netflix-logo-png-transparent-1-Transparent-Images.png">
</div>

</div>

@endsection