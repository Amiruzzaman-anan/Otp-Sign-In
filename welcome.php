<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #00c06e; /* Theme color */
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    p {
      color: #666;
      line-height: 1.6;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #4caf50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .logout {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .logout input[type="submit"] {
      padding: 8px 16px;
      background-color: #f44336;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .logout input[type="submit"]:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Our Website</h1>
    <div class="logout">
      <form action="logout.php" method="post">
        <input type="submit" value="Logout">
      </form>
    </div>
  </div>
</body>
</html>
