<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
    {{$user->name}}
    {{$user->email}}
    <form action="http://localhost/aptech-php-14-nguyenhuan/php/2018-09-30/public/xoaNguoiDung/{{$user->id}}" method="POST">
        {{csrf_field()}}
        <button>Xoa</button>
    </form>
</body>
</html>
  