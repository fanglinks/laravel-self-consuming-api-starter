module.exports = {

    inherit: true,

    template: require('./login.template.html'),

    data: function(){
        return{
            credentials: {
                email: '',
                password: '',
                token_key: this.csrf
            }
        };
    },

    methods: {
        validate: function(e){
            e.preventDefault();

            this.$http.post( this.rootApiPath + '/login', this.credentials)
                .success(function(data){
                    console.log(data);
                    this.updateJwt(data.jwtoken);
                })
                .error(function(data){
                    console.log(data)
                })
        }
    }

};