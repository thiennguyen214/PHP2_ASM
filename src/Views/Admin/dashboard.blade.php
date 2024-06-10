@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')
<p>Welcome to Admin</p>
<nav>
    <a href="{{url('admin/users')}}">Quan ly nguoi dung</a>
</nav>
@endsection
