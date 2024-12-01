@extends('layout')
@section('content')
    <form action="{{ route('additional.update', $additional->id) }}" method="POST" class="container-lg">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $additional->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required>{{ $additional->description }}</textarea>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Variants
            </button>
            <div class="dropdown-menu p-2" id="variantsDropdown">
                @foreach($variants as $variant)
                    <div class="form-check">
                        <input class="form-check-input"
                               type="checkbox"
                               name="variants[]"
                               value="{{ $variant->id }}"
                               id="variant{{ $variant->id }}"
                            {{ $additional->variants->contains($variant->id) ? 'checked' : '' }}>

                        <label class="form-check-label" for="variant{{ $variant->id }}">
                            {{ $variant->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Additional</button>
    </form>

@endsection
