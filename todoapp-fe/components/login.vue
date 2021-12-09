<template>
  <b-container class="p-4 mt-4">

    <b-row class="justify-content-center">
      <b-col sm="6">
        <h4 class="mb-4">Todo Login</h4>
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
        <b-button class="float-right" variant="primary">Login</b-button>
        <b-button class="float-right mr-2" variant="info">Register</b-button>
      </b-col>
    </b-row>

  </b-container>
</template>

<script>
export default {
  name: 'Login'
}
</script>

<style>

</style>
