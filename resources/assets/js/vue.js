Vue.component('mycounter', {
    //template: `<h1>Hi </h1>`
    template: '#counter-template',
    data: function() {
        return { count: 0 }
    }
});

new Vue({
    el: '#app',
    data: {
        count: 0,
        message: ''
    },
    methods: {
        handleIt: function (e) {
            //e.preventDefault();
        },
        doSomething: function () {
            console.log('clicked');
            this.count++;
        }
    }
});