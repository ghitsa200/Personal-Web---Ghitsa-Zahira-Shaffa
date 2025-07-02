<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-rose-100 to-rose-300 min-h-screen flex
items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-rose-400 mb-6">Login
Administrator</h2>
        <form action="cek_login.php" method="post" class="space-y-5">
            <div>
            <label for="username" class="block text-sm font-medium text-rose-500">Username</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-rose-300 focus:border-rose-300">
    </div>
    <div>
<label for="password" class="block text-sm font-medium text-rose-500">Password</label>
<input type="password" name="password" id="password" required
class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-rose-300 focus:border-rose-300">
</div>
<div class="flex justify-between items-center">
<input type="submit" name="login" value="Login"
class="bg-rose-600 text-white px-4 py-2 rounded hover:bg-rose-400
cursor-pointer">
<input type="reset" name="cancel" value="Cancel"
class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray400 cursor-pointer">
</div>
</form>
<div class="text-center text-sm text-gray-600 mt-6">
&copy; <?php echo date('Y'); ?> - Ghitsa Zahira Shaffa
</div>
</div>
</body>
</html>
