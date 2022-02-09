<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Dati Utente:</h1>

    <ul>
        <li>
            <h5>Nome:</h5>
            <span>{{ $name }}</span>
        </li>
        <li>
            <h5>Cognome:</h5>
            <span>{{ $surname }}</span>
        </li>
        <li>
            <h6>Età:</h6>
            <span>{{ $age }}</span>
        </li>
    </ul>
</body>
</html>


