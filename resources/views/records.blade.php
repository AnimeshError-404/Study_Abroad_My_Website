<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Your Application</title>
</head>
<body>
    <center><h1>Your Application</h1></center>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Subject</th>
              </tr>
            </thead>
            <tbody>
  @if ($records->last())
  <tr>
    <td>{{ $records->last()->name }}</td>
    <td>{{ $records->last()->email }}</td>
    <td>{{ $records->last()->number }}</td>
    <td>{{ $records->last()->subject }}</td>
  </tr>
  @else
  <tr>
    <td colspan="4">No records found</td>
  </tr>
  @endif
</tbody>

          </table>
</body>
</html>