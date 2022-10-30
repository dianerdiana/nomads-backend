@extends('layouts.success')

@section('title', 'Success')

@section('content')
<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url("frontend/assets/icons/ic_mail.png") }}" alt="ic_mail" />
      <h1>Yay! Success</h1>
      <p>
        We've sent you email for trip instruction
        <br />
        Please read it as well
      </p>
      <a href="/" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
  </div>
</main>
@endsection