<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Features</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laravel Features</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Feature Name</th>
            <th>Description</th>
        </tr>
        @foreach($features as $feature)
        <tr>
            <td>{{ $feature->id }}</td>
            <td>{{ $feature->name }}</td>
            <td>{{ $feature->description }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
 