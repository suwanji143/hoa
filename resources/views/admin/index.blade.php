
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>360HOAManagement.com</title>
    <link href="/css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="login-container">
    <h3><a href="/">360 HOA Management Admin</a></h3>
    <form action="{{ url('/login') }}" method="post" accept-charset="utf-8">
        {!! csrf_field() !!}
        <p class="clearfix">
            <label for="username">Username</label>
            <input type="text" name="email" />
        </p>
        <p class="clearfix">
            <label for="password">Password</label>
            <input type="password" name="password" />
        </p>
        <p><input type="submit" name="submit" value="Login" /></p>
    </form>
    <br/>
    @if ($errors->has('email'))
        <p class="error-message">Invalid username or password</p>
    @endif
</div>

<p class="frontend-link">
    <a href="/">&laquo; Back to 360hoamanagement.com</a>
</p>

</body>
</html>
