<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="MSRadius Report Loader" />
    <meta name="author" content="MSRadius" />
    <meta name="keywords" content="MSRadius">
    <link rel="icon" href="/assets/msradius-1-tab-white.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/msradius-1-tab-white.png" type="image/x-icon">
    <title>Database Apps</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    @include('layouts.partials.navbar')

    <main class="container">@yield('content')</main>

</body>

</html>
