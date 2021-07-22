@extends('layout')

@section('title', 'Thông tin người dùng')

@section('contents')
<div>
    <div class="mt-10 mb-5">
        <div class="col-12 " >
            <div class="col-6">
                <div class="col-3">Họ và tên : {{$user->name}}</div>
                
            </div>
        </div>
        <div class="col-12">
            <div class="col-6">
                <div class="col-10">Email : {{$user->email}}</div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-6">
                <div class="col-10">Address : {{$user->address}}</div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-6">
                <div class="col-3">Gender : {{ $user->gender == config('common.users.gender.male') ? 'Nam' : 'Nữ' }}</div>
            </div>
        </div>
        
    </div>
</div>
<div>
    <p>Lịch sử mua hàng</p>
    <table  class="table table-striped">
        <thead class="table-dark">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Number</td>
                <td>Address</td>
                <td>Price</td>
                <td>Invoice Status</td>
                <td>Create At</td>
                
            </tr>
        </thead>
        <tbody>
            @foreach($user->invoices as $invoice)
            <tr>
                <td>{{$invoice->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$invoice->number}}</td>
                <td>{{$invoice->address}}</td>
                <td>{{$invoice->total_price}}</td>
                <td>{{$invoice->status}}</td>
                <td>{{$invoice->created_at}}</td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection