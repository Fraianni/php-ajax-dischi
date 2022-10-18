console.log('JS OK!');

const app = new Vue({
    el: '#app',
    data() {
        return {
            dischi: [],
            toSearch: '',
        };
    },
    mounted() {
        console.log('vue is ready');
        axios
            .get('./data/data.php')
            .then((result) => {
                console.log(result.data);
                this.dischi = result.data;
            })
            .catch((e) => console.log(e));
    },
    methods: {
        filterStudents() {
            const query = this.toSearch.length > 0 ? '?detail=' + this.toSearch : '';

            axios
                .get('./data/students.php' + query)
                .then((result) => {
                    console.log(result.data);
                    this.students = result.data;
                })
                .catch((e) => console.log(e));
        },
    },
});
