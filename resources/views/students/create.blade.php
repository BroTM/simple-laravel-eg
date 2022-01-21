<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Edit</title>
</head>
<body>
    <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    {{-- <form action="{{URL::to('students/store')}}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        {{-- <label for="sid"> Student id</label>
        <input type="text" name="sid" placeholder="id"> --}}

        <div name="student">
            <label for="name">Name</label>
            <input type="text" name="name"placeholder="name"><br>


            <label for="rno">Name</label>
            <input type="text" name="rno" placeholder="rno"><br>

            <input type="submit" value="Add Student">
            {{-- <a href="{{route('students.index')}}">Cancel</a> --}}
            <a href="{{URL::to('students/')}}">Cancel</a>
        </div>
    <form>
</body>
</html>
