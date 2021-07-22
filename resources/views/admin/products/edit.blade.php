@extends("layout")

@section('title', 'Edit User')
@section('contents')
<h1>Sửa Sản Phẩm</h1>
<form method="POST" action="{{ route('admin.products.update', [ 'id' => $data->id ])}}">
    @csrf
    <div class="mt-3">
        <label>Name</label>
        <input class="mt-3 form-control" value="{{ $data->name}}" type="text" name="name" />
    </div>
    <div class="mt-3">
        <label>Price</label>
        <input class="mt-3 form-control" value="{{ $data->price}}" type="number" name="price" />
    </div>
    <div class="mt-3">
        <label>Image</label>
        <input class="mt-3 form-control" value="{{ $data->image }}" type="text" name="image" />
    </div>
    <div class="mt-3">
        <label>Quantity</label>
        <input class="mt-3 form-control" value="{{ $data->quantity}}" type="number" name="quantity" />
    </div>
    <label>CategoryID</label>
    <select name="category_id" class="mt-3 form-control">
        @foreach($listCate as $item)
        <option value="{{$item->id}}" {{$item->id == $data->category_id ? 'selected' : ''}}>{{$item->name}}</option>
        @endforeach
    </select>
    

    <button class="mt-3 btn btn-primary">Sửa</button>
</form>
@endsection