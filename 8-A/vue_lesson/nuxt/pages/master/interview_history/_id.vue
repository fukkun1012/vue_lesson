<!-- <template>
    <edit-form
        v-model="data"
        :loading="loading"
        @reload="getDetail()"
    >
    </edit-form>
</template>

<script>
import EditForm from "~/components/Curriculum/EditForm";

export default {
    components: {EditForm},
    data() {
        return {
            data:{
                curriculum: {},
                steps: [],
            },
            loading: true
        }
    },
    created() {
        this.$store.dispatch('page/setTitle', '面談履歴詳細');
        this.$store.dispatch('page/hideTab');
        this.$store.dispatch('page/showBackButton');
        this.$store.dispatch('page/setBackUrl',null)
        this.getDetail();
    },
    methods:{
        async getDetail(){
            this.data = {
                curriculum: {},
                steps: [],
                deleted: []
            }
            this.loading = true;
            const url = '/admin' + this.$apis.curriculum + '/' + this.$route.params.id;
            try{
                const res = await this.$axios.get(url);
                this.data = res.data;
                this.loading = false;
                this.data.deleted = [];
            } catch (e) {
                this.$utils.catchError(e);
            }
        }
    }
}
</script>

<style scoped>

</style> -->
<template>
    <main-container
        title="受講者プロフィール"
        :tabs="[]"
    >
        <student-detail v-model="data"/>
    </main-container>
    </template>

    <script>
    import MainContainer from "@/components/Molecules/MainContainer";
    import StudentDetail from "@/components/Student/StudentDetail";
    export default {
        components: {StudentDetail, MainContainer},
        data(){
            return {
                data: {}
            }
        },
        created() {
            this.$store.dispatch('page/hideTab')
            if (!this.$route.query.new_tab) {
                this.$store.dispatch('page/showBackButton');
            }
            this.getData();
        },
        methods:{
            async getData(){
                try{
                    await this.$store.dispatch('loader/showSub');
                    const res = await this.$axios.get(this.$utils.getApiUrl(this.$apis.student_detail,true));
                    this.data = res.data;
                }catch (e) {
                    this.$utils.catchError(e);
                }finally {
                    await this.$store.dispatch('loader/hideSub');
                }
            }
        }
    }
    </script>

    <style scoped>

    </style>
