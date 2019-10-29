<!--練習 3-2：建立 resources/views/hello資料夾及 index.blade.php-->
@extends('layouts.master')
@section('title','Hello')
@section('content')
    <h1>Thisis{{$name}}'shome.</h1>
@endsection