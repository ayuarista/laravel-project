@extends('layout')

@section('content')
    <div class="container">
        <h1>Create New Variant</h1>

        <form action="{{ route('variant.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Variant Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Create Variant</button>
        </form>

        <a href="{{ route('variant.index') }}" class="btn btn-secondary mt-3">Back to Variants</a>
    </div>
@endsection
