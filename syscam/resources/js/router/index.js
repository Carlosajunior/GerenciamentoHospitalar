
import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/homeAdm',
    name: 'HomeAdm',
    component: () => import('../admViews/HomeAdm.vue')
  },

  {
    path:'/homeEnfChefe',
    name: 'HomeEnfChefe',
    component: () => import('../enfChefeView/HomeEnfChefe.vue')
  },

  {
    path: '/homeEnf',
    name: 'HomeEnf',
    component:() => import('../enfViews/HomeEnf.vue')
  },

  {
    path: '/admBackup',
    name : 'AdmBackup',
    component:() => import('../admViews/AdmBackup.vue')
  },
  {
    path:'/admCadastrar',
    name:'AdmCadastrar',
    component:() => import('../admViews/AdmCadastrar.vue')
  },
  {
    path:'/admEditar',
    name:'AdmEditar',
    component:() => import ('../admViews/AdmEditar.vue')
  },

  {
    path:'/admLog',
    name:'AdmLog',
    component:() => import('../admViews/AdmLog.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
