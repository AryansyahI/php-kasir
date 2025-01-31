<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
</head>
<body>
    <h1>Add Transaction</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <label for="product">Product:</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}</option>
            @endforeach
        </select>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" min="1" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
