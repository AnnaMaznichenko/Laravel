<html>
<head>
    <title>Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form name="form-processor" id="form-processor" method="post" action="{{ route("store_form") }}">
                @csrf
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required="">
                    <label for="last_name">Last name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required="">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
