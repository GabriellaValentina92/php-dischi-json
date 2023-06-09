const { createApp } = Vue;

createApp({
  data() {
    return {
      arrMusic: [],
    };
  },

  methods: {
    getData() {
      axios
        .get(
          "http://localhost:8080/esercizi%20pome%20php-backend/php-dischi-json/data.php"
        )
        .then((response) => (this.arrMusic = response.data));
    },

    created() {
      this.getData();
    },
  },
}).mount("#app");
