<template>
  <div class="dashboard-container">
    <div 
      v-for="frameIndex in 5" 
      :key="frameIndex" 
      class="dashboard-frame"
    >
      <!-- Bloco Rosa -->
      <div class="card card-pink">
        <span class="card-text">
          div1 wrap vai
        </span>
      </div>

      <!-- Bloco Azul 1 -->
      <div class="card card-cyan">
        <span class="card-text">
          div1 wrap vai
        </span>
      </div>

      <!-- Bloco Azul 2 -->
      <div class="card card-cyan">
        <span class="card-text">
          div1 wrap vai
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DashboardIndex",
  props: {}
};
</script>

<style scoped>
/* Container Principal */
.dashboard-container {
  width: 100%;
  min-height: 100vh;
  background-color: #ffffff;
  display: flex;
  flex-direction: column;
  gap: 16px;
  padding: 16px;
  box-sizing: border-box;
}

/* Moldura que Agrupa os Cards */
.dashboard-frame {
  width: 100%;
  display: flex;
  flex-direction: column; /* Empilhado no celular */
  gap: 16px;
  padding: 16px;
  border: 1px solid #f3f4f6;
  border-radius: 16px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  box-sizing: border-box;
}

/* Base de Cada Card */
.card {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  border-radius: 12px;
  transition: all 0.3s ease;
}

/* Definição de Cores Especificas */
.card-pink {
  background-color: #fda0a0;
}

.card-cyan {
  background-color: #00ced5;
}

/* Estilo do Texto Interno */
.card-text {
  color: #000000;
  font-family: 'Inter', Helvetica, sans-serif;
  font-size: 1.25rem; /* Responsivo: menor no mobile */
  font-weight: 400;
  text-align: center;
  word-break: break-word;
}

/* Responsividade: Telas a partir de 768px (Tablets e Desktops) */
@media (min-width: 768px) {
  .dashboard-container {
    gap: 24px;
    padding: 32px;
  }

  .dashboard-frame {
    flex-direction: row; /* Fica lado a lado em telas maiores */
    gap: 24px;
    padding: 24px;
  }

  .card {
    padding: 40px;
  }

  .card-text {
    font-size: 2rem;
  }
}

/* Responsividade: Telas grandes (Desktops / 1024px+) */
@media (min-width: 1024px) {
  .card-text {
    font-size: 2.5rem;
  }
}
</style>