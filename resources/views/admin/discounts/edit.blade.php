@extends('layouts.admin.app')


@section('title')
    Editar descuento
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Editar descuento</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.index')}}">Dashboard</a> /
                    <a href="{{route('admin.discounts.index')}}">Descuentos</a> / Editar descuento
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('edit-discount', ['discount_id' => $id], key($id))
                </div>
            </div>
        </div>
    </main>
@endsection
