@extends('layouts.store.app')


@section('title')
    Carrito
@endsection

@section('content')
<div class="col-12 mt-5">
  <div class="card mt-5 card-registration card-registration-2" style="border-radius: 15px;">
    <div class="card-body p-0">
      <div class="row g-0">
        @livewire('show-cart')
        @livewire('show-resume')
      </div>
    </div>
  </div>
</div>
@endsection
