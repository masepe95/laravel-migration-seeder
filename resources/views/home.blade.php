<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div class="container my-5 border p-5 border-info">
    <h1>TRENI</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train Number</th>
                <th scope="col">Train Company</th>
                <th scope="col">Departing Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Leaving Time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Train Cancelled</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($trains as $train)
                <tr scope="row">
                    <td>
                        {{ $train->train_code }}
                    </td>
                    <td>
                        {{ $train->agency }}
                    </td>
                    <td>
                        {{ $train->departure_station }}
                    </td>
                    <td>
                        {{ $train->arrival_station }}
                    </td>
                    <td>
                        {{ $train->departure_time }}
                    </td>
                    <td>
                        {{ $train->arrival_time }}
                    </td>
                    <td>
                        @if ($train->cancelled)
                            <strong class="text-danger">
                                YES
                            </strong>
                        @else
                            <p class="text-success">
                                NO
                            </p>
                        @endif
                    </td>
                    <td>
                        @if ($train->on_time)
                            <strong class="text-warning">
                                DELAYED
                            </strong>
                        @else
                            <p class="text-success">
                                ON TIME
                            </p>
                        @endif
                    </td>
                </tr>
            @empty
                <tr scope="row" class="text-danger">No Train Available</tr>
            @endforelse
        </tbody>
    </table>
</div>


</body>

</html>