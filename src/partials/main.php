<main>
    <div class="albumcard" v-for="(album, index) in selectedAlbums">
        <img :src="album.poster" alt="">
        <p class="albumtitle"> {{ album.title }} </p>
        <p class="author"> {{ album.author }} </p>
        <p class="year"> {{ album.year }} </p>
        </div>
</main>