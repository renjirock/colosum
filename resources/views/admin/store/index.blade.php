@extends('layouts.admin.app')


@section('title')
    Tienda
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tienda</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.index')}}">Dashboard</a> / Tienda
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('show-store')
                </div>
            </div>
        </div>
    </main>
@endsection
