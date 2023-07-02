@extends('Layouts.auth');
@section('register')
<h2>Login</h2>
<form form method="POST" action="login">
  @csrf
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div class="form-group">
    <button type="submit">Login</button>
  </div>
</form>
@endsection