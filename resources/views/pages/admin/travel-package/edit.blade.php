@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
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
          <form action="{{ route ('travel-package.update', $item->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="from-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $item->title }}">
              </div>
              <div class="from-group">
                  <label for="location">Location</label>
                  <input type="text" name="location" placeholder="Location" class="form-control" value="{{ $item->location }}">
              </div>
              <div class="from-group">
                  <label for="about">About</label>
                  <textarea name="about" rows="10" class="d-block w-100 form-control" >{{ $item->about }}</textarea>
              </div>
              <div class="from-group">
                  <label for="featured_event">Feature Event</label>
                  <input type="text" name="featured_event" placeholder="Featured Event" class="form-control" value="{{ $item->featured_event }}">
              </div>
              <div class="from-group">
                  <label for="language">Language</label>
                  <input type="text" name="language" placeholder="Language" class="form-control" value="{{ $item->language }}">
              </div>
              <div class="from-group">
                  <label for="foods">Foods</label>
                  <input type="text" name="foods" placeholder="Foods" class="form-control" value="{{$item->foods  }}">
              </div>
              <div class="from-group">
                  <label for="departure_date">Departure Date</label>
                  <input type="date" name="departure_date" placeholder="Departure Date" class="form-control" value="{{ $item->departure_date }}">
              </div>
              <div class="from-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" placeholder="Duration" class="form-control" value="{{ $item->duration  }}">
            </div>
            <div class="from-group">
                <label for="type">Type</label>
                <input type="text" name="type" placeholder="Type" class="form-control" value="{{  $item->type }}">
            </div>
            <div class="from-group">
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="Price" class="form-control" value="{{ $item->price  }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
          </form>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection