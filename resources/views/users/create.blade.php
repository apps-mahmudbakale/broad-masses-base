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
	      		        <input type="text" name="name" class="form-control" placeholder="Name">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <input type="email" name="email" class="form-control" placeholder="Email">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <input type="password" name="passwword" class="form-control" placeholder="Password">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <select name="roles" class="form-select">
	      		          <option selected>Role...</option>
	      		          @foreach($roles as $key => $role)
	      		          <option value="{{$role->id}}">{{ $role->name }}</option>
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