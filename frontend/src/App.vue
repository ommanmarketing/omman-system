<template>
  <div>

    <nav
      style="
      padding:20px;
      background:#ff6b00;
      display:flex;
      gap:20px;
      ">

      <RouterLink to="/">Dashboard</RouterLink>

      <RouterLink to="/clientes">Clientes</RouterLink>

    </nav>

    <RouterView/>

  </div>
</template>