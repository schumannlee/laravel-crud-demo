<h1>Novo Produto</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label>Nome:</label>
        <input type="text" name="name" required>
    </div>
    <br>
    <div>
        <label>Preço:</label>
        <input type="number" name="price" step="0.01" required>
    </div>
    <br>
    <div>
        <label>Descrição:</label>
        <textarea name="description"></textarea>
    </div>
    <br>
    <button type="submit">Salvar Produto</button>
</form>

<br>
<a href="{{ route('products.index') }}">Voltar para a lista</a>