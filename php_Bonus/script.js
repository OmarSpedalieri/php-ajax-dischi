

var app =  new Vue({
        el: "#app",
        data: {
            discs: [],
        },
        methods: {

            update: function(author){

                axios
                .get("data.php", {
                    params: {
                       
                        'author': author
                    }
                
                })
                .then(risposta => {

                    this.discs = risposta.data;
                // console.log(risposta.data);
                });
            },
            clear: function(){
                this.update();
            }

        },
        mounted: function () {

            // axios.get("data.php").then((risposta) => {

            //     this.discs = risposta.data;
            //     console.log(this.discs);

            // });

            this.update('');
            
        },

    });