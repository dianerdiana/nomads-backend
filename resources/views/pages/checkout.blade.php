@extends('layouts.checkout')

@section('title', 'Checkout')

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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0 mb-2">
            <div class="card card-details">

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <h1>Who is going?</h1>
              <p>
                Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
              </p>
              <div class="attendance table-responsive-sm">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nationality</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($item->details as $detail)
                      <tr>
                        <td>
                          <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60px"
                            class="rounded-circle" />
                        </td>
                        <td class="align-middle">{{ $detail->username }}</td>
                        <td class="align-middle">{{ $detail->nationality }}</td>
                        <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                        <td class="align-middle">
                          {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carvon\Carbon::now() ? 'Active' : 'Inactive' }}
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('checkout-remove', $detail->id) }}">
                            <img src="{{ url('frontend/assets/icons/ic_remove.png') }}" />
                          </a>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6" class="text-center">
                          No Visitor
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form action="" class="row">
                  <div class="col-lg-3 col-sm-12">
                    <label for="inputUsername" class="visually-hidden">
                      Name
                    </label>
                    <input type="text" name="inputUsername" placeholder="Username" id="inputUsername"
                      class="form-control mb-2 mr-sm-2" />
                  </div>

                  <div class="col-lg-2 col-sm-12">
                    <label for="inputVisa" class="visually-hidden">Visa</label>
                    <select name="inputVisa" id="inputVisa" class="form-select mb-2 mr-sm-2">
                      <option value="VISA" selected>Visa</option>
                      <option value="30 Days">30 Days</option>
                      <option value="N/A">N/A</option>
                    </select>
                  </div>

                  <div class="col-lg-4 col-sm-12">
                    <label for="doePassport" class="visually-hidden">
                      DOE Passport
                    </label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="text" id="doePassport" name="doePassport" placeholder="DOE Passport"
                        class="form-control datepicker" />
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-12">
                    <button class="btn btn-add-now mb-2 px-4">Add Now</button>
                  </div>
                </form>

                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in
                  Nomads.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Informations</h2>
              <table class="checkout-informations">
                <tr>
                  <th width="50%" class="thead">Members</th>
                  <td width="50%" class="text-end tcell">2 person</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Additional Visa</th>
                  <td width="50%" class="text-end tcell">$ 190,00</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Trip Price</th>
                  <td width="50%" class="text-end tcell">$ 80,00 / person</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Sub Total</th>
                  <td width="50%" class="text-end tcell">$ 280,00</td>
                </tr>
                <tr>
                  <th width="50%" class="thead">Total (+Unique)</th>
                  <td width="50%" class="text-end tcell text-total">
                    <span class="text-blue">$279,</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr />
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue the wonderful
                trip.
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/assets/icons/ic_bank.png') }}" alt="" class="bank-image" />
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0883 9889 7887
                      <br />
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/assets/icons/ic_bank.png') }}" alt="" class="bank-image" />
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0898 7887 5689
                      <br />
                      Bank HSBC
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container d-grid gap-2">
              <a href="{{ route('checkout-success', ':id') }}" class="btn btn-block btn-join-now mt-3 py-2">
                I Have Made Payment
              </a>
            </div>
            <div class="btn-cancel text-center mt-3">
              <a href="{{ route('detail', ':slug') }}" class="text-muted">Cancel Booking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.css') }}" />
@endpush

@push('addon-script')
  <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
  <script>
    $('.datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      icons: {
        rightIcon: `<img src="{{ url('frontend/assets/icons/ic_doe.png') }}" />`,
      },
    })
  </script>
@endpush
