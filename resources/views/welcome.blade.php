<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index medical page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5" style="max-width: 700px">
        <h2 class="h2 text-center mb-5 border-bottom pb-3">+</h2>
        <div class="row justify-content-center">
        <div class="col my-auto">
            <span class="border border-info justify-content-center">Patients</span>
        </div>
        <div class="col my-auto">
            <span class="border border-info justify-content-center">Doctors</span>
        </div>
        <div class="col mx-auto">
            <span class="border border-info mx-auto">Calendar</span>
        </div>
        </div>
    </div>
</body>
</html>
