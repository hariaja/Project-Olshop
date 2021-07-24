@extends('admin.layouts.app')

@section('title', 'Category Page')

@section('content')

@php $form_title = !empty($category) ? 'Update' : 'Add New' @endphp

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
        <li class="breadcrumb-item" aria-current="page">{{ $form_title }} data category</li>
      </ol>
    </nav>
  </div>

  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h4>{{ $form_title }} Data Category</h4>
    </div>
    <div class="card-body">
      @include('admin.layouts.flash_massege', ['$errors' => $errors])
      @if (!empty($category))
        {!! Form::model($category, ['url' => ['admin/categories', $category->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('id') !!}
      @else
        {!! Form::open(['url' => 'admin/categories']) !!}
      @endif

      <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'category name']) !!}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('parent_id', 'Parent') !!}
            {!! General::selectMultiLevel('parent_id', $categories, ['class' => 'form-control', 'selected' => !empty(old('parent_id')) ? old('parent_id') : (!empty($category['parent_id']) ? $category['parent_id'] : ''), 'placeholder' => '-- Choose Category --']) !!}
          </div>
        </div>

      </div>

      <button type="submit" class="btn btn-primary btn-sm">Save Data</button>
      {!! Form::close() !!}
    </div>
  </div>

@stop