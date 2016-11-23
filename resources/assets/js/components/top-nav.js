var Example = Vue.extend({
    template: require('./top-nav.html'),
    data: function () {
        return {
            example: "Vue: Project Name"
        };
    },
    ready: function () {
        
    },
    methods: {
        
    }
});

Vue.component('top-nav', Example);