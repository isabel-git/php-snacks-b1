var app = new Vue({
    el: '#app',
    data: {
        hotels: []
    },
    mounted () {

        axios
        .get('data.php') //faccio una richiesta al data

        .then((res) => { //risposta

            this.hotels = res.data
            console.log(this.hotels);

        });
    }
  });