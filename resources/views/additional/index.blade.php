@extends ('layout')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Additional</h1>
        <x-modal />
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($additionals as $additional)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $additional->name }}</td>
                    <td>{{ $additional->description }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection