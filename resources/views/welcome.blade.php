<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

     
    </head>
    <body class="antialiased">
        <form action="{{ route('upload.csv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_file">
            <button type="submit">Upload CSV</button>
        </form>
    </body>
</html>
