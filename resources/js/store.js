import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

const BASE_API_URL = 'http://10.0.0.125:8000/api/'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        saldo: {}
    },
    mutations: {
        setSaldo(state, saldo) {
            state.saldo = saldo
        }
    },
    actions: {
        getSaldo(contex) {
            return new Promise((resolve, reject) => {
                axios.get(BASE_API_URL + 'saldo').then((response) => {
                    console.log(response)
                    contex.commit('setSaldo', response.data)
                    resolve(response)
                }).catch((error) => {
                    reject(error)
                })
            })
        },
        inserirLancamento(context, lancamento) {
            // console.log(lancamento)
            return new Promise((resolve, reject) => {
                axios.post(BASE_API_URL + 'lancamento', lancamento).then((response) => {
                    console.log(response)
                    resolve(response)
                }).catch((error) => {
                    console.log(error.response.data)
                    reject(error)
                })
            })
        }
    }
})

export default store