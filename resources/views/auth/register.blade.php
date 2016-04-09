<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

    <script type="text/javascript" src="libs/jquery/jquery-2.2.3.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/action2.js"></script>
    <style type="text/css">
        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700 !important;
        }
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
        <div id="clntPrtl" style="top: -200px; height: 280px;">
            <ul>
                <li><a href="/">Home</a></li>
            </ul>
            <div class="lbl"></div>
        </div>
    </div>

    <div>



    </div>

    <div class="container">
        <div class="col-md-12">
            <h2 class="text-center">Registration Form</h2>
            <p>&nbsp;</p>
        </div>
    </div>

    <div class="container">
        <form action="{{ url('/register') }}" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}
            <div class="col-md-6">

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}" required="">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }}" required="">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required="">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username">User name</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="{{ old('username') }}" required="">
                    @if ($errors->has('username'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-groupform-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required="">
                    @if ($errors->has('password'))
                        <span class="help-block">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-enter Password" required="">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" rows="5.5"></textarea>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                </div>
                <div class="form-group">
                    <label for="name">State</label>
                    <select name="state" id="state" class="form-control">
                        <option value="">--Select State--</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input type="text" name="zip" class="form-control" id="zip" placeholder="Enter Zip Code">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label for="ephone">Emergency Phone</label>
                    <input type="text" class="form-control" name="ephone" id="ephone" placeholder="Enter Emergency Phone">
                </div>
                <div class="form-group">
                    <label for="association">Association</label>
                    <select name="association" class="form-control">
                        <option name="none" value="none">----------</option>
                        <option name="summerwind-villas" value="2">Summerwind Villas</option>
                        <option name="oristo-lodge-cabins" value="3">Oristo Lodge Cabins</option>
                        <option name="magnolia-walk-villas" value="4">Magnolia Walk Villas </option>
                        <option name="oak-grove-villas" value="5">Oak Grove Villas </option>
                        <option name="sea-cloud-cottage" value="6">Sea Cloud Cottage </option>
                        <option name="driftwood-i-villas" value="7">Driftwood I Villas </option>
                        <option name="driftwood-ii" value="8">Driftwood II </option>
                        <option name="fairway-watch-villas" value="9">Fairway Watch Villas </option>
                        <option name="shelter-cove-cottage" value="10">Shelter Cove Cottage </option>
                        <option name="edisto-marina-association" value="11">Edisto Marina Association</option>
                        <option name="bailey-s-island" value="21">Bailey Island</option>
                        <option name="seaside-oaks-roadway-lane" value="22">SeaSide Oaks Roadway Lane</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="unit">Unit Number</label>
                    <input type="text" class="form-control" name="unit" id="unit" placeholder="Number of Units">
                </div>
                <div class="form-group">
                    <label for="unit">Are you a Board Member?</label>
                    <select name="is_board" class="form-control">
                        <option value="0">Yes</option>
                        <option value="1" selected="">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="submit" name="submit" value="Send Registration Request" class="btn btn-primary btn-lg" style="width:100%;">
                    </div>
                    <div class="col-md-4"></div>

                </div>
                <p>&nbsp;</p>
            </div>

        </form></div>

    <!--<pre>-->

    <div id="foot">
        ©2011 - 360 HOA Management, LLC P.O. Box 506 Edisto Island, SC  29438 Phone 843-869-3601 |
        <a href="/about">About Us</a> |
        <a href="mailto:renae@360hoamanagement.com">Contact Us</a>
    </div>



</div>
</body>
</html>
