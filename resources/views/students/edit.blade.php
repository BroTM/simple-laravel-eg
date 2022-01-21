<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Edit</title>
</head>
<body>
    <form action="{{route('students.update',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="sid"> Student id</label>
        <input type="text" name="sid" value="{{$student->id}}" placeholder="id">

        <label for="sname">Name</label>
        <input type="text" name="sname" value="{{$student->name}}" placeholder="name">

        <label for="srno">Name</label>
        <input type="text" name="srno" value="{{$student->rno}}" placeholder="rno">

        <input type="submit" value="Update">
        <a href="{{route('students.index')}}">Cancel</a>


    <form>
</body>
</html>
