<template>
    <div>
        <search-form
            :keys="headers"
            v-model="params"
            @search="$refs.table.getItems()"
        ></search-form>
        <data-table
            ref="table"
            :headers="headers"
            :url="'/admin' + $apis.interview_history"
            :params="params"
            :click_row="clickRow"
        ></data-table>

    </div>
</template>

<script>
    import SearchForm from "../../../components/Molecules/SearchForm";
    import DataTable from "../../../components/Molecules/DataTable";
    export default {
        name: "index",
        components: {DataTable, SearchForm},
        data(){
            return{
                headers: [
                    { text: '面談日', value: 'date', type: 'date' },
                    { text: '受講者名', value: 'student_name_kana' },
                    { text: '評価', value: 'sales_evaluation' },
                    { text: '評価者', value: 'user_name' },
                    {
                        text: '',
                        value: '',
                        type: 'btn',
                        label: '受講者画面',
                        color: this.$colors.main,
                        dark: true,
                        action: (item) => { this.$router.push('/'); },
                        searchable: false
                    },
                ],
                params:{
                    name:null,
                }
            }
        },
        created() {
            this.$store.dispatch('page/setTitle', '面談履歴');
            this.$store.dispatch('page/showTab');
            // this.$store.dispatch('page/hideBackButton');
            this.$store.dispatch('page/showbackButton');
            this.$store.dispatch('page/setUrl', '/master');
        },
        methods:{
            clickRow(item){
                this.$router.push('/master/interview_history/' + item.student_id);
            },
        }
    }
</script>

<style scoped>

</style>
