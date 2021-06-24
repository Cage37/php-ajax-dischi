<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>PHP-AJAX-DISCHI</title>
</head>
<body>
    
    <div id="app">
        
        <header>
            <img src="./dist/img/Spotify.png" alt="">
            <h1>TOP ALBUM</h1>
            <div class="divselect">
                <select name="" id="select">
                    <option value="All">All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                </select>
            </div>
        </header>

        <main>
        <div class="albumcard" v-for="(album, index) in albums">
                <img :src="album.poster" alt="">
                <p class="albumtitle"> {{ album.title }} </p>
                <p class="author"> {{ album.author }} </p>
                <p class="year"> {{ album.year }} </p>
            </div>
        </main>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="./dist/js/app.js"></script>
</body>
</html>