<template>
    <a class="dropdown-item" @click="bloquear()">
        <span v-if="!isBlocked">Bloquear</span>
        <span v-if="isBlocked">Desbloquear</span>
    </a>
</template>
<script>


export default {
    name: "BlockedComponent",

    props: {
        anuncianteObject: {
            required: true,
            type: String
        },
        bloqueado: {
            required: true,
            type: Boolean
        }
    },
    data() {
        return {

            user: null,
            isBlocked: false,

        };
    },

    mounted() {
        this.user = JSON.parse(this.anuncianteObject);
        this.isBlocked = this.bloqueado;

    },

    methods: {
        bloquear() {
            // this.refreshToken();
            this.isBlocked = !this.isBlocked;
            const formData = new FormData();
            formData.append("usuario", this.user.id);

            axios
                .post("/backend/bloquear", formData)
                .then(result => {
                    if (this.isBlocked != result.data.bloqueado) {
                        this.isBlocked = result.data.bloqueado;
                    }
                    history.go(0)
                })
                .catch(error => {
                    if (error.response.status == 401) {
                        this.isBlocked = !this.isBlocked;
                    }
                });
        },

    }
};
</script>

