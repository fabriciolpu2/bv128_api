<template>
  <div class="card" style="width: 18rem">
    <div class="card-header"><h4>Saldo atual</h4></div>
    <div class="card-body">
      <p class="card-text text-right">
        {{ saldo }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "Saldo",
  methods: {
    getSaldo() {
      this.$store.dispatch("getSaldo");
    },
  },
  mounted() {
    this.getSaldo();
  },
  computed: {
    saldo() {
      // let s = this.$store.state.saldo;
      // let saldo = String(s).substr(2, String(s).length - 1);
      let saldo = new Intl.NumberFormat([], {
        style: "currency",
        currency: "BRL",
      }).format(this.$store.state.saldo);
      return saldo;
    },
  },
};
</script>

<style scoped>
.card-text {
  font-size: 26px;
}
</style>