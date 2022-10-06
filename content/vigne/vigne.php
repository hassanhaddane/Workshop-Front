<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DEMETERRE</title>
</head>
<?php
require_once '../../header/header.php'
?>
<body>
<!-- tester si l'utilisateur est connecté -->
<?php
//session_start();
//if($_SESSION['username'] !== ""){
//    $user = $_SESSION['username'];
//    // afficher un message
//    echo "Bonjour $user, vous êtes connecté";
//}
//?>

<div class="mycontent">
    <div class="champs">
        <h4>Champs</h4>
        <a href="#modalA" class="modal-open">
            View Modal A
        </a>
        <a href="#modalB" class="modal-open">
            View Modal B
        </a>
        <a href="#modalC" class="modal-open">
            View Modal C
        </a>


        <section class="modal bg--purple" role="dialog" id="modalA" aria-labelledby="modalA-title"
                 aria-describedby="modalA-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalA-title" class="modal-title">Champ 1</h1>
            <p id="modalA-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--blue" role="dialog" id="modalB" aria-labelledby="modalB-title"
                 aria-describedby="modalB-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalB-title" class="modal-title">Champ 2</h1>
            <p id="modalB-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--red" role="dialog" id="modalC" aria-labelledby="modalC-title"
                 aria-describedby="modalC-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalC-title" class="modal-title">Champ 3</h1>
            <p id="modalC-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

    <h4>Caves</h4>
        <a href="#modalD" class="modal-open">
            View Modal D
        </a>
        <a href="#modalE" class="modal-open">
            View Modal E
        </a>

        <a href="#modalF" class="modal-open">
            View Modal F
        </a>
    <section class="modal bg--purple" role="dialog" id="modalD" aria-labelledby="modalA-title"
             aria-describedby="modalA-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalA-title" class="modal-title">Cave 1</h1>
        <p id="modalA-description" class="modal-description">








        </p>
    </section>

    <section class="modal bg--blue" role="dialog" id="modalE" aria-labelledby="modalB-title"
             aria-describedby="modalB-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalB-title" class="modal-title">Cave 2</h1>
        <p id="modalB-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--red" role="dialog" id="modalF" aria-labelledby="modalC-title"
             aria-describedby="modalC-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalC-title" class="modal-title">Cave 3</h1>
        <p id="modalC-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>
</div>
<div class="contentpage">
    <h4>Part</h4>
    <section class="modal bg--purple" role="dialog" id="modalG" aria-labelledby="modalA-title"
             aria-describedby="modalA-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalA-title" class="modal-title">Part 1</h1>
        <p id="modalA-description" class="modal-description">






        <div class="container" id="wrapper">
            <div class="container-fluid" id="current-weather">
                <div class="row">

                    <!-- Right panel -->
                    <div class="col-md-4 col-sm-5">
                        <h5><spam id="cityName"></spam>, <spam id="cityCode"></spam></h5>
                        <h6 id="localDate"></h6>
                        <h5 id="localTime"></h5>
                        <a id="refreshButton" href="#"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i> Refresh</a>
                    </div>

                    <!-- Center panel -->
                    <div class="col-md-5 col-sm-7" style="margin: 10px auto;padding:0;">
                        <div class="row">
                            <i class="wi" id ="main-icon" style="font-size: 85px;"></i>
                            <div>
                                <spam id="mainTemperature"></spam>
                                <p id="tempDescription"></p>
                            </div>
                            <p style="font-size: 1.5rem;"><a href="#" class="active" id="celcius">°C</a> | <a href="#" id="farenheit">°F</a></p>
                        </div>
                    </div>

                    <!-- Left panel -->
                    <div class="col-xs-12 col-sm-12 col-md-3 row" style="text-align: right;">
                        <div class="col-md-12 col-sm-3 col-xs-3 side-weather-info">
                            <h6>Humidity: <spam id="humidity"></spam>%</h6>
                        </div>
                        <div class="col-md-12 col-sm-3 col-xs-3 side-weather-info">
                            <h6>Wind: <spam id="wind"></spam> m/s</h6>
                        </div>
                        <div class="col-md-12 col-sm-3 col-xs-3 side-weather-info">
                            <h6>High: <spam id="mainTempHot"></spam>°</h6>
                        </div>
                        <div class="col-md-12 col-sm-3 col-xs-3 side-weather-info">
                            <h6>Low: <spam id="mainTempLow"></spam>°</h6>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="protocol-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Due to weather api restrictions, data can only be shown via HTTP request.</p>
                            <p>Sorry for the inconvenience.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 days forecast -->
            <div class="container-fluid">
                <div class="row" style="padding: 2px;">

                    <!-- Day 1 -->
                    <div class="col-md-3 col-sm-6 day-weather-box">
                        <div class="col-sm-12 day-weather-inner-box">
                            <div class="col-sm-8 forecast-main">
                                <p id="forecast-day-1-name"></p>
                                <div class="row">
                                    <h5 id="forecast-day-1-main">°</h5>
                                    <i class="wi forecast-icon" id="forecast-day-1-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-4 forecast-min-low">
                                <p><spam class="high-temperature" id="forecast-day-1-ht"></spam></p>
                                <p><spam class="low-temperature" id="forecast-day-1-lt"></spam></p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="col-md-3 col-sm-6 day-weather-box">
                        <div class="col-sm-12 day-weather-inner-box">
                            <div class="col-sm-8 forecast-main">
                                <p id="forecast-day-2-name"></p>
                                <div class="row">
                                    <h5 id="forecast-day-2-main">°</h5>
                                    <i class="wi forecast-icon" id="forecast-day-2-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-4 forecast-min-low">
                                <p><spam class="high-temperature" id="forecast-day-2-ht"></spam></p>
                                <p><spam class="low-temperature" id="forecast-day-2-lt"></spam></p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="col-md-3 col-sm-6 day-weather-box">
                        <div class="col-sm-12 day-weather-inner-box">
                            <div class="col-sm-8 forecast-main">
                                <p id="forecast-day-3-name"></p>
                                <div class="row">
                                    <h5 id="forecast-day-3-main">°</h5>
                                    <i class="wi forecast-icon" id="forecast-day-3-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-4 forecast-min-low">
                                <p><spam class="high-temperature" id="forecast-day-3-ht"></spam></p>
                                <p><spam class="low-temperature" id="forecast-day-3-lt"></spam></p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 4 -->
                    <div class="col-md-3 col-sm-6 day-weather-box">
                        <div class="col-sm-12 day-weather-inner-box">
                            <div class="col-sm-8 forecast-main">
                                <p id="forecast-day-4-name"></p>
                                <div class="row">
                                    <h5 id="forecast-day-4-main">°</h5>
                                    <i class="wi forecast-icon" id="forecast-day-4-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-4 forecast-min-low">
                                <p><spam class="high-temperature" id="forecast-day-4-ht"></spam></p>
                                <p><spam class="low-temperature" id="forecast-day-4-lt"></spam></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>







        <div class="compass">

            <div id="rose" class="compass__rose">

                <svg class="compass__rose__dial" viewBox="0 0 130 130" version="1.1" xmlns="http://www.w3.org/2000/svg">

                    <circle cx="65" cy="65" r="56" stroke="white" stroke-width="1" fill="none" />
                    <polyline points="63,9  67,9  65,13" fill="white"/>
                    <polyline points="121,63  121,67  119,65" fill="white"/>
                    <polyline points="63,121  67,121  65,119" fill="white"/>
                    <polyline points="9,63  9,67  11,65" fill="white"/>

                    <text x="65" y="4.2" font-size="5" text-anchor="middle" fill="white">N</text>
                    <text x="127" y="67" font-size="5" text-anchor="middle" fill="white">E</text>
                    <text x="65" y="129" font-size="5" text-anchor="middle" fill="white">S</text>
                    <text x="2.8" y="67" font-size="5" text-anchor="middle" fill="white">W</text>

                </svg>

            </div>

            <svg class="compass__pointer" viewBox="0 0 130 130" version="1.1" xmlns="http://www.w3.org/2000/svg">

                <polyline points="60,60  70,60  65,15" fill="#b60000"/>
                <polyline points="60,70  70,70  65,115" fill="white"/>
                <circle cx="65" cy="65" r="7" stroke="#b60000" stroke-width="7" fill="none" />

            </svg>
<h4 color="white">sud</h4>
        </div>





        </p>
    </section>

    <section class="modal bg--blue" role="dialog" id="modalH" aria-labelledby="modalB-title"
             aria-describedby="modalB-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalB-title" class="modal-title">Part 2</h1>
        <p id="modalB-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--red" role="dialog" id="modalI" aria-labelledby="modalC-title"
             aria-describedby="modalC-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalC-title" class="modal-title">Part 3</h1>
        <p id="modalC-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--green" role="dialog" id="modalJ" aria-labelledby="modalD-title"
             aria-describedby="modalD-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalD-title" class="modal-title">Part 4</h1>
        <p id="modalD-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--purple" role="dialog" id="modalK" aria-labelledby="modalE-title"
             aria-describedby="modalE-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalE-title" class="modal-title">Part 5</h1>
        <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--purple" role="dialog" id="modalL" aria-labelledby="modalE-title"
             aria-describedby="modalE-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalE-title" class="modal-title">Part 6</h1>
        <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--purple" role="dialog" id="modalM" aria-labelledby="modalE-title"
             aria-describedby="modalE-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalE-title" class="modal-title">Part 5</h1>
        <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <section class="modal bg--purple" role="dialog" id="modalN" aria-labelledby="modalE-title"
             aria-describedby="modalE-description">
        <a href="#" class="modal-exit" title="close">&times;</a>
        <h1 id="modalE-title" class="modal-title">Part 6</h1>
        <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
    </section>

    <main class="content">

        <a href="#modalG" class="modal-open">
            View Modal G
        </a>
        <a href="#modalH" class="modal-open">
            View Modal H
        </a>
        <a href="#modalI" class="modal-open">
            View Modal I
        </a>
        <a href="#modalJ" class="modal-open">
            View Modal J
        </a>

        <a href="#modalK" class="modal-open">
            View Modal K
        </a>

        <a href="#modalL" class="modal-open">
            View Modal L
        </a>

        <a href="#modalK" class="modal-open">
            View Modal M
        </a>

        <a href="#modalL" class="modal-open">
            View Modal N
        </a>

    </main>
</div>
</div>
</body>
<style>@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    @import url(https://fonts.googleapis.com/css?family=Raleway);

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
    }

    .container {
        max-width: 1050px;
        width: 90%;
        margin: auto;
    }

    .navbar {
        width: 100%;
        box-shadow: 0 1px 4px rgb(146 161 176 / 15%);
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 62px;
    }

    .navbar .menu-items {
        display: flex;
        background: white;
    }

    .navbar .nav-container li {
        list-style: none;
    }

    .navbar .nav-container a {
        text-decoration: none;
        color: #0e2431;
        font-weight: 500;
        font-size: 1.2rem;
        padding: 0.7rem;
    }

    .navbar .nav-container a:hover {
        font-weight: bolder;
    }

    .nav-container {
        display: block;
        position: relative;
        height: 60px;
    }

    .nav-container .checkbox {
        position: absolute;
        display: block;
        height: 32px;
        width: 32px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .nav-container .hamburger-lines {
        display: block;
        height: 26px;
        width: 32px;
        position: absolute;
        top: 17px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .nav-container .hamburger-lines .line {
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #0e2431;
    }

    .nav-container .hamburger-lines .line1 {
        transform-origin: 0% 0%;
        transition: transform 0.4s ease-in-out;
    }

    .nav-container .hamburger-lines .line2 {
        transition: transform 0.2s ease-in-out;
    }

    .nav-container .hamburger-lines .line3 {
        transform-origin: 0% 100%;
        transition: transform 0.4s ease-in-out;
    }

    .navbar .menu-items {
        padding-top: 120px;
        box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
        height: 100vh;
        width: 100%;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 50px;
        transition: transform 0.5s ease-in-out;
        text-align: center;
    }

    .navbar .menu-items li {
        margin-bottom: 1.2rem;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .logo {
        position: absolute;
        top: 5px;
        right: 15px;
        font-size: 1.2rem;
        color: #0e2431;
    }

    .nav-container input[type="checkbox"]:checked ~ .menu-items {
        transform: translateX(0);
    }

    .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
        transform: rotate(45deg);
    }

    .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
        transform: scaleY(0);
    }

    .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
        transform: rotate(-45deg);
    }

    .nav-container input[type="checkbox"]:checked ~ .logo {
        display: none;
    }


    #bar {
        position: absolute;
        left: 200px;
        top: 10px;
    }

    .menuItem {
        position: relative;
        width: 150px;
        height: 30px;
        text-transform: uppercase;
        font-size: 16px;
        padding-top: 7px;
        padding-bottom: 2px;
        float: left;
        text-align: center;
        cursor: pointer;
    }


    /*

    The main content is inside of our <main> element.

    Make it fill the whole window and be scrollable - body should not scroll.

    */

    .content {
        top: 10px;
        left: 0;
        bottom: 0;
        right: 0;
        /*overflow: scroll;*/
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    /*

    Modals should cover the whole screen, but be hidden by default.

    When we click a link to #ModalName, #ModalName becomes the :target element and we can use this selector to give it new styles, like display:block;

    Notice our "Close" links have an href of "#", which means none of our modals are now the :target. They will now all fall back to the basicl .modal styling.

    */
    .modal {
        position: fixed;
        top: 60px;
        bottom: 10px;
        left: 500px;
        right: 0px;
        display: none;
        /*opacity: 0;*/
        width: 50%;
        /* overflow: scroll
         */
    }

    .modal:target {
        display: block;
        z-index: 2;
        /*opacity: 1;*/
    }

    .popup:target ~ .content {
        overflow: hidden;
    }


    /* 	----------------------------

      Styling just for funsies.
      You can ignore this.

    -------------------------------	*/


    .content {
        /*background-color: #EDEBEE;*/
    }

    .modal-exit,
    .modal-exit:hover {
        /*position: fixed;*/
        top: 0;
        right: 0;
        width: 1em;
        height: 1em;
        z-index: 10;
        padding: 0.3em;
        font-size: 2em;
        line-height: 1em;
        text-decoration: none;
        color: #FFF;
    }

    .modal-exit:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .modal-open,
    .modal-open:hover {
        display: block;
        /*width: 14em;*/
        margin: 1em auto;
        padding: 3em 2em;
        border: 1px solid #806973;
        background-color: #FFF;
        font-size: 1em;
        text-align: center;
        text-decoration: none;
        /*border-radius: 82%;*/
        color: #806973;
        box-shadow: 0 0 10px 1px #ccc;
    }

    .modal-open:hover {
        box-shadow: 0 0 10px 1px #999;
    }

    .modal-title {
        font-size: 3em;
        font-weight: 100;
    }

    .modal-description {
        padding: 1em;
        font-size: 1.2em;
        letter-spacing: 0.1em;
        color: #EDEBEE;
    }

    .bg--purple {
        background-color: #806973;
    }

    .bg--blue {
        background-color: #696E80;
    }

    .bg--red {
        background-color: #806969;
    }

    .bg--green {
        background-color: #69807D;
    }

    .contentpage {
        width: 50%;
    }

    .mycontent {
        display: flex;
        flex-direction: row-reverse;
        align-content: space-around;
        justify-content: space-between;
    }

    .champs {
        position: relative;
        right: 100px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .caves {
        position: relative;
        right: 100px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .btn {
        color: #806973;
        box-shadow: 0 0 10px 1px #ccc;
        padding: 3em 2em;

    }
</style>

<style>

    a {
        color: white;
        text-decoration: none;
    }

    a:hover, a:active, a:focus{
        color: white;
        text-decoration: none;
        /*opacity: 1;*/
    }

    .active {
        color: white;
        text-decoration: none;
        /*opacity: 1;*/
    }

    body{
        background-color: #F4F6F7;
    }

    #wrapper {
        background-color: #28688C;
        box-shadow: 1px 5px 25px 3px #444;
        border-radius: 10px;
        margin: 100px auto;
        max-width: 720px;
        padding: 0px;
        color: white;
    }

    #current-weather{
        padding: 15px;
    }

    #mainTemperature{
        font-size: 5.5em;
        line-height: 0.7;
    }

    #tempDescription {
        margin-top: 10px;
        text-align: center;
    }

    .day-weather-box {
        border: 1px solid #28688C;
        background-color: #2E7FA1;
        border-radius: 5px;
        height: 5em;
    }

    .day-weather-box p{
        margin-bottom: 0;
    }

    .side-weather-info {
        padding: 0 10px;
    }

    .day-weather-inner-box {
        display: inline-flex;
        margin: 14px auto;
        padding: 0 5px;
    }

    .forecast-main {
        padding: 0 0 0 30px;
    }

    .forecast-icon {
        font-size: 25px;
        margin-left: 5px;
    }

    .modal-body p{
        color: #333;
    }
</style>

<style>


    [class^="column-"] {
        display: inline-block;
    }

    .column-33 {
        width: 33.33333%;
    }

    .column-25 {
        width: 25%;
    }

    .label {
        font-size: 0.5rem;
    }







    .compass {
        position: relative;
        width: 10%;
        height: 10%;
        text-align: center;
        font-family: Muli, sans-serif;
        font-size: 16px;
        background-size: cover;
        height: 10%;
    }

    .compass__rose {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .compass__rose__dial {
        height: 100%;
        width: 100%;
    }

    .compass__pointer {
        height: 100%;
        width: 100%;
    }

    .status {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .position {
        padding-bottom: 0.5rem;
        text-transform: uppercase;
        text-align: center;
    }

    .options {

    }

    .options__btn {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;

        background-color: rgba(0, 0, 0, 0.8);
    }

    .popup.popup--show {
        display: block;
    }

    .popup__content {
        max-width: 300px;
        margin: 0 auto;


        background-color: white;
        color: black;
    }

    .popup__contents {
        padding: 1rem;
    }

    .popup__inner {

    }

    .popup__inner--hide {
        display: none;
    }

    .popup__close {
        display: block;
        padding: 1rem;
        text-align: right;
        width: 100%;
        border: 0;
        background: transparent;
        outline: none;
    }

    .popup__close:hover {
        text-decoration: underline;
        cursor: pointer;
    }



    html.nightmode {
        background: black;
        color: white;
    }

    circle {
        stroke: #2e92e9;
    }
    polyline {
        fill: red;
    }

    #mapbox {
        display: none;
        position: absolute;
        height: 250px;
        width: 500px;
        top: 80px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999;
    }
    #map-close {
        display: none;
        position: fixed;
        bottom: 0;
        z-index: 9999;
    }
</style>
</html>