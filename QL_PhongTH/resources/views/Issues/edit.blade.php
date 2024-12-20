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
    <title>Form Edit</title>
</head>

<body>

    <h1 style="margin: 50px 50px">Update Issue</h1>

    <form action="{{ route('Issues.update', $issues->id) }}" method="POST" style="margin: 50px 50px">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="computer_id">Computer ID</label>
            <select name="computer_id" class="form-control" required>
                @foreach($computers as $computer)
                <option value="{{ $computer->id }}" {{ $computer->id == $issues->computer_id ? 'selected' : '' }}>{{$computer->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="reported_by">Reported by</label>
            <input type="text" name="reported_by" class="form-control" value="{{ $issues->reported_by}}" required>
        </div>
        <div class="form-group">
            <label for="reported_date">Reported date</label>
            <input type="datetime-local" name="reported_date" class="form-control" value="{{ $issues->reported_date}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $issues->description }}" required>
        </div>
        <div class="form-group">
            <label for="urgency">Urgency</label>
            <select name="urgency" id="urgency">
                <option value="Low" {{ $issues->urgency === 'Low' ? 'selected' : '' }}>Low</option>
                <option value="Medium" {{ $issues->urgency === 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="High" {{ $issues->urgency === 'High' ? 'selected' : '' }}>High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Open" {{ $issues->status === 'Open' ? 'selected' : '' }}>Open</option>
                <option value="In Progress" {{ $issues->status === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                <option value="Resolved" {{ $issues->status === 'Resolved' ? 'selected' : '' }}>Resolved</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

</body>