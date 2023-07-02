<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 8rem auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      width: 100%;
      padding: 8px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
    a
    {
      text-decoration: none;
      color: #003cff;
      padding: 2rem;
      margin: 1rem 0 0 3rem;
    }
  </style>
</head>
<body>
  <div class="container">
    @yield('register')
  </div>
</body>
</html>
