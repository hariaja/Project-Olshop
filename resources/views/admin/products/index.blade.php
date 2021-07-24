@extends('admin.layouts.app')

@section('title', 'Product Page')

@section('content')

<div class="content">

  <div class="breadcrumb-wrapper">
    <h1>Product</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/products') }}">
            <span class="mdi mdi-folder-open"></span>                
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">products</li>
      </ol>
    </nav>
  </div>

  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h4>Table Data Products</h2>
    </div>
    <div class="card-body">

      @can('add_products')
      <a href="{{ url('admin/products/create') }}" class="btn btn-sm btn-primary bawah"><i class="fas fa-sm fa-plus"></i>Add New</a>
      @endcan

      @include('admin.layouts.flash_massege')

      <table class="table table-hover table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th>SKU</th>
            <th>Type</th>
            <th>Name</th>
            <th>Price</th>
            <th>Status</th>
            <th scope="col"><i class="fas fa-cog"></i></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($products as $product)
          <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ number_format($product->price) }}</td>
            <td>{{ $product->status_label() }}</td>
            <td>
              <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
              
              @can('delete_products')
              {!! Form::open(['url' => 'admin/products/'. $product->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
              {!! Form::hidden('_method', 'DELETE') !!}
              {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
              {!! Form::close() !!}
              @endcan
            </td>
          </tr>
          @empty
            <tr>
              <td colspan="7">No Record Found</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      {{ $products->links() }}
    </div>
  </div>


</div>
<!-- End Content -->

@stop