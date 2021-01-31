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
            <a href="/header">
                <img class="logo" src="/img/logo.png" witdh="100px" height="100px" href="test.html">
            </a>
            Change informations
        </h1>
    </div>

    @include('flash::message')

    <div class="login">

        <form id="edit" class="ui form " method="post" action="editInfo">

        {{ csrf_field() }}

            <div class="field">
                <label>New email</label>
                <input type="text" name="email" placeholder="Email">
                @if($errors->has('email'))
                    <p> {{ $errors->first('email') }} </p>
                @endif
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>

        <form id="edit" class="ui form " method="post" action="editInfo2">

        {{ csrf_field() }}

            <div class="field">
                <label>New username</label>
                <input type="text" name="username" placeholder="Username">
                @if($errors->has('username'))
                    <p> {{ $errors->first('username') }} </p>
                @endif
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>

        <form id="edit" class="ui form " method="post" action="editInfo3">

        {{ csrf_field() }}

            <div class="field">
                <label>New password</label>
                <input type="text" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <p> {{ $errors->first('password') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password confirmation</label>
                <input type="text" name="password_confirmation" placeholder="Password confirmation">
                @if($errors->has('password_confirmation'))
                    <p> {{ $errors->first('password_confirmation') }} </p>
                @endif
            </div>

            <button class="ui button" type="submit">Submit</button>

        </form>

    </div>
</body>

