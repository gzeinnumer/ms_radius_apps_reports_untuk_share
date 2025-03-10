@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h4>Reports</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Trans Date</th>
                    <th>Domain</th>
                    <th>Profile Name</th>
                    <th>Per Item</th>
                    <th>QTY</th>
                    <th>Income</th>
                    {{-- <th>created_at</th> --}}
                    {{-- <th>updated_at</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->date_ }}</td>
                        <td>{{ $d->url_app }}</td>
                        <td>{{ $d->voucher_name }}</td>
                        <td>{{ number_format($d->voucher_unit_perprice) }}</td>
                        <td>{{ number_format($d->total_unit_sold) }}</td>
                        <td>{{ number_format($d->total_sold) }}</td>
                        {{-- <td>{{ $d->created_at }}</td> --}}
                        {{-- <td>{{ $d->updated_at }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
