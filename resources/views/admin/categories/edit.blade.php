@extends("layout")

@section('title', 'Edit Cate')
@section('contents')
<h1>Sửa Danh Mục</h1>
<form method="POST" action="{{ route('admin.categories.update',  [ 'id' => $data->id ])}}">
    @csrf
    <div>
        <label>Name</label>
        <input class="mt-3 form-control" value="{{ $data->name}}" type="text" name="name" />
    </div>

    <button class="mt-3 btn btn-primary">Update</button>
</form>
@endsection