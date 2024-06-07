<?php include 'layout/header.php' ?>

<div>
    <?php include 'layout/sidebar.php' ?>
    <!-- buatkan form register akun -->
    <div class="container">
        <!-- buatkan form register akun -->
        <form action="register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>
</div>
<?php include 'layout/footer.php' ?>