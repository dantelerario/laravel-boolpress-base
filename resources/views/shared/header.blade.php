<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
   <header>
        <div class="navbar">
            <h2 class="nav-brand">Laravel Blog</h2>

            <ul class="navbar-list ml-auto">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><a href="{{ route('posts.index') }}">Blog archive</a></li>
                <li><a href="{{ route('posts.create') }}">New Post</a></li>
            </ul>
        </div>
    </header>

