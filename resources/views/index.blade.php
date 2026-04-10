<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        <h1 class="mb-4">Trains</h1>
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Leaving From</th>
                    <th>Arriving To</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Train ID</th>
                    <th>Carriages</th>
                    <th>On Time</th>
                    <th>Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->leaving_from }}</td>
                        <td>{{ $train->arriving_to }}</td>
                        <td>{{ $train->departure }}</td>
                        <td>{{ $train->arrival }}</td>
                        <td>{{ $train->train_id }}</td>
                        <td>{{ $train->carriages }}</td>
                        <td>
                            {{ $train->on_time ? 'Yes' : 'No' }}
                        </td>
                        <td>
                            {{ $train->cancelled ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>