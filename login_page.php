<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/style.css">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&subset=cyrillic" rel="stylesheet">
  <title>Log into JAM</title>
</head>

<body class="login">
  <div>
    <!-- JAM Logo -->
    <img src="Resources/assets/logo.png" width="250" height="250">

    <h1>Log into your account</h1>

    <!-- Login Form -->
    <form class="login-form">
      <!-- Input Email Address -->
      <div>
        <label for="input-email">Email Address</label>
        <input type="text" id="input-email">
      </div>
      <!-- Input Password -->
      <div>
        <label for="input-password">Password</label>
        <input type="text" id="input-password">
      </div>
      <!-- Login Button -->
      <button type="submit">Login</button>
    </form>

    <!-- Register Prompt -->
    <h4>Don't have an account?</h4>
    <a href="#"><b>Register →</b></a>
  </div>
</body>
</html>