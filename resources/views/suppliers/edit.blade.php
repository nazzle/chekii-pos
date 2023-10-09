@extends('layouts.admin')

@section('title', 'Add Supplier')
@section('content-header', 'Add New Supplier')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="supplierCode">Supplier Code</label>
                        <input type="text" name="supplierCode" class="form-control @error('supplierCode') is-invalid @enderror" id="supplierCode"
                               placeholder="Supplier Code" value="{{ old('supplierCode') }}">
                        @error('supplierCode')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                               placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="tin">Taxpayer Identity Number (TIN)</label>
                        <input type="text" name="tin" class="form-control @error('tin') is-invalid @enderror" id="tin"
                               placeholder="TIN Number" value="{{ old('tin') }}">
                        @error('tin')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="telephone">Telephone</label>
                        <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone"
                               placeholder="Telephone" value="{{ old('telephone') }}">
                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address"
                               placeholder="Supplier Address" value="{{ old('address') }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city"
                               placeholder="City" value="{{ old('city') }}">
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country"
                               placeholder="Country" value="{{ old('country') }}">
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary col-md-12 col-sm-12" type="submit">Save Details</button>
                </div>
            </form>
        </div>
    </div>
@endsection
