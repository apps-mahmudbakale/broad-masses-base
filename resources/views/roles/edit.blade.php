@extends('layouts.app')

@section('content')
<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group"><a class="btn" href="#"><i class="icon-speech"></i></a><a class="btn" href="./"><i class="icon-graph"></i>  Dashboard</a><a class="btn" href="#"><i class="icon-settings"></i>  Settings</a></div>
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><i class="fa fa-edit"></i>Update Roles</div>
              <div class="card-body">
                <form class="form-horizontal" action="{{ route("roles.update", [$role->id]) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label class="col-form-label" for="name">Role Name</label>
                    <div class="controls">
                      <div class="input-prepend input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                        <input class="form-control" name="name" id="name" size="16" value="{{ old('name', isset($role) ? $role->name : '') }}" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="permissions">Permissions</label>
                    <div class="controls">
                      <div class="input-group">
                        <select class="form-control" id="permissions" name="permissions[]" size="5" multiple="multiple">
                          @foreach($permissions as $id => $permissions)
                              <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>
                                  {{ $permissions }}
                              </option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
</main>

@endsection
