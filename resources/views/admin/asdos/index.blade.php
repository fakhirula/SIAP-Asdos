@extends('admin.layout')
@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data {{ ucfirst(request()->segment(2)) }}</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucfirst(request()->segment(2)) }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            Simple Datatable
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Batch</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $id = 1;
            foreach ($asdos as $row) :
            ?>
              <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->batch }}</td>
                <td>
                  <a href="{{ route(request()->segment(2).'.edit',$row->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                </td>
              </tr>
            <?php
            endforeach;
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@include('admin.partials.footer')
@endsection