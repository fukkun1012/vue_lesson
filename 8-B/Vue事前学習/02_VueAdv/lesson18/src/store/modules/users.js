const state = {
    user: {}
};

const mutations = {
    toUserDetail(state, userDetail) {
        state.user = userDetail;
    }
};

const actions = {
    toUserDetail(context, userDetail) {
        context.commit('toUserDetail', userDetail);
    }
};

const getters = {
    userDetail: state => state.user,
};

export default {
    state,
    mutations,
    actions,
    getters,
}