<template>
    <div>
        <form v-if="!mensagemEnviada" action="#" method="POST" class="contact-us-form" novalidate="novalidate">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="form-group">
                        <input type="text" v-bind:class="hasErrors(errors.nome)"  v-model="form.nome" name="name" placeholder="Seu nome" required="required">
                        <field-error v-if="errors.nome" :errors="errors">{{ errors.nome[0] }}</field-error>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <input type="email" v-bind:class="hasErrors(errors.email)" v-model="form.email" name="email" placeholder="Email" required="required">
                        <field-error v-if="errors.email" :errors="errors">{{ errors.email[0] }}</field-error>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <input v-mask="'(##) #####-####'" type="text" name="telefone" v-bind:class="hasErrors(errors.telefone)" v-model="form.telefone" id="phone" placeholder="Telefone">
                        <field-error v-if="errors.telefone" :errors="errors">{{ errors.telefone[0] }}</field-error>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="message" id="message" v-bind:class="hasErrors(errors.mensagem)"  v-model="form.mensagem" rows="7" cols="25" placeholder="Mensagem"></textarea>
                        <field-error v-if="errors.mensagem" :errors="errors">{{ errors.mensagem[0] }}</field-error>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <button type="button" :disabled="enviando" @click="enviar" class="btn primary-solid-btn">
                        <span v-if="!enviando">Enviar</span>
                        <scale-loader :loading="enviando" :color="'#fff'"></scale-loader>
                    </button>
                </div>
            </div>
        </form>

        <div v-if="mensagemEnviada" class="single-services single-feature-hover gray-light-bg single-feature text-center p-5 h-100">
            <span class="ti-email icon-color-4 icon rounded"></span>
            <div class="feature-content">
                <h5 class="mb-2">Mensagem enviada!</h5>
                <p>Obrigado pelo seu contato.</p>
                <p>Em breve retornaremos sua mensagem!</p>
            </div>
        </div>
    </div>
</template>

<script>
    import FieldError from "./FieldError.vue";

    export default {
        components: {
            FieldError
        },
        data(){
            return {
                enviando: false,
                mensagemEnviada: false,
                form: {
                    nome: '',
                    email: '',
                    telefone: '',
                    mensagem: ''
                },
                errors: []
            }
        },

        mounted() {

        },

        methods: {
            hasErrors(hasError){
                if(hasError){
                    return 'form-control is-invalid';
                }else{
                    return 'form-control';
                }
            },

            enviar(evt){

                console.log('chegou aqui');

                evt.preventDefault();
                this.enviando = true;

                let formData = new FormData();

                formData.append("nome", this.form.nome);
                formData.append("email", this.form.email);
                formData.append("telefone", this.form.telefone);
                formData.append("mensagem", this.form.mensagem);

                axios
                .post("/contato", formData)
                .then(result => {
                    this.mensagemEnviada = true;
                    this.enviando = false;
                })
                .catch(error => {
                    this.enviando = false;
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                });
            }
        }
    }
</script>
