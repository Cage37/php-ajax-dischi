const app = new Vue({

    el: '#app',
    
    data: {
        albums: [],
        selectedAlbums: [],
        element: "all",
    },
    
    methods: {
        selectEl () {
            let select = document.getElementById("select").value;
            console.log(select);
            this.selectedAlbums = [];

            for (let index = 0; index < this.albums.length; index++) {
                if (select !== "All") {
                    if (this.albums[index].genre == select) {
                        this.selectedAlbums.push(this.albums[index]) 
                    } 
                } else {
                    this.selectedAlbums.push(this.albums[index])
                }
            }
        },

        olderAlbum (a,b) {
            if (a.year < b.year){
              return -1;
            }
            else if (a.year > b.year){
              return 1;
            }
            return 0;
        }
  },
    
    mounted() {
      axios.get('./src/partials/database.php')
        .then(resp => {
          console.log(resp);
          this.albums = resp.data
          this.selectedAlbums = resp.data
        }).catch(e => {
          console.log(e);
        })
    }
  })