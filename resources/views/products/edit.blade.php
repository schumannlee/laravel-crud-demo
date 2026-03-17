<h1>Editar Produto</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}" required>
    <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
    <textarea name="description">{{ $product->description }}</textarea>
    <button type="submit">Atualizar</button>
</form>