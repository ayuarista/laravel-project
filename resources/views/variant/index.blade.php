@extends ('layout')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Variant</h1>
        <x-modal />
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($variants as $variant)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $variant->name }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection
