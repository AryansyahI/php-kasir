<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p><strong>Price:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>
</html>
