<!-- resources/views/products/products_pdf.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Data Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Data Products</h2>
    <table>
        <thead>
            <tr>
                <th>IMAGE</th>
                <th>TITLE</th>
                <th>PRICE</th>
                <th>STOCK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>
                    <img src="{{ public_path('storage/products/'.$product->image) }}" style="width: 100px;">
                </td>
                <td>{{ $product->title }}</td>
                <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                <td>{{ $product->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>