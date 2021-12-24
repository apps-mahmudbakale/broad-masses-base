@extends('layouts.admin')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Roles</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Roles</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Roles</h5>
              @can('create-users')
              <a href="{{route('admin.roles.create')}}" class="btn btn-primary pull-right"><i class="bi bi-plus"></i> Create Role</a>
              @endcan
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($roles as $key => $role)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$role->name}}</td>
                    <td>{{$role->created_at}}</td>
                    <td class="btn-group">
                      @can('read-roles')
                      <a href="{{route('admin.roles.show', $role->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                      @endcan
                      @can('update-roles')
                      <a href="{{route('admin.roles.edit', $role->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                      @endcan
                      @can('delete-roles')
                      <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$role->id}}').submit();"><i class="bi bi-trash"></i></a>
                      <form id="del#{{$role->id}}" action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
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


