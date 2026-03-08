<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

<body>
    {{-- {{ dd($products) }} --}}
    @if (session('success'))
        <p style="color:green;">
            {{ session('success') }}
        </p>
    @endif

    <h1>รายการสินค้า</h1>
    <h2>จำนวนสินค้าทั้งหมด: {{ $total }} รายการ</h2>

    <form method="GET" action="/products">
        <input type="text" name="search" placeholder="ค้นหาสินค้า" value="{{ request('search') }}">

        <button type="submit">ค้นหา</button>
    </form>
    
    @foreach ($products as $product)
        <p>
            {{ $product->name }} - {{ $product->price }} บาท

            @if ($product->price > 1000)
                <strong style="color:red;">(สินค้าราคาแพง)</strong>
            @endif

            @if ($product->price < 1000)
                <strong style="color:green;">(สินค้าราคาถูก)</strong>
            @endif

            <a href="{{ route('products.edit', $product->id) }}">แก้ไข</a>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;"
            onsubmit="return confirm('ต้องการลบหรือไม่')">
            @csrf
            @method('DELETE')
            <button type="submit">ลบ</button>
        </form>

        </p>
    @endforeach
    <a href="/products/create">กลับหน้าเพิ่มรายการสินค้า</a><br><br>
    {{ $products->links() }}

</body>

</html>
