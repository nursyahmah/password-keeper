@extends('layouts.app')


@section('content')

@include('layouts.headers.cards')

<h1 class="text-uppercase ml-5 mt-5">Passsword List</h1>

<div class="container-fluid mt-5">

<a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus mr-2"></i>Add New Password</a>

<div class="table-responsive">
    <div>
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Password</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                </tr>
            </thead>
            <tbody class="list">
                
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3" style="border-radius: 50%">
                                
                                  <img alt="Image placeholder" src="https://freepikpsd.com/media/2019/10/netflix-logo-png-transparent-1-Transparent-Images.png">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">Netflix</span>
                            </div>
                        </div>
                    </th>
                    <td class="budget">
                        <p style="font-size: 24px;">.............</p>
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">active</span>
                        </span>
                    </td>
                    <td>
                    <!-- Action Button -->
                        <div class="btn-group">
                            <a href="{{ route('password.create') }}" class="btn btn-sm btn-success" title="show password"><i class="far fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-danger" title="delete password"><i class="far fa-trash-alt"></i></a>
                        </div>
                    <!-- Action Button -->
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{Form::open(['route' => 'password.store', 'user_id' => Auth::user()->id, 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}

        <div class="form-group">
          <label for="">What password is this for?</label>
          <input type="text" name="name" class="form-control" placeholder="name of the password. Eg: Netflix, Gmail">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Status</label>
          <select name="status" id="" class="form-control main-select2">
            <option value="1">Active</option>
            <option value="0">Not Active</option>
          </select>
        </div>
      {{ Form::close()}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection