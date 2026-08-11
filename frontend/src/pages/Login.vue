<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <!-- Card de Login -->
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-md border border-gray-200">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Omman System</h2>
      
      <form @submit.prevent="handleLogin" class="flex flex-col gap-5">
        
        <!-- Email -->
        <div class="flex flex-col gap-1">
          <label for="email" class="text-sm font-medium text-gray-700">E-mail</label>
          <input 
            v-model="loginForm.email" 
            type="email" 
            id="email" 
            required 
            placeholder="admin@omman.com.br"
            class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <!-- Senha -->
        <div class="flex flex-col gap-1">
          <label for="password" class="text-sm font-medium text-gray-700">Senha</label>
          <input 
            v-model="loginForm.password" 
            type="password" 
            id="password" 
            required 
            placeholder="••••••••"
            class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <!-- Manter conectado e Esqueci a senha -->
        <div class="flex items-center justify-between mt-2">
          <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
            <input v-model="loginForm.remember" type="checkbox" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500" />
            Manter-se conectado
          </label>
          
          <button type="button" @click="showModal = true" class="text-sm font-medium text-blue-600 hover:underline">
            Esqueceu a senha?
          </button>
        </div>

        <!-- Botão Entrar -->
        <button type="submit" class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition-colors">
          Entrar
        </button>
      </form>
    </div>

    <!-- MODAL: Recuperação de Senha -->
    <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4">
      <div class="bg-white w-full max-w-sm p-6 rounded-2xl shadow-xl">
        <h3 class="text-lg font-bold text-gray-800 mb-2">Recuperar Senha</h3>
        <p class="text-sm text-gray-600 mb-4">
          Digite seu e-mail abaixo e enviaremos um link para redefinir sua senha.
        </p>

        <form @submit.prevent="handlePasswordReset" class="flex flex-col gap-4">
          <input 
            v-model="resetEmail" 
            type="email" 
            required 
            placeholder="Seu e-mail cadastrado"
            class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
          
          <div class="flex justify-end gap-2 mt-2">
            <button type="button" @click="showModal = false" class="px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 rounded-lg">
              Cancelar
            </button>
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
              Enviar Link
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

// Estado do formulário de login
const loginForm = reactive({
  email: '',
  password: '',
  remember: false
})

// Estado do modal de recuperação
const showModal = ref(false)
const resetEmail = ref('')

// Lógica de Login
const handleLogin = async () => {
  // AQUI VAI A SUA LÓGICA DE BACKEND (Ex: Axios POST para /api/login)
  console.log('Tentando logar com:', loginForm)

  // Simulando sucesso e redirecionando para o Dashboard
  router.push('/dashboard')
}

// Lógica de Recuperação de Senha
const handlePasswordReset = async () => {
  // AQUI VAI A SUA LÓGICA DE BACKEND (Ex: Axios POST para /api/forgot-password)
  console.log('Solicitando reset para:', resetEmail.value)
  
  alert(`Link de recuperação enviado para ${resetEmail.value}`)
  showModal.value = false
  resetEmail.value = ''
}
</script>