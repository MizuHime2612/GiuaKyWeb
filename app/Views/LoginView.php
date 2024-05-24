<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="http://localhost:8080/BTL-WNC/app/Views/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9ebed; /* Màu nền tổng thể */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.container {
    max-width: 400px;
    padding: 20px;
    border-radius: 5%;
    background-color: #fff;
}
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    transition: border-color 0.3s; /* Thêm hiệu ứng chuyển đổi màu viền */
}
input[type="text"]:focus,
input[type="password"]:focus {
    border-color: transparent; /* Loại bỏ viền */
    outline: none; /* Loại bỏ viền mặc định khi tập trung */
    box-shadow: 0 0 5px 5px rgba(245, 0, 87, 0.5);
}

input[type="submit"] {
    background-color: #f50057; /* Màu nút đăng nhập */
    color: white;
    cursor: pointer;
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 0px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    transition: background-color 0.3s; /* Thêm hiệu ứng chuyển đổi màu nút */
}
input[type="submit"]:hover {
    background-color: #c51162; /* Màu nút đăng nhập khi hover */
}
.forgot-password {
    text-align: center;
    margin-top: 10px;
}
.forgot-password a {
    color: #f50057; /* Màu link quên mật khẩu */
    text-decoration: none;
}
.login-with-social {
    text-align: center;
    margin-top: 20px;
}
.login-with-social .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color:#1877f2; /* Màu nút đăng nhập bằng Facebook và Google */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
}
.login-with-social .btn:hover {
    background-color: rgba(24, 119, 242, 0.5); /* Màu nút đăng nhập bằng Facebook và Google khi hover */
}
</style>
<body>
<div class="container">
        <h1 style="text-align: center; color: #f50057">Sách</h1>
        <form action="app\Controllers\LoginController.php" method="post">
            <input type="text" id="username" name="username" placeholder="Please enter your Phone Number or Email" required>
            <input type="password" id="password" name="password" placeholder="Please enter your password" required>
            <input type="submit" value="Đăng nhập">
        </form>
        <div class="forgot-password">
            <a href="/forgot-password">Forgot Password?</a>
        </div>
        <div class="login-with-social">
            <p style="color: #ccc;">Or, Login with</p>
            <a href="#" class="btn"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="btn" style="background-color: #f1422d;"><i class="fab fa-google"></i> Google</a>
        </div>
    </div>
</body>
</html>
