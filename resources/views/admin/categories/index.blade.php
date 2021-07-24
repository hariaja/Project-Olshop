@extends('admin.layouts.app')

@section('title', 'Category Page')

@section('content')

<div class="content">

  <div class="breadcrumb-wrapper">
    <h1>Category</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/categories') }}">
            <span class="mdi mdi-folder-open"></span>                
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">categories</li>
      </ol>
    </nav>
  </div>

  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h4>Table Data Category</h2>
    </div>
    <div class="card-body">

      @can('add_categories')
        <a href="{{ url('admin/categories/create') }}" class="btn btn-sm btn-primary bawah"><i class="fas fa-sm fa-plus"></i>Add New</a>
      @endcan

      @include('admin.layouts.flash_massege')

      <table class="table table-hover table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Categories Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Parent</th>
            <th scope="col">Total Items in Category</th>
            @can('delete_categories')
            <th scope="col"><i class="fas fa-cog"></i></th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @forelse ($categories as $category)
          <tr>
              <td scope="row">{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->slug }}</td>
              <td>{{ $category->parent ? $category->parent->name : '-' }}</td>
              <th>{{ $category->products->count() }}</th>
              @can('edit_categories')
              <td>
                
                  <a href="{{ url('admin/categories/' . $category->id . '/edit') }}" class="btn btn-sm btn-warning">edit</a>
                @endcan

                @can('delete_categories')
                  {!! Form::open(['url' => 'admin/categories/' . $category->id, 'class' => 'delete', 'style' => 'display:inline-block' ]) !!}
                  {!! Form::hidden('_method', 'DELETE') !!}
                  {!! Form::submit('delete', ['class' => 'btn btn-sm btn-danger']) !!}
                  {!! Form::close() !!}
                  
                </td>
                @endcan
          </tr>
          @empty
            <tr>
              <td colspan="5">No Record Found</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      {{ $categories->links() }}

    </div>
  </div>


</div>
<!-- End Content -->

@stop