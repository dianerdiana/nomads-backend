@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="travel_package_id" class="form-label">
              Travel Package
            </label>
            <select name="travel_package_id" required class="form-control">
              <option value="">Pilih Paket Travel</option>
              @foreach ($travel_packages as $travel_package)
                <option value="{{ $travel_package->id_travel_package }}">
                  {{ $travel_package->title }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="image" class="form-label">Pilih Gambar</label>
            <input type="file" name="image" id="image" class="form-control" placeholder="Image">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
