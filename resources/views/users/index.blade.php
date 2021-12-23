@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Users</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Users</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Users</h5>
	            @can('create-users')
	            <a href="{{route('admin.users.create')}}" class="btn btn-primary pull-right"><i class="bi bi-plus"></i> Create User</a>
	            @endcan
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Name</th>
	                  <th scope="col">Email</th>
	                  <th scope="col">Role</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($users as $key => $user)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
	                  <td>
	                  	@foreach($user->roles as $key => $role)
	                  	<span class="badge badge-success">{{ $role->name }}</span>
	                  	@endforeach
	                  </td>
	                  <td class="btn-group">
	                  	@can('read-users')
	                  	<a href="{{route('admin.users.show', $user->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	@can('update-users')
	                  	<a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	                  	@endcan
	                  	@can('delete-users')
	                  	<a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
	                  	@endcan
	                  </td>
	                </tr>
	                @endforeach
	              </tbody>
	            </table>
	            <!-- End Table with stripped rows -->

	          </div>
	        </div>

	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection