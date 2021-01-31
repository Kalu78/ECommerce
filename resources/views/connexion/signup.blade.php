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
            Create a new account
        </h1>
    </div>

    <div class="login">

        <form class="ui form " method="post" action="signup">
            
            {{ csrf_field() }}
            
            <div class="field">
                <label>E-mail</label>
                <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <p> {{ $errors->first('email') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                @if($errors->has('username'))
                    <p> {{ $errors->first('username') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @if($errors->has('password'))
                    <p> {{ $errors->first('password') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password confirmation</label>
                <input type="password" name="password_confirmation" placeholder="Password confirmation" value="{{ old('password_confirmation') }}">
                @if($errors->has('password_confirmation'))
                    <p> {{ $errors->first('password_confirmation') }} </p>
                @endif
            </div>

            <button class="ui button" type="submit">Submit</button>

        </form>
    </div>
    <div class="new">
        <h3>Have already an account ? <a href="login"> Login !</a>
    </div>

</body>

