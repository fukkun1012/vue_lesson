Vue.component('link-component', {
    template: `
    <div class='like-button'>
    <p>{{ num }}</p>
    <button @click='num++'>+1</button>
    <slot></slot>
    </div>
    `,
    data() {
        return {
            num: 0
        }
    },
});