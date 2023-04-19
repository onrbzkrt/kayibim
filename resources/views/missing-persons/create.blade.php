@extends('layouts/app')

@section('content')
  <h1>Kayıp Kişi Formu</h1>

  <form action="{{ route('missing-persons.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="surname" class="form-label">Surname</label>
      <input type="text" class="form-control" id="surname" name="surname" required>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="mb-3">
      <label for="photo" class="form-label">Photo</label>
      <input type="file" class="form-control" id="photo" name="photo" required>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
