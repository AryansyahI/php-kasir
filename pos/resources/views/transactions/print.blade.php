<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Transaction</title>
</head>
<body>
    <h1>Transaction Details</h1>
    <p><strong>Product:</strong> {{ $transaction->product->name }}</p>
    <p><strong>Quantity:</strong> {{ $transaction->quantity }}</p>
    <p><strong>Total Price:</strong> Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</p>
    <button onclick="window.print()">Print</button>
    <a href="{{ route('transactions.create') }}">New Transaction</a>
</body>
</html>
