<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/testing.css') }}" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
    {{-- <style>
        /* body {
            background-color: lavender;
        } */
    </style> --}}

</head>

<body>
    <div id="app">
        <i class="far fa-smile icon"></i>
        <i class="fas fa-cloud icon"></i>
        <i class="fas fa-heart icon"></i>
        <i class="fas fa-car icon"></i>
        <i class="fas fa-file icon"></i>
        <i class="fas fa-bars icon"></i>
        <h1 class="viewport"> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1> Hello World!</h1>
        <h1 class="capitalize"> capitalize letter here !</h1>
        <h1 class="lowercase"> Lower case letter</h1>
        <h1 class="uppercase shadow">Uppercase</h1>

        <h2>Heading</h2>
        <p class="font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illo deleniti ex rerum
            dignissimos impedit voluptatem vel voluptates id deserunt. Repellendus repellat ex, quo temporibus iste
            eligendi quas voluptatem voluptas!</p>
        <p class='lorem'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odio quis beatae provident
            dolorem
            repudiandae, eveniet esse. Harum omnis doloribus placeat numquam. Atque delectus nostrum quis soluta nisi,
            eius
            temporibus?</p>
        <p class="normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae quia fugiat consectetur
            laborum
            praesentium
            expedita dolores vel natus ipsa quaerat rerum, necessitatibus hic distinctio voluptates, tenetur, sint esse
            velit dignissimos.</p>

        <div class="outline">
            Hello, here is outline box!
            <p class="oblique"> font style is oblique</p>
            <p class="italic"> font style is oblique</p>
        </div>

        <a href="{{route('branch')}}">Go to second page</a>
    </div>
</body>

</html>
