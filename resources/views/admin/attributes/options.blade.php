@extends('admin.layouts.app')

@section('title', 'Attribute Page')

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-lg-5">
        @include('admin.attributes.option_form')
      </div>
      <div class="col-lg-7">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Options for : {{ $attribute->name }}</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-stripped text-center">
                  <thead>
                    <th style="width:10%">No</th>
                    <th>Name</th>
                    @can('edit_attributes')
                    <th style="width:30%"><i class="fas fa-cog"></i></th>
                    @endcan
                  </thead>
                  <tbody>
                    @forelse ($attribute->attributeOptions as $option)
                    <tr>    
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $option->name }}</td>
                      @can('edit_attributes')
                      <td>
                        <a href="{{ url('admin/attributes/options/'. $option->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                        {!! Form::open(['url' => 'admin/attributes/options/'. $option->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                      </td>
                      @endcan
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5">No records found</td>
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