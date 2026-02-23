<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" align="center" id="register">
        <label for="reg-user">Username:</label>
        <input type="text" id="reg-user" name="txtuser" placeholder="Username"> <br>
        <label for="reg-name">Name:</label>
        <input type="text" id="reg-name" name="txtname" placeholder="Name"> <br>
        <label for="reg-email">Email:</label>
        <input type="text" id="reg-email" name="txtemail" placeholder="Email"> <br>
        <label for="reg-mobile">Mobile:</label>
        <input type="number" id="reg-mobile" name="txtmobile" placeholder="Mobile"> <br>
        <label for="reg-pass">Password</label>
        <input type="password" id="reg-pass" name="password" placeholder="Password"> <br>
        <input type="submit" value="Register">
        <p><a href="#" id="show-login">Already have an account? Login</a></p>
    </form>

    <form method="post" align="center" id="login" style="display: none;">
        <label for="login-user">Username</label>
        <input type="text" id="login-user" name="txtuser" placeholder="Username"> <br>
        <label for="login-pass">Password</label>
        <input type="password" id="login-pass" name="password" placeholder="Password"> <br>
        <input type="submit" value="Login">
        <p><a href="#" id="show-register">New user? Register</a></p>
    </form>

    <script>
        const registerForm = document.getElementById('register');
        const loginForm = document.getElementById('login');
        const showLogin = document.getElementById('show-login');
        const showRegister = document.getElementById('show-register');

        showLogin.addEventListener('click', (event) => {
            event.preventDefault();
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });

        showRegister.addEventListener('click', (event) => {
            event.preventDefault();
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        });
    </script>
</body>
</html>