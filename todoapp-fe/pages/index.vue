<template>
  <div>
    <login-form v-if="!isAuthenticated" />
  </div>
</template>

<script>
import LoginForm from '../components/loginForm.vue'

export default {
  components: { LoginForm },
  data() {
    return {
      isAuthenticated: false,
    }
  },
  methods: {
    register() {

    },
    login() {

    },
  },
}
</script>
