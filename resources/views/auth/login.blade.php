<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="libs/jquery/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/action2.js"></script>
    <style type="text/css">
        .login_form, .reg_form {
            text-align: center;
        }
        .login_form table, .reg_form table {
            margin: 0 auto;
        }
        p {
            padding-left: 40px;
            color: #000;
            font: normal 12pt arial;
        }
        label {
            font: normal 12pt arial;
            color: #666;
        }
        input.button:hover {
            color: #FFF;
            border: 1px solid #5c6770;
            border-top-color: #9fb1c0;
            border-bottom-color: #31373d;
            background-color: #92a3b1;
            background-image: -moz-linear-gradient(top, #92a3b1, #30353a);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #92a3b1), color-stop(1, #30353a));
            background-image: linear-gradient(top, #92a3b1, #30353a);
            -pie-background: linear-gradient(top, #92a3b1, #30353a);
            behavior: url("/media/css/PIE.htc");
        }
        input.button {
            color: #DDD;
            position: relative;
            padding: 4px 8px;
            margin: 15px 5px 15px;
            text-shadow: 0 -1px #333;
            text-decoration: none;
            border: 1px solid #5b636b;
            border-top-color: #bfd1e1;
            border-bottom-color: #31373d;
            text-align: center;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            behavior: url("/media/css/PIE.htc");
            -webkit-box-shadow: 0 2px 4px #333;
            -moz-box-shadow: 0 2px 4px #333;
            box-shadow: 0 2px 4px #333;
            behavior: url("/media/css/PIE.htc");
            background-color: #64727a;
            background-image: -moz-linear-gradient(top, #64727a, #30353a);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #64727a), color-stop(1, #30353a));
            background-image: linear-gradient(top, #64727a, #30353a);
            -pie-background: linear-gradient(top, #64727a, #30353a);
            behavior: url("/media/css/PIE.htc");
        }
    </style>
</head>
<body>

<div id="wrap">

    <!-- Header -->
    <div id="head">
        <a href="/"><div class="hoa360"></div></a>
        <div id="clntPrtl">
            <ul>
                <li>
                    <a href="/client?id=2">Summerwind Villas</a>
                </li>
                <li>
                    <a href="/client?id=3">Oristo Lodge Cabins</a>
                </li>
                <li>
                    <a href="/client?id=4">Magnolia Walk Villas </a>
                </li>
                <li>
                    <a href="/client?id=5">Oak Grove Villas </a>
                </li>
                <li>
                    <a href="/client?id=6">Sea Cloud Cottage </a>
                </li>
                <li>
                    <a href="/client?id=7">Driftwood I Villas </a>
                </li>
                <li>
                    <a href="/client?id=8">Driftwood II </a>
                </li>
                <li>
                    <a href="/client?id=9">Fairway Watch Villas </a>
                </li>
                <li>
                    <a href="/client?id=10">Shelter Cove Cottage </a>
                </li>
                <li>
                    <a href="/client?id=11">Edisto Marina Association</a>
                </li>
                <li>
                    <a href="/client?id=21">Bailey Island</a>
                </li>
                <li>
                    <a href="/client?id=22">SeaSide Oaks Roadway Lane</a>
                </li>
                <li>
                    <a href="/client?id=23">TEST</a>
                </li>
                <li>
                    <a href="/client?id=24">test pp</a>
                </li>
            </ul>
            <div class="lbl"></div>
        </div>
    </div>

    <form class="login_form" method="post" action="{{ url('/login') }}">
        {!! csrf_field() !!}

        <table>
            <tbody><tr>
                <td><label for="id_username">Username</label></td>
                <td><input id="id_username" type="text" name="email" maxlength="30">

                </td>
            </tr>
            <tr>
                <td><label for="id_password">Password</label></td>
                <td><input type="password" name="password" id="id_password">

                </td>
            </tr>
            </tbody></table>
        <p><a href="/forgotPassword">Forgot</a> your password?  <a href="/register">Need an account</a>?</p>

        <input type="submit" value="Login" class="button">
        <br/>
        @if ($errors->has('email'))
            <p class="error-message">Invalid username or password</p>
        @endif
        {{--<input type="hidden" name="next" value="/clients/summerwind-villas">--}}
    </form>


</div>
<div id="foot">
    ©2016 - 360 HOA Management, LLC P.O. Box 506 Edisto Island, SC  29438 Phone 843-869-3601 |
    <a href="/about">About Us</a> |
    <a href="mailto:renae@360hoamanagement.com">Contact Us</a>
</div>
</body>
</html>
