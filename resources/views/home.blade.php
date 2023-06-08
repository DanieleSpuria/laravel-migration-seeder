<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container my-5">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">In arrivo da:</th>
                  <th scope="col">Destinazione:</th>
                  <th scope="col">Orario di partenza:</th>
                  <th scope="col">Orazio di arrivo:</th>
                  <th scope="col">Ritardo</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($trains as $train)
                  <tr>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->time_of_arrival }}</td>
                    <td>{{ ($train->in_time) ? 'Si' : 'No' }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </main>

</body>

</html>
