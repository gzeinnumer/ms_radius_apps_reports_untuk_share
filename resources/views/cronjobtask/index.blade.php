@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h4>List Task</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Domain</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        @if (str_contains($d->domain, 'https'))
                            <td><a href="{{ $d->domain }}" target="_blank">{{ $d->domain }}</a></td>
                        @else
                            <td>{{ $d->domain }}</td>
                        @endif
                        <td><b>{{ $d->created_at }}</b> : {{ $d->msg }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
