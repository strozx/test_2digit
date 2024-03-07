<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <div class="container">
    <div class="row mt-5">
        <form action="{{ route('upload.csv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="csv_file">Choose CSV File:</label>
                <input type="file" name="csv_file" id="csv_file">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">EMŠO</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Description</th>
                <th scope="col">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->emso }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->description }}</td>
                    <td>{{ $person->country->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $persons->links() }}
        </div>
</div>
         
    </body>
</html>
