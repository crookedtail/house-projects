<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }

        li.project-type-list-item {
            font-weight: bold;
        }

        li.project-list-item {
            margin-left: 1em;
        }
    </style>
</head>
<body>
<a href="/house-projects/public/">Projects Home</a>
{{--<a href="/house-projects/public/login">Login</a>--}}

<div class="container">
    @yield('content')
</div>

</body>
</html>