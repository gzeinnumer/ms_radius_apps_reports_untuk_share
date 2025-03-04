@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h4>List Task</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Investor</th>
                    <th>Name</th>
                    <th>Domain</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->investor }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->domain }}</td>
                        <td><b>{{ $d->created_at }}</b> : {{ $d->msg }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
