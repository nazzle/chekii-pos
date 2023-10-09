@extends('layouts.admin')

@section('title', 'Suppliers')
@section('content-header', 'Suppliers List')
@section('content-actions')
    <a href="{{route('suppliers.create')}}" class="btn btn-primary">Add Supplier</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card product-list">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Created</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($suppliers  as $key =>  $supplier)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->telephone}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>{{$supplier->city.', '.$supplier->country}}</td>
                        <td>{{$supplier->created_at->format('d/m/Y')}}</td>
                        <td>{{\App\Models\Supplier::find(1)->getUser->email}}</td>
                        <td>
                            <a href="{{ route('products.edit', $supplier) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete" data-url="{{route('products.destroy', $supplier)}}"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $suppliers->render() }}
        </div>
    </div>
@endsection
