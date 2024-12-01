@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Variant</h1>

        <form action="{{ route('variant.update', $variant->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Variant Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $variant->name) }}" required>
            </div>

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Update Variant</button>
        </form>

        <a href="{{ route('variant.index') }}" class="btn btn-secondary mt-3">Kembali ke Variant</a>
    </div>
@endsection

