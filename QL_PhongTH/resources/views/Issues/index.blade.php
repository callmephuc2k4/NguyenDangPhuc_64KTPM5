<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link" href="#">Students</a>
                <a class="nav-item nav-link" href="#">Theses</a>
            </div>
        </div>
    </nav>
    <div>
        <h1 style="text-align: center">Issues List</h1>
    </div>
    <div class="container">
        <a href="{{ route('Issues.create') }}" class="btn btn-success">Add Issue</a>
    </div>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Computer Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Reporter</th>
                    <th scope="col">Reported Date</th>
                    <th scope="col">Urgency</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>
            <tbody>
                @foreach($issues as $issue)
                <tr>
                    <td>{{$issue->id}}</td>
                    <td>{{$issue->computer->computer_name}}</td>
                    <td>{{$issue->computer->model}}</td>
                    <td>{{$issue->reported_by}}</td>
                    <td>{{$issue->reported_date}}</td>
                    <td>{{$issue->urgency}}</td>
                    <td>{{$issue->status}}</td>
                    <td>
                        <a href="{{ route('Issues.edit', $issue->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('Issues.delete', $issue->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa issues này?');">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $issues->links('pagination::bootstrap-4') }}
    </div>
</body>

</html>