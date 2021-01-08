

var app =  new Vue({
        el: "#app",
        data: {
            discs: [],
        },
        
        mounted: function (){

            axios.get("data.php").then((risposta) => {

                this.discs = risposta.data;
                console.log(this.discs);

            });
            
        },

    });