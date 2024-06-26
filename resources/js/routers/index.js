import { createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue';
import Bantuan from '../pages/Bantuan.vue';
import LoginPage from '../pages/LoginPage.vue';
 
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            title: 'MBKM Kampus Mengajar',
            requireAuth: false
        }
    },
    {
        path: '/bantuan',
        name: 'bantuan',
        component: Bantuan,
        meta: {
            title: 'Butuh Bantuan',
            requireAuth: false
        }
    }
];
 
const router = createRouter({
    history: createWebHistory(),
    routes
});

// Redirect Route Guest
router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.guest)) {
      if (store.getters.isAuthenticated) {
        next("/");
        return;
      }
      next();
      return;
    }
    
    next();
    return;
});

router.beforeEach((to, from, next) => {
    if(to.meta.title) {
      document.title = to.meta.title;
    }
    
    if(to.matched.some(record => record.meta.requireAuth)) {
      const dataAuth = JSON.parse(localStorage.getItem('_auth'));
      if(!dataAuth) {
        next('/login');
        return
      }
  
      if (store.getters.isAuthenticated) {
        // store.commit('config/setLoadSplash', false);
        next()
        return
      }else {
        next('/login')
        return
      }
    } else {
      next()
      return;
    }
});

export default router;

