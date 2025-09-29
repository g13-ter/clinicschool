<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
  body {
  margin: 0;
  height: 100vh;
  background: url("{{ asset('images/jupiter.jpg') }}") no-repeat center center fixed;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Arial, sans-serif;
}



    .container {
      text-align: center;
      display: flex;
      flex-direction: column;
      width: 320px;
      padding: 20px;
      border-radius: 10px;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .container h2 {
      margin-bottom: 15px;
      color: #333;
    }

    input {
      margin: 8px 0;
      height: 40px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    button {
      height: 40px;
      margin-top: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    .error {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

    @if ($errors->any())
      <div class="error">
        {{ $errors->first() }}
      </div>
    @endif
  </div>
</body>
</html>
