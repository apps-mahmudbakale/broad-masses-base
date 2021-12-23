@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Create User</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a></li>
	        <li class="breadcrumb-item active">Create User</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">
	      		<div class="card">
	      		  <div class="card-body">
	      		    <h5 class="card-title">Create User</h5>
	      		    <!-- No Labels Form -->
	      		    <form  action="{{route('admin.users.store')}}" method="POST" class="row g-3">
	      		    	@csrf
	      		      <div class="col-md-6">
	      		        <input type="text" name="name" value="{{ old('firstname', isset($user) ? $user->name : '') }}" class="form-control" placeholder="Name">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <input type="email" name="email" value="{{ old('firstname', isset($user) ? $user->email : '') }}" class="form-control" placeholder="Email">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <select name="roles[]" id="roles" class="form-select form-control select2" multiple="multiple">
	      		            @foreach($roles as $id => $roles)
	      		                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
	      		                    {{ $roles }}
	      		                </option>
	      		            @endforeach
	      		        </select>
	      		      </div>
	      		      <div>
	      		        <button type="submit" class="btn btn-primary">Submit</button>
	      		      </div>
	      		    </form><!-- End No Labels Form -->

	      		  </div>
	      		</div>
	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection