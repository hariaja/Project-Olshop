@extends('admin.layouts.app')

@section('title', 'Product Page')

@section('content')

<div class="content">
  <div class="row">
    <div class="col-lg-4">
      @include('admin.products.product_menus')
    </div>
    <div class="col-lg-8">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Product Images</h2>
        </div>
        <div class="card-body">
          @include('admin.layouts.flash_massege', ['$errors' => $errors])
          <a href="{{ url('admin/products/' . $productID . '/add-image') }}" class="btn btn-sm bawah btn-primary">Add New</a>
          <table class="table table-bordered text-center table-hover table-stripped">
            <thead>
                <th>No</th>
                <th>Image</th>
                <th>Uploaded At</th>
                <th><i class="fas fa-cog"></i></th>
            </thead>
            <tbody>
            @forelse ($productImages as $image)
              <tr>    
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $image->path) }}" style="width:150px"/></td>
                <td>{{ $image->created_at }}</td>
                <td>
                  {!! Form::open(['url' => 'admin/products/images/'. $image->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                  {!! Form::hidden('_method', 'DELETE') !!}
                  {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                  {!! Form::close() !!}
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4">No records found</td>
              </tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection