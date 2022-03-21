<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Avengers</title>
</head>
<body>
    <?php
        echo '<ul>';
        foreach($avengers as $avenger) {

            echo '<li>' . $avenger . '</li>';

        }
        echo '</ul>';
    ?>
    <ul>
        @foreach($avengers as $avenger)
            <li>{{ $avenger }}</li>
        @endforeach
    </ul>
</body>
</html>