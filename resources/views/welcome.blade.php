<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index medical page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>

    <div class="container mt-5" style="max-width: 700px">
        <div class="row">
        <div class="col">
            <span class="">
                <a href="./users" class="text-decoration-none">
                    <i class="bi bi-person"></i> Patients
                </a>
            </span>
        </div>
        <div class="col">
            <a href="./doctors" class="text-decoration-none">
                <span class="bi bi-activity"> Doctors</span>
            </a>
        </div>
        <div class="col">
            <span class="">
                <a href="./calendar" class="text-decoration-none">
                    <i class="bi bi-calendar"></i> Calendar
                </a>
            </span>
        </div>
        <div class="col">
            <span class="">
                <a href="./api/v1" class="text-decoration-none">
                    <i class="bi bi-box-arrow-in-up-left"></i> Api
                </a>
            </span>
        </div>
        </div>
    </div>
</body>
</html>
