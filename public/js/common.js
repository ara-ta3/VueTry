$(document).ready(function(){
    var app = new Vue({
        el: '#app',
        data: {
            username:'',
            userpass:'',
            message:'',
        },
        methods: {
             login: function(e) {
                 e.preventDefault();
                 $.ajax({
                     type:'POST',
                     url:'/login',
                     data:{
                         'username': this.username,
                         'password': this.userpass
                     }
                 })
                 .then(function(data){
                     this.message = data.message;
                 }.bind(this));
             }
         }
    });
});

