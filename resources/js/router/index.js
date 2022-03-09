import Vue from 'vue';
import Router from 'vue-router';
import Home from '../components/Home.vue';
import Recipes from '../components/Recipes.vue';
import Blog from '../components/Blog.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }, 
        {
            path: '/recipes',
            name: 'recipes',
            component: Recipes
        }, 
        {
            path: '/blog',
            name: 'blog',
            component: Blog
        }
    ]
});