<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Prise de contact</h2>
    <ul>
        <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
        <li><strong>Email</strong> : {{ $contact['email'] }}</li>
        <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
    
</body>
</html>