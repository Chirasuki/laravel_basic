<h1>แก้ไขสินค้า</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>ชื่อสินค้า</label>
    <input type="text" name="name" value="{{ $product->name }}">

    <label>ราคา</label>
    <input type="number" name="price" value="{{ $product->price }}">
    
    <label>รายละเอียด</label>
    <textarea name="description">{{ $product->description }}</textarea>

    <button type="submit">อัพเดท</button>
</form>