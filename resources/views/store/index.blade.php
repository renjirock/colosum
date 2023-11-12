@extends('layouts.store.app')


@section('title')
    {{$store ? $store->name : ''}}
@endsection

@section('content')
    <header class="py-5 bg-image-full mt-5" style="background-image: {{isset($store->cover) ? 'url(' . url(  'storage/' . $store->cover) .'); background-size: cover;' : 'linear-gradient(to right, #434343 0%, black 100%);'}}">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="{{isset($store->profile) ? url(  'storage/' . $store->profile) : 'https://dummyimage.com/150x150/6c757d/dee2e6.jpg'}}" style="max-width: 150px;" alt="profile" />
            <h1 class="text-white fs-3 fw-bolder">{{ $store ? $store->name : 'Full Width Pics'}}</h1>
            <p class="text-white-50 mb-0">{{ $store ? $store->description : 'Landing Page Template'}}</p>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        @livewire('show-items', ['store' => $id])
    </section>
@endsection
