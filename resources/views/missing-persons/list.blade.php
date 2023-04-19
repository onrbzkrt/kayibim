@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    @foreach ($missingPersons as $person)
    <div class="col">
        <div class="card h-100">
            <div class="aspect-ratio aspect-ratio-1x1">
                <img class="card-img-top aspect-ratio-item" src="{{ asset('storage/'.$person->photo) }}" alt="{{ $person->first_name }} {{ $person->last_name }}" data-person-id="{{ $person->id }}" data-bs-toggle="modal" data-bs-target="#personModal">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="mt-auto card-title">{{ $person->name }} {{ $person->surname }}</h5>
                <p class="mt-3 card-text">{{ $person->address }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>



    <div class="modal fade" id="personModal" tabindex="-1" aria-labelledby="personModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personModalLabel">Missing Person Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" id="personImage" src="" alt="">
        <div id="personDetails">
          <h5 class="mt-3" id="personFullName"></h5>
          <p id="personAddress"></p>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection

