const { createApp } = Vue;

createApp({
  data() {
    return {
      arrMusic: [],
    };
  },

  methods: {
    getData() {
      console.log("ciao");
      axios.get("data.php").then((response) => (this.arrMusic = response.data));
    },
  },
  created() {
    this.getData();
  },
}).mount("#app");
