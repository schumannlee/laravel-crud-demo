@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4 border-warning">
    <h1 class="h3 mb-4 text-warning-emphasis">Editar Produto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome do Produto</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning w-100 text-dark fw-bold">Atualizar</button>
    </form>
    <hr>
    <a href="{{ route('products.index') }}" class="text-secondary">Cancelar</a>
</div>
@endsection