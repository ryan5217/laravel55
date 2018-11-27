import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

export default new VueRouter({
    saveScrollPosition:true,
    // mode: 'history',
    routes:[
        {
            name:'hello',
            path:'/hello',
            component: resolve => void(require(['../components/Hello.vue'],resolve)),
            children:[
                {
                    name:'hellochildren',
                    path:'hellochildren',
                    component: resolve => void(require(['../components/HelloChildren.vue'],resolve))
                }
            ]
        },
        {
            name:"tab",
            path:'/tab',
            component: resolve => void(require(['../components/Tab.vue'],resolve))
        }
    ]
});