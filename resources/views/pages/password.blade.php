@extends('layouts.app')


@section('content')

@include('layouts.headers.cards')

<h1 class="text-uppercase ml-5 mt-5">Passsword List</h1>

<div class="container-fluid mt-5">

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
                        passwordSecret
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
                        
                        </div>
                    <!-- Action Button -->
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    
    </div>
</div>
@endsection