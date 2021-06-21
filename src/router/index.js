import { createRouter, createWebHashHistory } from 'vue-router'



const routes = [{
        path: '/',
        name: 'Home',
        component: () =>
            import ('../views/Home.vue')
    },
    {
        path: '/about',
        name: 'About',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/About.vue')
    },
    {
        path: '/homeAdm',
        name: 'HomeAdm',
        component: () =>
            import ('../admViews/HomeAdm.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },

    {
        path: '/homeEnfChefe',
        name: 'HomeEnfChefe',
        component: () =>
            import ('../enfChefeView/HomeEnfChefe.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },

    {
        path: '/homeEnf',
        name: 'HomeEnf',
        component: () =>
            import ('../enfViews/HomeEnf.vue'),

        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },

    {
        path: '/admBackup',
        name: 'AdmBackup',
        component: () =>
            import ('../admViews/AdmBackup.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/admCadastrar',
        name: 'AdmCadastrar',
        component: () =>
            import ('../admViews/AdmCadastrar.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },


    {
        path: '/admEditar',
        name: 'AdmEditar',
        component: () =>
            import ('../admViews/AdmEditar.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/admEditarForm',
        name: 'AdmEditarForm',
        component: () =>
            import ('../admViews/AdmEditarForm.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },

    {
        path: '/admLog',
        name: 'AdmLog',
        component: () =>
            import ('../admViews/AdmLog.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },


    {
        path: '/EnfChefeCadastrarPaciente',
        name: 'EnfChefeCadastrarPaciente',
        component: () =>
            import ('../enfChefeView/EnfChefeCadastrarPaciente.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeAcompanhaProntuario',
        name: 'EnfChefeAcompanhaProntuario',
        component: () =>
            import ('../enfChefeView/EnfChefeAcompanhaProntuario.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeAgendamentoPendentes',
        name: 'EnfChefeAgendamentoPendentes',
        component: () =>
            import ('../enfChefeView/EnfChefeAgendamentoPendentes.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeAgendamentosConcluidos',
        name: 'EnfChefeAgendamentosConcluidos',
        component: () =>
            import ('../enfChefeView/EnfChefeAgendamentosConcluidos.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeEstoqueMedicamentos',
        name: 'EnfChefeEstoqueMedicamentos',
        component: () =>
            import ('../enfChefeView/EnfChefeEstoqueMedicamentos.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeIniciarProntuario',
        name: 'EnfChefeIniciarProntuario',
        component: () =>
            import ('../enfChefeView/EnfChefeIniciarProntuario'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeRelatorio',
        name: 'EnfChefeRelatorio',
        component: () =>
            import ('../enfChefeView/EnfChefeRelatorio.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeListaPacientes',
        name: 'EnfChefeListaPacientes',
        component: () =>
            import ('../enfChefeView/EnfChefeListaPacientes.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/EnfChefeOpView',
        name: 'EnfChefeOpView',
        component: () =>
            import ('../enfChefeView/EnfChefeOpView.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }
    },
    {
        path: '/HomeEnf',
        name: 'HomeEnf',
        component: () =>
            import ('../enfViews/HomeEnf.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    },
    {
        path: '/EnfCadastrarPaciente',
        name: 'EnfCadastrarPaciente',
        component: () =>
            import ('../enfViews/EnfCadastrarPaciente.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    },
    {
        path: '/EnfAgendamentoPendentes',
        name: 'EnfAgendamentoPendentes',
        component: () =>
            import ('../enfViews/EnfAgendamentoPendentes.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    },
    {
        path: '/EnfEstoqueMedicamentos',
        name: 'EnfEstoqueMedicamentos',
        component: () =>
            import ('../enfViews/EnfEstoqueMedicamentos.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    },
    {
        path: '/EnfRelatorioPaciente',
        name: 'EnfRelatorioPaciente',
        component: () =>
            import ('../enfViews/EnfRelatorioPaciente.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    },
    {
        path: '/EnfAgendamentoConcluidos',
        name: 'EnfAgendamentoConcluidos',
        component: () =>
            import ('../enfViews/EnfAgendamentoConcluidos.vue'),
        beforeEnter: (to, from, next) => {
            if (sessionStorage.getItem('token') != undefined) {
                next();
            } else {
                next("/");
            }
        }

    }
]

const router = createRouter({
    history: createWebHashHistory(),

    routes
})

export default router