<!DOCTYPE html>

<html>
<head>
    <title>Register</title>
</head>
<body>

```
<h1>Register User</h1>

<form action="/register" method="POST">
    @csrf

    <p>
        Username:
        <input type="text" name="username" required>
    </p>

    <p>
        Nama:
        <input type="text" name="name" required>
    </p>

    <p>
        Email:
        <input type="email" name="email" required>
    </p>

    <p>
        Password:
        <input type="password" name="password" required>
    </p>

    <button type="submit">Register</button>
</form>

<br>

<a href="/login">Sudah punya akun? Login</a>
```

</body>
</html>
