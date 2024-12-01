@extends ('layout')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Menu</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->price }}</td>
                    <td><div></div></td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection
