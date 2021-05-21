<template>
    <div class="sidebar">
      <div class="sidebar-brand">
        <router-link to= 'HomeEnfChefe'> 
        <h2><span class="lab la-accusoft"></span> <span>Enfermeiro Chefe</span>
        </h2>
        </router-link>
      </div>

      <div class="sidebar-menu" >  
        <ul>
        <li>
          <router-link to='/HomeEnfChefe' active-class="ativo"> 
          <a href="" >
            <span class="las la-igloo"></span><span>Home</span>
          </a>
          </router-link>
        </li>
        <li>
            <router-link to='/EnfChefeCadastrarPaciente' active-class="ativo">
            <a href="" >
              <span class="las la-igloo"></span><span>Cadastrar Paciente</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to='/EnfChefeListaPacientes' active-class="ativo">
            <a href="">
              <span class="las la-igloo"></span><span>Lista de Pacientes</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to='/EnfChefeIniciarProntuario' active-class="ativo">
            <a href="">
              <span class="las la-users"></span><span>Iniciar Prontuário</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to ='/EnfChefeAcompanhaProntuario' active-class="ativo">
            <a href="" >
              <span class="las la-clipboard-list"></span><span>Acompanhar Prontuário

              </span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to='/EnfChefeAgendamentoPendentes' active-class="ativo">
            <a href="" >
              <span class="las la-shopping-bag"></span><span>Agendamentos pendentes</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to= '/EnfChefeAgendamentosConcluidos' active-class="ativo">
              <a href="">
              <span class="las la-shopping-bag"></span><span>Agendamentos Concluídos</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to= '/EnfChefeEstoqueMedicamentos' active-class="ativo">
              <a href="">
              <span class="las la-shopping-bag"></span><span>Estoque de Medicamentos</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to= '/EnfChefeRelatorio' active-class="ativo">
              <a href="">
              <span class="las la-shopping-bag"></span><span>Relatório de Profissionais</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to= "" active-class="ativo">
              <a href="">
              <span class="las la-shopping-bag"></span><span>Sair</span>
            </a>
            </router-link>
          </li>
        </ul>
      </div>

    </div>
</template>

<script>
export default {
    
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');  

:root {
  --main-color: #f2f2f2;
  --color-dark: #1d2231;
  --text-grey: #8390a2;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

.sidebar {
  width: 345px;
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  background: var(--main-color);
  z-index: 100;
  transition: width 400ms;
}

.sidebar-brand {
  height: 90px;
  padding: 1rem 0rem 1rem 2rem;
  color: black;
}

.sidebar-brand span {
  display: inline-block;
  padding-right: 1rem;
}

.sidebar-menu {
  margin-top: 1rem;
}

.sidebar-menu li {
  width: 100%;
  margin-bottom: 1em;
  padding-left: 2rem;
}

.sidebar-menu a {
  padding-left: 1rem;
  display: block;
  color: black;
  font-size: 1.1rem;
  text-decoration: none;
}

.sidebar-menu a:hover{
  background: #9C4747;
  font-size: 110%;
  color: white;
  border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a.ativo{
  background: #9C4747;
  border-radius: 30px 0px 0px 30px;
  box-shadow: 1px 5px 5px 1px black;
  color: #fff;
}



.sidebar-menu a span:first-child {
  font-size: 1.5rem;
  padding-right: 1rem;
}



#nav-toggle:checked + .sidebar{
  width: 70px;
}

#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
  padding-left: 1rem;
  text-align: center;
}

#nav-toggle:checked + .sidebar li a {
  padding-left: 0rem;
}

#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
  display: none;
}

#nav-toggle:checked ~ .main-content {
  margin-left: 70px;
}

#nav-toggle:checked ~ .main-content header {
  width: calc(100% - 70px);
  left: 70px;
}

.main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
}

header {
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem 1.5rem;
  box-shadow: 2px 2px 5px rgba(0,0, 0,0.2);
  position: fixed;
  left: 345px;
  width: calc(100% - 345px);
  top: 0;
  z-index: 100;
  transition: left 400ms;
}

#nav-toggle {
  display: none;
}

header h2 {
  color: #222;
}

header label span {
  font-size: 1.7rem;
  padding-right: 1rem;
} 
</style>