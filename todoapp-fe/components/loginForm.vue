<template>
  <div>
    <b-row class="justify-content-center">
      <b-col sm="6">
        <h4 v-if="!isRegister" class="mb-4">Todo Login</h4>
        <h4 v-if="isRegister" class="mb-4">Todo Register</h4>
      </b-col>
    </b-row>

    <b-row class="justify-content-center">
      <b-col sm="6">
        <b-form-group
          label="Username."
          label-for="username"
          class="mb-0">
          <b-form-input id="username" type="text"></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>

    <b-row class="justify-content-center mt-3">
      <b-col sm="6">
        <b-form-group
          label="Password."
          label-for="username"
          class="mb-0">
          <b-form-input id="password" type="password"></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>

    <b-row class="mt-4 justify-content-center">
      <b-col sm="6">
        <b-button v-if="!isRegister" class="float-right" variant="primary" @click="login">Login</b-button>
        <b-button v-if="!isRegister" class="float-right mr-2" variant="info" @click="register">Register</b-button>
        <b-button v-if="isRegister" class="float-right mr-2" variant="info" @click="submit">Submit</b-button>
        <b-button v-if="isRegister" class="float-right mr-2" variant="primary" @click="cancel">Cancel</b-button>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  props: ['isRegister'],
  methods: {
    login() {
      this.$router.push('/todos');
    },
    register() {
      this.$router.push('/register');
    },
    cancel() {
      this.$router.push('/');
    },
    submit() {

    }
  },
}
</script>

<style>

</style>
