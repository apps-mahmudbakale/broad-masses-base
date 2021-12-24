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
          <div class="card-header"><i class="fa fa-table"></i> Roles <a href="{{ route('roles.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus-circle"></i> Create Role</a></div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
              <thead>
                <tr>
                  <th>Roles Title</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($roles as $key => $role)
                <tr>
                  <td>{{ $role->name }}</td>
                  <td>{{ $role->created_at }}</td>
                  <td class="btn-group">
                    @can('read-roles')
                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    @endcan
                    @can('update-roles')
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    @endcan
                    @can('delete-roles')
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </form>
                    @endcan
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <nav>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
</main>

@endsection
