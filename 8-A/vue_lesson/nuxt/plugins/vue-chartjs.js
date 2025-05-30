import Vue from 'vue';
import {mixins, Bar, HorizontalBar, Doughnut, Line, Pie, PolarArea, Radar, Bubble, Scatter} from 'vue-chartjs';

const {reactiveProp} = mixins;

Vue.component('bar-chart', {
    extends: Bar,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('horizontal-bar-chart', {
    extends: HorizontalBar,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('doughnut-chart', {
    extends: Doughnut,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('line-chart', {
    extends: Line,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('pie-chart', {
    extends: Pie,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('polar-area-chart', {
    extends: PolarArea,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('radar-chart', {
    extends: Radar,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('bubble-chart', {
    extends: Bubble,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
Vue.component('scatter-chart', {
    extends: Scatter,
    mixins: [reactiveProp],
    props: {
        options: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        this.renderChart(this.chartData, this.options);
    },
});
