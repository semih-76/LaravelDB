<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Médiathèque')</title>
</head>
<body>

@if(session('success'))
    <div style="background:green; color:white; padding:10px;">
        {{ session('success') }}
    </div>
@endif

@if(session('info'))
    <div>
        {{ session('success') }}
    </div>
@endif

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@if ($errors->any())

@endif
@yield('content')
</body>
</html>



