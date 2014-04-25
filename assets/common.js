var demo = new Vue({
    el: '#demo',
    data: {
        message:'hogehoge',
        messages: [
            {
                content: 'Learn JavaScript'
            }
        ]
    },
    methods: {
         addMessage: function(e) {
            e.preventDefault();
            this.messages.push({content:this.message});
         }
     }
});

