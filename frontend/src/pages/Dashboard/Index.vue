<template>
  <div class="w-full min-h-screen bg-slate-50 flex flex-col gap-6 p-4 sm:p-6 lg:p-8">
    
    <!-- Cabeçalho do Dashboard -->
    <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80">
      <div>
        <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
          Dashboard
        </h1>
        <p class="text-slate-500 text-sm sm:text-base mt-1">
          Visão geral e métricas do Omman System.
        </p>
      </div>

      <div class="flex items-center gap-3">
        <button class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-orange-600 hover:bg-orange-700 active:bg-orange-800 text-white font-medium text-sm rounded-xl shadow-sm transition-all duration-200">
          <Plus :size="18" />
          <span>Novo Cliente</span>
        </button>
      </div>
    </header>

    <!-- Grid de Métricas Principais -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Total de Clientes</span>
          <div class="p-2.5 bg-orange-50 text-orange-600 rounded-xl">
            <Users :size="20" />
          </div>
        </div>
        <div class="mt-4 flex items-baseline justify-between">
          <span class="text-2xl sm:text-3xl font-bold text-slate-900">1.248</span>
          <span class="inline-flex items-center text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">
            +12%
          </span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Receita Mensal</span>
          <div class="p-2.5 bg-emerald-50 text-emerald-600 rounded-xl">
            <TrendingUp :size="20" />
          </div>
        </div>
        <div class="mt-4 flex items-baseline justify-between">
          <span class="text-2xl sm:text-3xl font-bold text-slate-900">R$ 48.500</span>
          <span class="inline-flex items-center text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">
            +8.4%
          </span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Projetos Ativos</span>
          <div class="p-2.5 bg-blue-50 text-blue-600 rounded-xl">
            <LayoutDashboard :size="20" />
          </div>
        </div>
        <div class="mt-4 flex items-baseline justify-between">
          <span class="text-2xl sm:text-3xl font-bold text-slate-900">32</span>
          <span class="inline-flex items-center text-xs font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded-full">
            0%
          </span>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Taxa de Conversão</span>
          <div class="p-2.5 bg-purple-50 text-purple-600 rounded-xl">
            <Activity :size="20" />
          </div>
        </div>
        <div class="mt-4 flex items-baseline justify-between">
          <span class="text-2xl sm:text-3xl font-bold text-slate-900">24.5%</span>
          <span class="inline-flex items-center text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">
            +3.1%
          </span>
        </div>
      </div>

    </section>

    <!-- Grid Flexível de Testes (Adaptado do protótipo) -->
    <section class="w-full flex flex-col gap-4 sm:gap-6">
      <div 
        v-for="frameIndex in 3" 
        :key="frameIndex" 
        class="w-full flex flex-col lg:flex-row items-stretch gap-4 lg:gap-6 p-4 sm:p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all"
      >
        <!-- Bloco Laranja (Omman Brand) -->
        <div class="flex-1 bg-gradient-to-br from-orange-500 to-orange-600 flex flex-col justify-between p-6 sm:p-8 rounded-xl text-white shadow-sm">
          <span class="text-xs font-medium uppercase tracking-widest text-orange-200">Módulo {{ frameIndex }}</span>
          <span class="text-lg sm:text-2xl font-bold mt-4 tracking-tight">
            Painel Operacional
          </span>
        </div>

        <!-- Bloco Neutro Escuro -->
        <div class="flex-1 bg-slate-900 flex flex-col justify-between p-6 sm:p-8 rounded-xl text-white shadow-sm">
          <span class="text-xs font-medium uppercase tracking-widest text-slate-400">Status da API</span>
          <span class="text-lg sm:text-2xl font-bold mt-4 tracking-tight text-emerald-400">
            Conectado (Laravel)
          </span>
        </div>

        <!-- Bloco Neutro Claro -->
        <div class="flex-1 bg-slate-100 flex flex-col justify-between p-6 sm:p-8 rounded-xl text-slate-800 shadow-sm border border-slate-200">
          <span class="text-xs font-medium uppercase tracking-widest text-slate-500">Métricas</span>
          <span class="text-lg sm:text-2xl font-bold mt-4 tracking-tight text-slate-900">
            99.9% Uptime
          </span>
        </div>
      </div>
    </section>

  </div>
</template>

<script setup>
import { 
  Users, 
  TrendingUp, 
  LayoutDashboard, 
  Activity, 
  Plus 
} from 'lucide-vue-next'
</script>