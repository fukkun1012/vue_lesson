<template>
    <main-container
        title="面談履歴"
        :tabs="tabs"
    >
        <nuxt-child></nuxt-child>
    </main-container>
</template>

<script>
    import MainContainer from "../../components/Molecules/MainContainer";
    export default {
        components: {MainContainer},
        data(){
            return{
                tabs:[
                    {name:'一覧',url:'/master/interview_history'},
                    {name:'新規作成',url:'/master/interview_history/add'},
                ]
            }
        },
    }
</script>

<style scoped>

</style>
