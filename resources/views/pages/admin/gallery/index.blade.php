@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
      <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fa fa-plus"></i> Tambah Gallery
      </a>
    </div>

    @if (session()->has('message'))
      <div class="col-12 alert @if (session('status') == 'success') alert-success @else alert-danger @endif" role="alert">
        {{ session('message') }}
      </div>
    @endif

    <div class="row">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width='100%' collspacing='0'>
            <thead>
              <tr>
                <th>ID</th>
                <th>Travel</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
                <tr>
                  <td>{{ $item->id_gallery }}</td>
                  <td>{{ $item->travel_package->title }}</td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px"
                      class="img-thumbnail" />
                  </td>
                  <td>
                    <a href="{{ route('gallery.edit', $item->id_gallery) }}" class="btn btn-sm btn-info">
                      <i class="fa fa-pencil-alt"></i>
                    </a>

                    <form action="{{ route('gallery.destroy', $item->id_gallery) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="7" class="text-center">Data Kosong</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
