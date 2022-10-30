@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
  <main>
    <section class="section-details-header"></section>
    <section class="section-details-contents">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>Republic of Indonesia Raya</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img
                    src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    class="xzoom"
                    id="xzoom-default"
                    xoriginal="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                  />
                </div>
                <div class="xzoom-thumbs">
                  <a href="{{ url("frontend/assets/images/pic_featured.jpg") }}">
                    <img
                      src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                      class="xzoom-gallery"
                      width="127"
                      xpreview="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    />
                  </a>
                  <a href="{{ url("frontend/assets/images/pic_featured.jpg") }}">
                    <img
                      src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                      class="xzoom-gallery"
                      width="127"
                      xpreview="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    />
                  </a>
                  <a href="{{ url("frontend/assets/images/pic_featured.jpg") }}">
                    <img
                      src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                      class="xzoom-gallery"
                      width="127"
                      xpreview="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    />
                  </a>
                  <a href="{{ url("frontend/assets/images/pic_featured.jpg") }}">
                    <img
                      src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                      class="xzoom-gallery"
                      width="127"
                      xpreview="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    />
                  </a>
                  <a href="{{ url("frontend/assets/images/pic_featured.jpg") }}">
                    <img
                      src="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                      class="xzoom-gallery"
                      width="127"
                      xpreview="{{ url("frontend/assets/images/pic_featured.jpg") }}"
                    />
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>
                Nusa Penida is an island southeast of Indonesia’s island Bali
                and a district of Klungkung Regency that includes the
                neighbouring small island of Nusa Lembongan. The Badung Strait
                separates the island and Bali. The interior of Nusa Penida is
                hilly with a maximum altitude of 524 metres. It is drier than
                the nearby island of Bali.
              </p>
              <p>
                Bali and a district of Klungkung Regency that includes the
                neighbouring small island of Nusa Lembongan. The Badung Strait
                separates the island and Bali.
              </p>
              <div class="row features">
                <div class="col-md-4">
                  <div class="description">
                    <img
                      src="{{ url("frontend/assets/icons/ic_event.png") }}"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>Tari Kecak</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img
                      src="{{ url("frontend/assets/icons/ic_language.png") }}"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img
                      src="{{ url("frontend/assets/icons/ic_foods.png") }}"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Foods</h3>
                      <p>Local Foods</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img
                  src="{{ url("frontend/assets/images/profile-1.png") }}"
                  class="member-image me-0"
                />
                <img
                  src="{{ url("frontend/assets/images/profile-2.png") }}"
                  class="member-image me-1"
                />
                <img
                  src="{{ url("frontend/assets/images/profile-3.png") }}"
                  class="member-image me-1"
                />
                <img
                  src="{{ url("frontend/assets/images/profile-4.png") }}"
                  class="member-image me-1"
                />
                <img
                  src="{{ url("frontend/assets/images/profile-5.png") }}"
                  class="member-image me-1"
                />
              </div>
              <hr />
              <h2>Trip Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%" class="thead">Date of Departure</th>
                  <td width="50%" class="text-end tcell">22 Aug, 2019</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Durations</th>
                  <td width="50%" class="text-end tcell">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Type</th>
                  <td width="50%" class="text-end tcell">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Price</th>
                  <td width="50%" class="text-end tcell">$80.00 / person</td>
                </tr>
              </table>
            </div>
            <div class="join-container d-grid gap-2">
              <a
                href="/checkout"
                class="btn btn-block btn-join-now mt-3 py-2"
              >
                Join Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url("frontend/libraries/xzoom/xzoom.css") }}" />
@endpush

@push('addon-script')
  <script src="{{ url("frontend/libraries/xzoom/xzoom.min.js") }}"></script>
  <script>
    $(document).ready(function () {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15,
      })
    })
  </script>
@endpush