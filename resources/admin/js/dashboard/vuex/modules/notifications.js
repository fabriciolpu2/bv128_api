export default {
    state: {
        items: [],
        total: 0

    },

    mutations: {
        LOAD_NOTIFICATIONS(state, notifications) {
            state.items = notifications
        },

        MARK_AS_READ(state, id) {
            let index = state.items.filter(notification => notification.id == id)
            state.items.splice(index, 1)
        },

        MARK_ALL_AS_READ(state) {
            state.items = []
        },

        COUNT_NOTIFICATIONS(state, count) {
            state.total = count
        }
    },

    actions: {
        loadNotifications(context) {
            setTimeout(() => {
                axios.get('/notifications')
                    .then(response => {

                        context.commit('LOAD_NOTIFICATIONS', response.data.items)
                        context.commit('COUNT_NOTIFICATIONS', response.data.total)
                    })
            }, 1000)
        },

        markAsRead(context, params) {
            axios.put('/notification-read', params)
                .then(() => context.commit('MARK_AS_READ', params.id))
        },

        markAllAsRead(context) {
            axios.put('/notification-all-read')
                .then(() => context.commit('MARK_ALL_AS_READ'))
        },


    }
}
