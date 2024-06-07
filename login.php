<?php include 'layout/header.php'; ?>
<div class="container mt-5">
    <h2>Login</h2>
    <form action="process_login.php" method="post">
        <div class="form-group
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="signUp.php" class="btn btn-link">Register</a>
    </form>
</div>
<?php include 'layout/footer.php' ?>