<!DOCTYPE html>
<html lang="hu">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<head>

    <title>Üzenet a tanárnak</title>
</head>

<body>
    <h1>Tanárnak üzenet</h1>
    <p>Kedves {{ $det['teachername'] }},</p>

    <p>{{ $det['question'] }},</p>
    <p>{{ $det['description'] }}</p>

    <p>Üdvözlettel,<br>{{ $det['name'] }}</p>
</body>

</html>
