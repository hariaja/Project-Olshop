@extends('admin.layouts.app')

@section('title', 'Halaman Dashboard')

@section('content')

<div class="content">

  <div class="breadcrumb-wrapper">
    <h1>Dashboard</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/dashboard') }}">
            <span class="mdi mdi-view-dashboard-outline"></span>          
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">dashboard</li>
      </ol>
    </nav>
  </div>


</div>
<!-- End Content -->

@stop