@extends('admin.layouts.app')

@section('title', 'Attribute Page')

@section('content')

<div class="content">

  <div class="breadcrumb-wrapper">
    <h1>Attribute</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/attributes') }}">
            <span class="mdi mdi-view-dashboard-outline"></span>          
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">attribute</li>
      </ol>
    </nav>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Attributes</h2>
        </div>
        <div class="card-body">

          @can('add_attributes')
          <a href="{{ url('admin/attributes/create') }}" class="btn btn-primary bawah btn-sm">Add New</a>
          @endcan
    
          @include('admin.layouts.flash_massege')
          <table class="table table-bordered table-stripped atas text-center">
              <thead>
                <th>No</th>
                <th>Code</th>
                <th>Name</th>
                <th>Type</th>
                <th><i class="fas fa-cog"></i></th>
        
              </thead>
              <tbody>
                @forelse ($attributes as $attribute)
                <tr>    
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $attribute->code }}</td>
                  <td>{{ $attribute->name }}</td>
                  <td>{{ $attribute->type }}</td>
                  <td>
                    @can('edit_attributes')
                    <a href="{{ url('admin/attributes/'. $attribute->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                    @endcan
            
                    @can('add_attributes')
                      @if ($attribute->type == 'select')
                      <a href="{{ url('admin/attributes/'. $attribute->id .'/options') }}" class="btn btn-success btn-sm">options</a>
                      @endif
                    @endcan
                    
                  @can('delete_attributes')
                    {!! Form::open(['url' => 'admin/attributes/'. $attribute->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                  @endcan
                    
                  </td>
                </tr>

                @empty
                <tr>
                  <td colspan="5">No records found</td>
                </tr>
                @endforelse
              </tbody>
          </table>
          {{ $attributes->links() }}
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End Content -->

@stop