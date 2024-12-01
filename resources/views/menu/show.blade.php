@extends('layout')

@section('content')
<div>
    <h1>{{$menu->name}}</h1>
    <p>{{$menu->price}}</p>
    <h2>Additional : </h2>
</div>
@foreach($menu->additional as $additional)
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h2 class="card-title text-primary">{{ $additional->name }}</h2>
        <p class="card-text">{{ $additional->description }}</p>
        <h5 class="mt-3 text-secondary">Variants</h5>
        <ul class="list-group list-group-flush">
            @if(!empty($additional->variants) && $additional->variants->isNotEmpty())
            @foreach($additional->variants as $variant)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $variant->name }}
            </li>
            @endforeach
            @else
            <li class="list-group-item text-muted">Tidak ada Variant</li>
            @endif
        </ul>
    </div>
</div>
@endforeach
<div class="mt-4">
    <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali ke Menu</a>
</div>
@endsection
