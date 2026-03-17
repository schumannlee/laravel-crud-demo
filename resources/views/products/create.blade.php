@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1 class="h3 mb-4">Novo Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nome do Produto</label>
            <input type="text" name="name" class="form-control" placeholder="Ex: Cadeira Gamer" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" class="form-control" step="0.01" placeholder="0.00" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Opcional"></textarea>
        </div>

        <button type="submit" class="btn btn-success w-100">Salvar Produto</button>
    </form>
    <hr>
    <a href="{{ route('products.index') }}" class="text-secondary">Voltar</a>
</div>
@endsection