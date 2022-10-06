<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DEMETERRE</title>
</head>
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
        <h4>des champs</h4>
        <button type="button" class="btn btn-outline-dark">Champ 1</button>
        <button type="button" class="btn btn-outline-dark">Champ 2</button>
        <button type="button" class="btn btn-outline-dark">Champ 3</button>
        <button type="button" class="btn btn-outline-dark">Champ 4</button>
    </div>
    <div class="contentpage">
        <h4>fontionalités</h4>
        <section class="modal bg--purple" role="dialog" id="modalA" aria-labelledby="modalA-title"
                 aria-describedby="modalA-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalA-title" class="modal-title">Modal A</h1>
            <p id="modalA-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--blue" role="dialog" id="modalB" aria-labelledby="modalB-title"
                 aria-describedby="modalB-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalB-title" class="modal-title">Modal B</h1>
            <p id="modalB-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--red" role="dialog" id="modalC" aria-labelledby="modalC-title"
                 aria-describedby="modalC-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalC-title" class="modal-title">Modal C</h1>
            <p id="modalC-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--green" role="dialog" id="modalD" aria-labelledby="modalD-title"
                 aria-describedby="modalD-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalD-title" class="modal-title">Modal D</h1>
            <p id="modalD-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--purple" role="dialog" id="modalE" aria-labelledby="modalE-title"
                 aria-describedby="modalE-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalE-title" class="modal-title">Modal E</h1>
            <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--purple" role="dialog" id="modalA" aria-labelledby="modalA-title"
                 aria-describedby="modalA-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalA-title" class="modal-title">Modal A</h1>
            <p id="modalA-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--blue" role="dialog" id="modalB" aria-labelledby="modalB-title"
                 aria-describedby="modalB-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalB-title" class="modal-title">Modal B</h1>
            <p id="modalB-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--red" role="dialog" id="modalC" aria-labelledby="modalC-title"
                 aria-describedby="modalC-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalC-title" class="modal-title">Modal C</h1>
            <p id="modalC-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--green" role="dialog" id="modalD" aria-labelledby="modalD-title"
                 aria-describedby="modalD-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalD-title" class="modal-title">Modal D</h1>
            <p id="modalD-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--purple" role="dialog" id="modalE" aria-labelledby="modalE-title"
                 aria-describedby="modalE-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalE-title" class="modal-title">Modal E</h1>
            <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--green" role="dialog" id="modalD" aria-labelledby="modalD-title"
                 aria-describedby="modalD-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalD-title" class="modal-title">Modal D</h1>
            <p id="modalD-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>

        <section class="modal bg--purple" role="dialog" id="modalE" aria-labelledby="modalE-title"
                 aria-describedby="modalE-description">
            <a href="#" class="modal-exit" title="close">&times;</a>
            <h1 id="modalE-title" class="modal-title">Modal E</h1>
            <p id="modalE-description" class="modal-description">Lots of fun things in here to see.</p>
        </section>


        <main class="content">

            <a href="#modalA" class="modal-open">
                View Modal A
            </a>
            <a href="#modalB" class="modal-open">
                View Modal B
            </a>
            <a href="#modalC" class="modal-open">
                View Modal C
            </a>
            <a href="#modalD" class="modal-open">
                View Modal D
            </a>
            <a href="#modalE" class="modal-open">
                View Modal E
            </a>

            <a href="#modalA" class="modal-open">
                View Modal F
            </a>
            <a href="#modalB" class="modal-open">
                View Modal G
            </a>
            <a href="#modalC" class="modal-open">
                View Modal H
            </a>
            <a href="#modalD" class="modal-open">
                View Modal I
            </a>
            <a href="#modalE" class="modal-open">
                View Modal J
            </a>

            <a href="#modalD" class="modal-open">
                View Modal K
            </a>
            <a href="#modalE" class="modal-open">
                View Modal L
            </a>
        </main>
    </div>
</div>
</body>

</html>