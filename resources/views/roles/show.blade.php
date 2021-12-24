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
      <div class="btn-group" role="group" aria-label="Button group"><a class="btn" href=""><i class="icon-speech"></i></a><a class="btn" href="./"><i class="fa fa-dashboard"></i> Dashboard</a><a class="btn" href="#"><i class="fa fa-cogs"></i> Settings</a></div>
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-lock"></i> Roles</div>
          <div class="card-body">
            <table class="table">
              <tr>
                <td>Role:</td>
                <td>{{$role->name}}</td>
              </tr>
            </table>
            <legend>Permissions</legend>
            <hr>
            <div class="row">
            @foreach($role->permissions as $id => $permissions)
            <div class="col-md-2"><span class="badge badge-info">{{ $permissions->name }}</span></div>
            @endforeach
          </div>
          </div>
        </div>
      </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
</main>

@endsection
