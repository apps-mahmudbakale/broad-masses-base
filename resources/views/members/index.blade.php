@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Members</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Members</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Members</h5>
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
	              	@foreach($members as $key => $member)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$member->user->name}}</td>
	                  <td>{{$member->user->email}}</td>
	                  <td>
	                  	@foreach($member->user->roles as $key => $role)
	                  	<span class="badge rounded-pill bg-success">{{ $role->name }}</span>
	                  	@endforeach
	                  </td>
	                  <td class="btn-group">
	                  	@can('read-members')
	                  	<a href="{{route('admin.members.show', $member->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	@can('update-members')
	                  	<a href="{{route('admin.members.edit', $member->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	                  	@endcan
	                  	@can('delete-members')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$member->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$member->id}}" action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
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