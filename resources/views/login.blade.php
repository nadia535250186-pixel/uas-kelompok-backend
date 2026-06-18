<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
</head>
<body>

```
<h1>Login User</h1>

@if(session('error'))
    <p style="color:red">
        {{ session('error') }}
    </p>
@endif

<form action="/login" method="POST">
    @csrf

    <p>
        Username:
        <input type="text" name="username" required>
    </p>

    <p>
        Password:
        <input type="password" name="password" required>
    </p>

    <button type="submit">Login</button>
</form>

<br>

<a href="/register">Belum punya akun? Register</a>
```

</body>
</html>
