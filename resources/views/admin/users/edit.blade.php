@extends("layout")

@section('title', 'Edit User')
@section('contents')
<h1>Sửa tài khoản</h1>
<form method="POST" action="{{ route('admin.users.update', [ 'id' => $data->id ])}}">
    @csrf
    <div class="mt-3">
        <label>Name</label>
        <input class="mt-3 form-control" value="{{ $data->name}}" type="text" name="name" />
    </div>
    <div class="mt-3">
        <label>Email</label>
        <input class="mt-3 form-control" value="{{ $data->email}}" type="email" name="email" />
    </div>
    <div class="mt-3">
        <label>Address</label>
        <input class="mt-3 form-control" value="{{ $data->address }}" type="text" name="address" />
    </div>
    <div class="mt-3">
        <label>Gender</label>
        <select class="mt-3 form-control" name="gender">
            <option value="1" {{$data->gender == 1 ? "selected" : ""}}>Male</option>
            <option value="0" {{$data->gender == 0 ? "selected" : ""}}>Female</option>
        </select>
    </div>
    <div class="mt-3">
        <label>Role</label>
        <select class="mt-3 form-control" name="role">
            <option value="0" {{$data->role == 1 ? "selected" : ""}}>User</option>
            <option value="1" {{$data->role == 2 ? "selected" : ""}}>Admin</option>
        </select>
    </div>

    <button class="mt-3 btn btn-primary">Sửa</button>
</form>
@endsection