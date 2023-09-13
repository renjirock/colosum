@extends('layouts.admin.app')


@section('title')
    Crear producto
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Crear producto</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.index')}}">Dashboard</a> /
                    <a href="{{route('admin.products')}}">Productos</a> / Crear producto
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('create-product')
                </div>
            </div>
        </div>
    </main>
@endsection
