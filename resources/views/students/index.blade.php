<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student CRUD</title>
    <style>
        td{width: 10%};

    </style>
</head>
<body>

    <a href="{{ URL::to('students/create') }}">Add Student</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>RNO</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->rno}}</td>
                    <td>{{$student->name}}</td>
                    <td><a href="{{route('students.edit',$student->id)}}" class="btn">Edit</a></td>
                    <td><a href="{{URL::to('students/' . $student->id . '/edit') }}" class="btn">Edit</a></td>
                    {{-- <td><a href="{{route('students.destroy')}}">Delete</a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
