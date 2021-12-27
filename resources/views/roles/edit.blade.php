@extends('layouts.admin')

@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update Role</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">Users</a></li>
        <li class="breadcrumb-item active">Update Role</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Role</h5>
              <!-- No Labels Form -->
              <form  action="{{route('admin.roles.update', $role->id)}}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                  <input type="text" name="name" value="{{ old('name', isset($role) ? $role->name : '') }}" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-12">
                  <select class="form-select form-control" id="permissions" name="permissions[]" size="5" multiple="multiple">
                          @foreach($permissions as $id => $permissions)
                              <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>
                                  {{ $permissions }}
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
