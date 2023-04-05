<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($chats as $chat)

        <label for="">Name : </label>
        <span>{{ $chat->subject }}</span>
        <br>
        <label for="">Message : </label>
        <span>{!! $chat->message !!}</span>
    @endforeach
</body>
</html>