<template>
  <div>
    <login v-if="!isAuthenticated"></login>
  </div>
</template>

<script>
import login from '~/components/login.vue'

export default {
  components: { login },
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
