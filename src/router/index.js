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
        beforeEnter: (to,from,next) => {
            if(localStorage.getItem('token') != undefined){
                next();
            }

            else {
                next("/");
            }
        }
    },

    {
        path: '/homeEnfChefe',
        name: 'HomeEnfChefe',
        component: () =>
            import ('../enfChefeView/HomeEnfChefe.vue')
    },

    {
        path: '/homeEnf',
        name: 'HomeEnf',
        component: () =>
            import ('../enfViews/HomeEnf.vue')
    },

    {
        path: '/admBackup',
        name: 'AdmBackup',
        component: () =>
            import ('../admViews/AdmBackup.vue')
    },
    {
        path: '/admCadastrar',
        name: 'AdmCadastrar',
        component: () =>
            import ('../admViews/AdmCadastrar.vue')
    },
    
    
    {
        path: '/admEditar',
        name: 'AdmEditar',
        component: () =>
            import ('../admViews/AdmEditar.vue')
    },
    {
        path: '/admEditarForm',
        name: 'AdmEditarForm',
        component: () =>
            import ('../admViews/AdmEditarForm.vue')
    },

    {
        path: '/admLog',
        name: 'AdmLog',
        component: () =>
            import ('../admViews/AdmLog.vue')
    },


    {
        path: '/EnfChefeCadastrarPaciente',
        name: 'EnfChefeCadastrarPaciente',
        component: () =>
            import ('../enfChefeView/EnfChefeCadastrarPaciente.vue')
    },
    {
        path: '/EnfChefeAcompanhaProntuario',
        name: 'EnfChefeAcompanhaProntuario',
        component: () =>
            import ('../enfChefeView/EnfChefeAcompanhaProntuario.vue')
    },
    {
        path: '/EnfChefeAgendamentoPendentes',
        name: 'EnfChefeAgendamentoPendentes',
        component: () =>
            import ('../enfChefeView/EnfChefeAgendamentoPendentes.vue')
    },
    {
        path: '/EnfChefeAgendamentosConcluidos',
        name: 'EnfChefeAgendamentosConcluidos',
        component: () =>
            import ('../enfChefeView/EnfChefeAgendamentosConcluidos.vue')
    },
    {
        path: '/EnfChefeEstoqueMedicamentos',
        name: 'EnfChefeEstoqueMedicamentos',
        component: () =>
            import ('../enfChefeView/EnfChefeEstoqueMedicamentos.vue')
    },
    {
        path: '/EnfChefeIniciarProntuario',
        name: 'EnfChefeIniciarProntuario',
        component: () =>
            import ('../enfChefeView/EnfChefeIniciarProntuario')
    },
    {
        path: '/EnfChefeRelatorio',
        name: 'EnfChefeRelatorio',
        component: () =>
            import ('../enfChefeView/EnfChefeRelatorio.vue')
    },
    {
        path: '/EnfChefeListaPacientes',
        name: 'EnfChefeListaPacientes',
        component: () =>
            import ('../enfChefeView/EnfChefeListaPacientes.vue')
    },
    {
        path: '/HomeEnf',
        name: 'HomeEnf',
        component: () =>
            import ('../enfViews/HomeEnf.vue')

    },
    {
        path: '/EnfCadastrarPaciente',
        name: 'EnfCadastrarPaciente',
        component: () =>
            import ('../enfViews/EnfCadastrarPaciente.vue')

    },
    {
        path: '/EnfAgendamentoPendentes',
        name: 'EnfAgendamentoPendentes',
        component: () =>
            import ('../enfViews/EnfAgendamentoPendentes.vue')

    },
    {
        path: '/EnfEstoqueMedicamentos',
        name: 'EnfEstoqueMedicamentos',
        component: () =>
            import ('../enfViews/EnfEstoqueMedicamentos.vue')

    },
    {
        path: '/EnfRelatorioPaciente',
        name: 'EnfRelatorioPaciente',
        component: () =>
            import ('../enfViews/EnfRelatorioPaciente.vue')

    },
    {
        path: '/EnfAgendamentoConcluidos',
        name: 'EnfAgendamentoConcluidos',
        component: () =>
            import ('../enfViews/EnfAgendamentoConcluidos.vue')

    }, {
        path: '/HomeEstag',
        name: 'HomeEstag',
        component: () =>
            import ('../estagViews/HomeEstag.vue')

    }, {
        path: '/EstagAgendamentoPendentes',
        name: 'EstagAgendamentoPendentes',
        component: () =>
            import ('../estagViews/EstagAgendamentoPendentes.vue')

    }, {
        path: '/EstagEstoqueMedicamentos',
        name: 'EstagEstoqueMedicamentos',
        component: () =>
            import ('../estagViews/EstagEstoqueMedicamentos.vue')

    }, {
        path: '/EstagRelatorioPaciente',
        name: 'EstagRelatorioPaciente',
        component: () =>
            import ('../estagViews/EstagRelatorioPaciente.vue')

    }, {
        path: '/EstagAgendamentoConcluidos',
        name: 'EstagAgendamentoConcluidos',
        component: () =>
            import ('../estagViews/EstagAgendamentoConcluidos.vue')

    },
]

const router = createRouter({
    history: createWebHashHistory(),

    routes
})

export default router