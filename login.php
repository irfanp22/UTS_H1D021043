<?php
$title = 'Login';
require 'resource/header.php';
if(isset($_SESSION['login'])) header('Location: index.php');
?>

<div class="container w-50">
    <h1 class="my-2 text-center">Login</h1>
    <form action="aksi.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
        <label for="pass">Password:</label>
        <input type="password" name="pass" class="form-control" placeholder="Masukan Password" required>
        <input type="submit" name="login" value="Login" class="btn btn-primary mt-3">
    </form>
</div>

<?php
require 'resource/footer.php';
?>