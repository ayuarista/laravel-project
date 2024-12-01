@extends('layout')

@section('content')
    <div class="container">
        <h1>Create New Additional</h1>

        <form action="{{ route('additional.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Additional Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description') }}</textarea>
            </div>

            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Variants</button>
                <div class="dropdown-menu p-2" id="additionalDropdown">
                    @foreach($variants as $variant)
                    <div class="form-check">
                        <input class="form-check-input"
                               type="checkbox"
                               name="variants[]"
                               value="{{ $variant->id }}"
                               id="flexCheck{{ $variant->id }}">

                        <label class="form-check-label" for="flexCheck{{ $variant->id }}">
                            {{ $variant->name }}
                        </label>
                    </div>
                @endforeach
                </div>
                </div>
            </div>

            @error('variants')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Create Additional</button>
        </form>

        <a href="{{ route('additional.index') }}" class="btn btn-secondary mt-3">Back to Additional List</a>
    </div>

    <script>
        document.getElementById('additionalDropdown').addEventListener('click', function (e) {
            e.stopPropagation();
        });
    </script>
@endsection
