@extends("layout")

@section('title', 'Create Cate')
@section('contents')
<h1>Thêm Danh Mục</h1>
<form method="POST" action="{{ route('admin.categories.store')}}">
    <div>
        <label>Name</label>
        <input class="mt-3 form-control" type="text" name="name" />
    </div>

    <button class="mt-3 btn btn-primary">Create</button>
</form>
@endsection