<?php

$submitUrl = "http://" . $_GET['sip'] . ":9997/login";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Network Access Login</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #72df81ff, #03910aff);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background: #ffffff;
      padding: 2rem;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 0.75rem;
      background-color: #03910aff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
    }

    button:hover {
      background-color: #026e08ff;
    }

    .footer {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
      color: #777;
    }

	.logo {
		width: 100px;
		height: 100px
	}
	.logo-container {
		text-align: center
	}
  </style>
</head>
<body>
  <div class="container">
	<div class="logo-container"><img src="/images/SNC_Logo.png" alt="" class="logo"></div>
    <h2>Welcome SNC Free Wi-Fi</h2>
    <form method="POST" action="<?php echo htmlspecialchars($submitUrl); ?>">
      <input hidden type="text" name="username" placeholder="Student ID or Username" value="test" />
      <input hidden type="password" name="password" placeholder="Password" value="admin123" />
      <button type="submit">Connect</button>
    </form>
    <div class="footer">
      By connecting, you agree to our <a href="#">terms of use</a>.
    </div>
  </div>
</body>
</html>
