@extends('layouts.app')

@section('title', $title)
@section('subtitle', $subtitle)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-6 mx-auto text-center">

      <p><strong>Name:</strong> {{ $name }}</p>
      <p><strong>Address:</strong> {{ $address }}</p>
      <p><strong>Phone:</strong> {{ $phone }}</p>

    </div>
  </div>
</div>

@endsection
