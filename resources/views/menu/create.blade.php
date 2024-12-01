@extends('layout')
@section('content')
    <form action="{{ route('menu.store') }}" method="POST" class="container-lg">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter menu name" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter menu price" min="10" required>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Additional
            </button>
            <div class="dropdown-menu p-2" id="additionalDropdown">
                @foreach($additionals as $additional)
                    <div class="form-check">
                        <input class="form-check-input"
                               type="checkbox"
                               name="additional[]"
                               value="{{ $additional->id }}"
                               id="flexCheck{{ $additional->id }}">

                        <label class="form-check-label" for="flexCheck{{ $additional->id }}">
                            {{ $additional->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Menu</button>
    </form>

    <script>
        document.getElementById('additionalDropdown').addEventListener('click', function (e) {
            e.stopPropagation();
        });
    </script>

@endsection
