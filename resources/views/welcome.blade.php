<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <h1>CST323 Cloud Test Application</h1>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Go to Users</a>
</div>
</body>
</html>
