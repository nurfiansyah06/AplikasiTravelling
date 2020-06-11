@extends('layouts.success')

@section('title','Success')

@section('content')
<main>
    <div class="success mt-5 d-flex align-item-center" >
        <div class="col text-center">
          <img src="{{ url('frontend/images/ic_mail.png') }}"  alt="" srcset="">
        <h2>Yay! Success</h2>
        <p class="text-muted">We've sent you email for trip instruction <br> Please read it as well</p>

        <a href="{{ url('/') }}" class="btn btn-home mt-4 px-5">Home Page</a>
        </div>
      </div>
  </main>
@endsection