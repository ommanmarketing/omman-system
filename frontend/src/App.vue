<template>
  <router-view />
</template>

<script setup>
// O router-view é o componente do Vue Router que exibe 
// a tela correspondente à URL acessada.
</script>

<style>
/* Reset básico para garantir que o Tailwind ocupe toda a tela */
html, body, #app {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  font-family: 'Inter', sans-serif; /* Mantendo a fonte que usamos no Dashboard */
}
</style>