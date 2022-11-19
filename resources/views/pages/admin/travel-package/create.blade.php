@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('travel-package.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
              value="{{ old('title') }}">
          </div>
          <div class="form-group">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" placeholder="Location"
              value="{{ old('location') }}">
          </div>
          <div class="form-group">
            <label for="about" class="form-label">About</label>
            <textarea type="text" name="about" id="about" class="form-control d-block w-100" rows="10">{{ old('about') }}</textarea>
          </div>
          <div class="form-group">
            <label for="featured_event" class="form-label">Featured Event</label>
            <input type="text" name="featured_event" id="featured_event" class="form-control"
              placeholder="Featured Event" value="{{ old('featured_event') }}">
          </div>
          <div class="form-group">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" id="language" class="form-control" placeholder="Language"
              value="{{ old('language') }}">
          </div>
          <div class="form-group">
            <label for="foods" class="form-label">Foods</label>
            <input type="text" name="foods" id="foods" class="form-control" placeholder="Foods"
              value="{{ old('foods') }}">
          </div>
          <div class="form-group">
            <label for="departure_date" class="form-label">Departure Date</label>
            <input type="date" name="departure_date" id="departure_date" class="form-control"
              placeholder="Departure Date" value="{{ old('departure_date') }}">
          </div>
          <div class="form-group">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Duration"
              value="{{ old('duration') }}">
          </div>
          <div class="form-group">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Type"
              value="{{ old('type') }}">
          </div>
          <div class="form-group">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Price"
              value="{{ old('price') }}">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
