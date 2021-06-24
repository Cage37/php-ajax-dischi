const app = new Vue({

    el: '#app',
    
    data: {
      albums: null
    },
    
    methods: {
  
    },
    
    mounted() {
      axios.get('./src/partials/database.php')
        .then(resp => {
          console.log(resp);
          this.albums = resp.data
        }).catch(e => {
          console.log(e);
        })
    }
  })