@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h4 id="form-title">Tambah Domain</h4>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk Tambah & Update -->
        <form id="domain-form" action="/domains/store" method="POST">
            @csrf
            <input type="hidden" id="domain-id" name="id">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="site_id" class="form-label">Site ID</label>
                    <input type="text" class="form-control" id="site_id" name="site_id" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="site_name" class="form-label">Site Name</label>
                    <input type="text" class="form-control" id="site_name" name="site_name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="island" class="form-label">Island</label>
                    <input type="text" class="form-control" id="island" name="island" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" id="area" name="area" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lat" class="form-label">Latitude</label>
                    <input type="text" class="form-control" id="lat" name="lat" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lng" class="form-label">Longitude</label>
                    <input type="text" class="form-control" id="lng" name="lng" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="domain" class="form-label">Domain</label>
                    <input type="text" class="form-control" id="domain" name="domain" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="investor" class="form-label">Investor</label>
                    <input type="text" class="form-control" id="investor" name="investor" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100" id="submit-button">Tambah</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-secondary w-100" id="cancel-update" style="display: none;">Batal</button>
                </div>
            </div>
        </form>


        <br>
        <h4>List Domain</h4>

        <div style="overflow-x: auto; width: 100%;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Site ID</th>
                        <th>Site Name</th>
                        <th>Island</th>
                        <th>Area</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Investor</th>
                        <th>Nama</th>
                        <th>Domain</th>
                        {{-- <th>Created At</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->site_id }}</td>
                            <td>{{ $d->site_name }}</td>
                            <td>{{ $d->island }}</td>
                            <td>{{ $d->area }}</td>
                            <td>{{ $d->lat }}</td>
                            <td>{{ $d->lng }}</td>
                            <td>{{ $d->investor }}</td>
                            <td>{{ $d->name }}</td>
                            <td><a href="{{ $d->domain }}" target="_blank">{{ $d->domain }}</a></td>
                            {{-- <td>{{ $d->created_at }}</td> --}}
                            <td>
                                <button type="button" class="btn btn-warning btn-sm edit-btn" data-id="{{ $d->id }}" data-site_id="{{ $d->site_id }}" data-site_name="{{ $d->site_name }}" data-island="{{ $d->island }}" data-area="{{ $d->area }}" data-lat="{{ $d->lat }}" data-lng="{{ $d->lng }}" data-name="{{ $d->name }}" data-domain="{{ $d->domain }}" data-investor="{{ $d->investor }}">
                                    Edit
                                </button>
                                <form action="/domains/destroy/{{ $d->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const fields = ['domain-id', 'name', 'domain', 'investor', 'site_id', 'site_name', 'island', 'area', 'lat', 'lng'];

                fields.forEach(field => {
                    let element = document.getElementById(field);
                    let dataValue = this.getAttribute('data-' + field);

                    if (element) { // Pastikan elemen ada sebelum mengakses value
                        element.value = dataValue || '';
                    }
                });

                document.getElementById('domain-form').action = `/domains/update/${this.getAttribute('data-id')}`;
                document.getElementById('submit-button').textContent = "Update";
                document.getElementById('submit-button').classList.replace('btn-primary', 'btn-warning');
                document.getElementById('form-title').textContent = "Edit Domain";
                document.getElementById('cancel-update').style.display = "inline-block";
            });
        });


        document.getElementById('cancel-update').addEventListener('click', function() {
            document.getElementById('domain-form').reset();
            document.getElementById('domain-form').action = "/domains/store";
            document.getElementById('submit-button').textContent = "Tambah";
            document.getElementById('submit-button').classList.replace('btn-warning', 'btn-primary');
            document.getElementById('form-title').textContent = "Tambah Domain";
            document.getElementById('cancel-update').style.display = "none";
        });
    </script>
@endsection
