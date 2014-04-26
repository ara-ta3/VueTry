$(document).ready(function(){
    var app = new Vue({
        el: '#app',
        data: {
            message:'',
        messages: [
    {
        content: 'Learn JavaScript'
    }
    ]
        },
        methods: {
             addMessage: function(e) {
                 e.preventDefault();
                 $.post('/',{
                    data:{
                        'message': this.message
                    }
                 })
                 .then(function(data){
                     if( data.result ) {
                         this.messages.push({content:this.message});
                     }
                 }.bind(this));
             }
         }
    });
});

