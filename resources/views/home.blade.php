<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check if you can vote</title>
</head>
<body>
    @if($age >= 18)
        <p>You can vote!</p>
    @else
        <p>You cannot vote!</p>
    @endif
</body>
</html>