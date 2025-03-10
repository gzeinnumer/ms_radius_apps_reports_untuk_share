@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h4>List Reports</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Trans Date</th>
                    <th>Investor</th>
                    <th>Name Desa</th>
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
                        <td>{{ $d->investor }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->adjusted_login_date }}</td>
                        <td>{{ $d->url_app }}</td>
                        <td>{{ $d->profile_name }}</td>
                        <td>{{ number_format($d->price_sell) }}</td>
                        <td>{{ number_format($d->qty) }}</td>
                        <td>{{ number_format($d->first_bill) }}</td>
                        {{-- <td>{{ $d->created_at }}</td> --}}
                        {{-- <td>{{ $d->updated_at }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
