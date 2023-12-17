const { createApp } = Vue;

createApp({
    data() {
        return {
            discList: [],
            apiUrl: "index.php",
            

        }
    },
    created() {
        axios.get(this.apiUrl).then((resp) => {
            this.discList = resp.data;
          });

    },
    methods: {

    }
}).mount("#app");