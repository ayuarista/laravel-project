@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="text-primary">{{ $additional->name }}</h1>
        <p class="text-muted">{{ $additional->description }}</p>
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Variants</h4>
        </div>
        <div class="card-body">
            @if($additional->variants->isNotEmpty())
            <ul class="list-group list-group-flush">
                @foreach($additional->variants as $variant)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $variant->name }}
                </li>
                @endforeach
            </ul>
            @else
            <p class="text-muted">Tidak ada variant</p>
            @endif
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('additional.index') }}" class="btn btn-secondary">Kembali ke Additional</a>
    </div>
</div>
@endsection
