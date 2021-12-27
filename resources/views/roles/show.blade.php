@extends('layouts.admin')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Roles</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">Roles</a></li>
          <li class="breadcrumb-item active">View Role</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Role</h5>
              <!-- Table with stripped rows -->
              <table class="table">
                <tr>
                  <td>Role:</td>
                  <td>{{$role->name}}</td>
                </tr>
              </table>
              <!-- End Table with stripped rows -->
                <legend>Permissions</legend>
                <hr>
                <div class="row">
                  @foreach($role->permissions as $id => $permission)
                  <div class="col-md-2"><span class="badge rounded-pill bg-primary">{{ $permission->name }}</span></div>
                  @endforeach
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
