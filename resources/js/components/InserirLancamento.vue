<template>
  <div>
    <div>
      <b-button v-b-modal.modal-1>Inserir lançamento</b-button>
    </div>

    <b-modal id="modal-1" title="Novo lançamento" hide-footer>
      <form method="POST" @submit.prevent="inserirLancamento">
        <input
          type="text"
          name="data_lancamentos"
          id="data_lancamentos"
          v-maska="'##/##/####'"
          class="form-control my-2"
          v-model="data_lancamentos"
          placeholder="Data"
        />
        <input
          type="text"
          name="num_documento"
          id="num_documento"
          placeholder="Número do documento"
          class="form-control my-2"
          v-model="num_documento"
        />
        <select
          name="operacao"
          id="operacao"
          class="custom-select my-2"
          @change="opSelecionada($event)"
        >
          <option value="c">Crédito</option>
          <option value="d">Débito</option>
        </select>
        <select
          name="tipo_id"
          id="tipo_id"
          class="custom-select my-2"
          @change="tipoSelecionado($event)"
        >
          <option value="1">Imposto</option>
          <option value="2">Tarifa</option>
          <option value="3">Pagamento</option>
          <option value="4">Salário</option>
          <option value="5">Transferência</option>
          <option value="6">Recebimentos</option>
        </select>
        <input
          type="text"
          placeholder="valor"
          name="valor"
          id="valor"
          class="form-control my-2"
          v-model="valor"
        />
        <div class="d-flex justify-content-end">
          <button
            type="submit"
            class="btn btn-secondary mx-2"
            @click="fecharModal"
          >
            Cancelar
          </button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </b-modal>
  </div>
</template>

<script>
import currencyFormatter from "currency-formatter";

export default {
  name: "InserirLancamento",
  data() {
    return {
      data_lancamentos: "",
      num_documento: "",
      operacao: "c",
      tipo_id: 1,
      valor: "",

      data_lancamento: "",
      n: 10,
    };
  },
  methods: {
    fecharModal() {
      this.$bvModal.hide("modal-1");
    },
    inserirLancamento(e) {
      e.preventDefault();
      let date = this.data_lancamentos.split("/");
      let dia = date[0];
      let mes = date[1];
      let ano = date[2];
      this.data_lancamento = `${ano}-${mes}-${dia}`;
      let lancamento = {
        data_lancamentos: this.data_lancamento,
        num_documento: this.num_documento,
        operacao: this.operacao,
        tipo_id: this.tipo_id,
        valor: this.valor.replace(",", "."),
      };
      // this.$store.dispatch("inserirLancamento", lancamento);
    },
    opSelecionada(event) {
      this.operacao = event.target.value;
    },
    tipoSelecionado(event) {
      this.tipo_id = event.target.value;
    },
    increment() {
      this.n++;
    },
  },
};
</script>

<style scoped>
</style>