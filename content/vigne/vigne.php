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
        <a href="/Workshop/content/vigne/champ1.php" class="modal-open">
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
            <p id="modalA-description" class="modal-description">

            </p>
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
        opacity: 0;
        width: 50%;
        /* overflow: scroll
         */
    }

    .modal:target {
        display: block;
        z-index: 2;
        opacity: 1;
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
        width: 16em;
        margin: 1em auto;
        padding: 1.5em 2em;
        border: 1px solid #806973;
        background-color: #FFF;
        font-size: 1em;
        text-align: center;
        text-decoration: none;
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
        opacity: 0.6;
        text-decoration: none;
    }

    a:hover, a:active, a:focus{
        color: white;
        text-decoration: none;
        opacity: 1;
    }

    .active {
        color: white;
        text-decoration: none;
        opacity: 1;
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
        width: 100%;
        height: 100%;
        text-align: center;
        font-family: Muli, sans-serif;
        font-size: 16px;
        background-size: cover;
        height: 100%;
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