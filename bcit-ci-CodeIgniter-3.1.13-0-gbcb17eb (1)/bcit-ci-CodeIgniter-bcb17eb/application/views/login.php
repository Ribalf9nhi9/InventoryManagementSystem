<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <style>
    /* Basic styles for the login page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-box {
      background: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      
    }
    .login-box h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;

      
    }
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>Login</h1>

    <!-- Display validation errors -->
    <?php echo validation_errors('<div class="error">', '</div>'); ?>

    <!-- Display custom errors -->
    <?php if (!empty($errors)) {
      echo '<div class="error">' . $errors . '</div>';
    } ?>

    <!-- Login form -->
    <form action="<?php echo base_url('auth/login'); ?>" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
      </div>
      <button type="submit" class="btn">Sign In</button>
    </form>
  </div>
</body>
</html>