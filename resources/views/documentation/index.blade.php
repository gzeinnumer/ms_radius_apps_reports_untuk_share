@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Cara Load Otomatis setiap hari</h1>
        <p class="lead">Catatan : aplikasi ini hanya diizinkan load data sekali sehari, mengingat beban yang tidak terprediksi seiring pertumbuhan domains/aplikasi</p>
        <p class="lead">Silahkan tanam CRON JOB pada ubuntu (Eksekusi akan di jalan setiap 00:15, meskipun cron jalan tiap menit, Laravel tetap menjalankannya satu kali sehari):</p>
        <br>
        <p class="lead">crontab -e</p>
        <p class="lead">* * * * * php /path/to/laravel/artisan schedule:run >> /dev/null 2>&1</p>
        <p class="lead">php artisan schedule:run</p>

    </div>
@endsection
