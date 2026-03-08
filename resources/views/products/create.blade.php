<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>เพิ่มสินค้า</title>
</head>

<body>
    <h1>เพิ่มสินค้าใหม่</h1>

    <form action="/products" method="POST">
        @csrf

        {{-- ชื่อสินค้า --}}
        <label>ชื่อสินค้า</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        {{-- ราคา --}}
        <label>ราคา</label><br>
        <input type="number" name="price" value="{{ old('price') }}">
        @error('price')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        {{-- รายละเอียด --}}
        <label>รายละเอียด</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">บันทึก</button><br><br>
        <a href="/products">กลับหน้ารายการสินค้า</a>

    </form>
</body>

</html>
