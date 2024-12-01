@extends('layout')

@section('content')
    <form action="{{ route('menu.update', $menu->id) }}" method="POST" class="container-lg">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $menu->name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ $menu->price }}">
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Additional
            </button>
            <div class="dropdown-menu p-2" id="additionalDropdown">
                @foreach($additional as $add)
                    <div class="form-check">
                        <input class="form-check-input"
                               type="checkbox"
                               name="additional[]"
                               value="{{ $add->id }}"
                               id="flexCheck{{ $add->id }}"
                            {{ $menu->additional->contains($add->id) ? 'checked' : '' }}>

                        <label class="form-check-label" for="flexCheck{{ $add->id }}">
                            {{ $add->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Update Menu</button>
    </form>

    <script>
        document.getElementById('additionalDropdown').addEventListener('click', function (e) {
            e.stopPropagation();
        });
    </script>

@endsection
