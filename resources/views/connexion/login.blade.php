<!doctype html>
<html lang="en">
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/connexion.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/semantic-ui/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="/semantic-ui/semantic.min.js"></script>
  </head>

<body style="background-color:#E0DFD5">


    <div class="title">
        <h1 class="ui center aligned icon header">
            <a href="/">
                <img class="logo" src="/img/logo.png" witdh="100px" height="100px" href="test.html">
            </a>
            Log-in to your account 
        </h1>
    </div>

    @include('flash::message')

    <div class="login">

        <form class="ui form " method="post" action="login">

        {{ csrf_field() }}

            <div class="field">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
                @if($errors->has('username'))
                    <p> {{ $errors->first('username') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <p> {{ $errors->first('password') }} </p>
                @endif
            </div>

            <button class="ui button" type="submit">Submit</button>

        </form>

    </div>

    <div class="new">
        <h3>No account    ? <a href="signup">   Sign up !</a>
    </div>

</body>

