<!DOCTYPE html>
<html>

<head>
    <title>Districts</title>
</head>

<body>
    <h1>Districts</h1>

    @foreach ($districts as $district)
        <h2>{{ $district['district'] }}</h2>
        <ul>
            @foreach ($district['users'] as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endforeach
</body>

</html>
