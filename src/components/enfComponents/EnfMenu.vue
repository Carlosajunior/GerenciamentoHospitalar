<template>
    <div class="sidebar">
      <div class="sidebar-brand">
        <router-link to= '/homeAdm'> 
        <h2><span class="lab la-accusoft"></span> <span>Syscam</span>
        </h2>
        </router-link>
      </div>

      <div class="sidebar-menu">
        <ul>
        <li>
            <router-link to='/homeAdm'>
            <a href="" class="active">
              <span class="las la-igloo"></span><span>Home</span>
            </a>
            </router-link>
          </li>
           <li>
            <router-link to="AdmCadastrar">
            <a href="">
              <span class="las la-igloo"></span><span>Cadastrar Pacientes</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to="AdmCadastrar">
            <a href="">
              <span class="las la-igloo"></span><span>Agendamento Pendentes</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to="AdmLog">
            <a href="">
              <span class="las la-users"></span><span>Estoque de Medicamentos</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to ="AdmEditar">
            <a href="">
              <span class="las la-clipboard-list"></span><span>Relatório de Pacientes</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to="AdmBackup">
            <a href="">
              <span class="las la-shopping-bag"></span><span>Agendamentos Concluídos</span>
            </a>
            </router-link>
          </li>
          <li>
            <router-link to= "/">
              <a href="">
              <span class="las la-shopping-bag"></span><span>Sair</span>
            </a>
            </router-link>
          </li>
        </ul>
      </div>

    </div>
</template>