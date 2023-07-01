<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: rgb(0, 136, 86);
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      display: flex;
      max-width: 1200px;
      margin:8rem auto;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar {
      flex: 1;
      padding: 20px;
      background-color: #f5f5f5;
    }

    .main-content {
      flex: 3;
      padding: 20px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      display: block;
      padding: 10px;
      background-color: #ccc;
      color: #333;
      text-decoration: none;
      border-radius: 3px;
    }

    .sidebar a:hover {
      background-color: #999;
    }

    .active {
      background-color: #999;
      color: #fff;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Admin Panel</h1>
  </header>

  <div class="container">
    <aside class="sidebar">
      <ul>
        <li><a href="/admin" class="active">Dashboard</a></li>
        <li><a href="/users">Users</a></li>
        <li><a href="/product">Products</a></li>
        <li><a href="/order">Orders</a></li>
        <li><a href="/settings">Settings</a></li>
      </ul>
    </aside>

    <section class="main-content">
      <h2>@yield('name')</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam similique est quasi officia deleniti? Ea harum ullam sit dolor dolores!</p>
    </section>
  </div>
</body>
</html>
