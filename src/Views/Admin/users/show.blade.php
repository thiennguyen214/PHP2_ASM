<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách User</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Danh sách User</h1>

    <table class="table table-striped">
        <a href="{{url('admin/users/create/')}}">Thêm mới</a>
        <thead>
            <tr>
                <th>Truong</th>
                <th>Gia tri</th>
            </tr>
        </thead>
        <tbody>
            

            @foreach ($user as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>