<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laravel</h1>
    <p>Hello {{$name}}</p>
    <p>The current time is: {{ time() }}</p>
    @verbatim
    <div class="container">
        Hello, {{ $name }}.
    </div>
    @endverbatim
    <p>This is a message, that is received by every view: {{ $this_global }}</p>
</body>
</html>