<html>
<head>
    <title>welcome</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <p>Привет, {{ $first_name }}!</p>
        </div>
    </div>
</div>
</body>
</html>
