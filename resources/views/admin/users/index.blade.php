@extends('admin.layouts.app')

@section('title', 'Users Page')

@section('content')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Users</h2>
        </div>
        <div class="card-body">
          
          @can('add_users')
            <a href="{{ url('admin/users/create') }}" class="btn btn-primary bawah btn-sm"><i class="fas fa-plus fa-sm mr-1"></i>Add New</a>
          @endcan

          @include('admin.layouts.flash_massege')

          <table class="table table-bordered table-stripped atas">
            <thead>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Created At</th>
              <th>Action</th>
            </thead>
            <tbody>
            @forelse ($users as $user)
              <tr>    
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->implode('name', ', ') }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                @if (!$user->hasRole('Admin'))
                  @can('edit_categories')
                    <a href="{{ url('admin/users/'. $user->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                  @endcan

                  @can('delete_categories')
                    {!! Form::open(['url' => 'admin/users/'. $user->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                  @endcan
                @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6">No records found</td>
              </tr>
            @endforelse
            </tbody>
          </table>
          {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection