@extends('layouts.admin.app')


@section('title')
    Productos
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Productos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.index')}}">Dashboard</a> / Productos
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-11 pt-1 pb-1">
                            <i class="fas fa-table me-1"></i>
                            Lista de productos
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn btn-primary" href="{{route('admin.products.create')}}"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @livewire('show-products')
                </div>
            </div>
        </div>
    </main>
@endsection
