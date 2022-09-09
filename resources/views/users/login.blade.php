<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    p{
      color: red;
    }
    body {font-family: Arial, Helvetica, sans-serif;}
    form {
      border: 3px solid #665e69;
      margin-left: 500px;
      margin-right: 500px;
    }

    h2 {
      margin-left: 50px;
      margin-top: 20px;
      padding-bottom: 100px
    }
    input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    button:hover {
    opacity: 0.8;
    }


    .container {
    padding: 16px;
    margin-top: 40px;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 40px;
    }


    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    
    }
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="{{route('auth')}}" method="post">
    @csrf
    
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
    <p>
      @error('email')
        {{$message}}
      @enderror
    </p>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
    <p>
      @error('password')
        {{$message}}
      @enderror
    </p>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

</form>

</body>
</html>