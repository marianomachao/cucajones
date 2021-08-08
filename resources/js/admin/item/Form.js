import AppForm from '../app-components/Form/AppForm';

Vue.component('item-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                type:  '' ,
                active:  true ,
                title:  '' ,
                url:  '' ,
                text:  '',
                image: ''
            },
            mediaCollections: ['gallery']
        }
    }

});