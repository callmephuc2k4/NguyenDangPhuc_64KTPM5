<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <title>Create Form</title>
</head>

<body>
    <form action="{{route('Issues.save')}}" method="POST" style="margin: 50px 50px">
        @csrf
        <div class="mb-3 form-group">
            <label for="computer_id">Computer ID</label>
            <select name="computer_id" id="computer_id" required>
                @foreach($computers as $computer)
                <option value="{{ $computer->id }}">{{$computer->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="reported_by">Reported by</label>
            <input type="text" name="reported_by" class="form-control" required>
        </div>
        <div class="mb-3 form-group">
            <label for="reported_date">Reported date</label>
            <input type="datetime-local" name="reported_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="urgency">Urgency</label>
            <select name="urgency" id="urgency">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
</body>

</html>