<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row mg-top-100">
            <h1>List of All User</h1>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Department</th>
                        <th scope="col">Type</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Actions</th>                    
                    </tr>
                </thead>
                <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->id }}</th>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->department->implode('department_name') }}</td>
                        <td>{{ $employee->language->implode('skill',',') }}</td>
                        <td>{{ $employee->language->implode('language_name',',') }}</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>jacob@gmail.com</td>
                        <td>Sale Marking</td>
                        <td>Bussiness Development</td>
                        <td>Social media marking</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>larry@gmail.com</td>
                        <td>Production</td>
                        <td>Backend Developer</td>
                        <td>PHP, Python, HTML</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>