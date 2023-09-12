<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mailData['title'] }} | abdullajonov.uz</title>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
<body>
    <h4>User: {{ $mailData['from_name'] }}</h4>
    <h3>Subject: {{ $mailData['title'] }}</h3>
    <h3>User Email: {{ $mailData['email'] }}</h3>
    <h4>Message: {{ $mailData['body'] }}</h4>
</body>
</html>