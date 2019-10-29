<!-- 練習 1-1:在 resources/views底下新增 home.php，並建立一個基本的 HTML 5 文件結構-->
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
-->
<!-- 練習 2-2:建立子樣板-->
@extends('layouts.master')
@section('title','Home')
@section('content')
    <h1>Home</h1>
    <p>Thisismybodycontent.</p>
@endsection
