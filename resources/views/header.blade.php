@extends('layouts.master')
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <div class="container-fluid">
            <img class="logo" src="/img/logo.png" witdh="150px" height="150px" href="test.html">
        </div>
        <div class="ui secondary menu">
            <a class="item" href="/">
                Accueil
            </a>

            <div class="ui dropdown">

                <a class="browse item">
                    Browse
                    <i class="dropdown icon"></i>
                </a>   

                <div class="menu">
                    <div class="test">
                        <div class="ui fluid popup transition visible">
                            <div class="ui three column relaxed equal one divided grid">

                                <div class="column">
                                    <h4 class="ui header">PC</h4>
                                    <div class="ui link list">
                                        <a class="item">MMORPG</a>
                                        <a class="item">RPG</a>
                                        <a class="item">Jeu de sport</a>
                                        <a class="item">FPS</a>
                                    </div>
                                </div>

                                <div class="column">
                                    <h4 class="ui header">PS5</h4>
                                    <div class="ui link list">
                                        <a class="item">FPS</a>
                                        <a class="item">Action / Aventure</a>
                                        <a class="item">RPG</a>
                                        <a class="item">Jeu de sport</a>
                                    </div>
                                </div>

                                <div class="column">
                                    <h4 class="ui header">Xbox Série X</h4>
                                    <div class="ui link list">
                                        <a class="item" href="test.html">FPS</a>
                                        <a class="item">Action / Aventure</a>
                                        <a class="item">RPG</a>
                                        <a class="item">Jeu de voiture</a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            @guest
            <a class="ui item" href="/connexion/login">
                Login
            </a>
            @endguest
            @auth
            <a class="item" href="/account">
                Account
            </a>
            <a class="item" href="/admin/dashboard">
                Admin
            </a>
            @endauth
            <div class="right menu">
                <form class="item" action="/product/search">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search..." name="q">
                    </div>
                        <button type="submit" class="search"><i class="search link icon"></i></button>
                </form>
                <a class="ui item">
                    <i class="shopping cart icon"></i>
                </a>
            </div>
        </div>
    </nav>
</header>