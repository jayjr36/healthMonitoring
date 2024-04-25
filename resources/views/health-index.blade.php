<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Quality Monitoring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr class="text-center">HEALTH DATA</tr>
                <tr>
                    <th>#</th>
                    <th>Oxygen Level</th>
                    <th>Heart rate</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($healthdata as $health)
                    <tr>
                        <td>{{ $health->id }}</td>
                        <td>{{ $health->oxygen_level }}</td>
                        <td>{{ $health->heart_rate }}</td>
                        <td>{{ $health->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.get('/', function(data) {
                    $('.table thead tbody').empty();
                    $('.table thead tbody').append(data);
                });
            }, 3000);
        });
    </script>
</body>

</html>
