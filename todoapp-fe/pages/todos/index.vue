<template>
  <div>
    <b-row class="justify-content-center">
      <b-col sm="6">
        <h4 class="mb-4">Todo List</h4>
      </b-col>
    </b-row>

    <b-row class="justify-content-center">
      <b-col sm="6">
          <b-form-input v-model="inputFilter" placeholder="Filter tasks"></b-form-input>
      </b-col>
    </b-row>

    <b-row v-for="(task, key) in filterTasks" :key="key"
           class="justify-content-center mt-3">
      <b-col sm="6">
        <b-row>
          <b-col sm="11">
            <b-form-checkbox
              v-model="task.status"
              :id="'checkbox-' + key"
              :name="'checkbox-' + key"
              value="done"
              unchecked-value="ongoing">
            <strong>{{ task.title }}</strong>
          </b-form-checkbox>
          </b-col>
          <b-col cols="1">
            <b-button class="float-right" variant="danger" @click="removeTask(key)">Remove</b-button>
          </b-col>
        </b-row>

        <b-row>
          <p class="timestamp pl-4 ml-3">{{ task.creator }} | {{ $dateFns.format(task.createdAt, 'd MMM yyyy HH:mm') }}</p>
        </b-row>
      </b-col>
    </b-row>

    <hr>
    <b-row class="justify-content-center">
      <b-col sm="6">
        <b-form-group
          id="fieldset-1"
          label="Enter Task Title"
          label-for="input-1"
          valid-feedback="Ok"
          :invalid-feedback="invalidFeedback"
          :state="state">
        <b-form-input id="input-1" v-model="inputTitle" :state="state" trim></b-form-input>
        <b-button class="float-right mt-2" variant="primary" @click="addTask">Add</b-button>
      </b-form-group>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      inputTitle: '',
      inputFilter: '',
      tasks: [
        {
          title: 'Pemasangan Kubernetes',
          status: 'done',
          creator: 'tatang',
          createdAt: '2021-01-01 10:00:00',
        },
        {
          title: 'Pemasangan CI/CD pipeline',
          status: 'ongoing',
          creator: 'admin',
          createdAt: '2021-01-01 10:00:00',
        },
        {
          title: 'Setup Repository',
          status: false,
          creator: 'mikael',
          createdAt: '2021-01-01 10:00:00',
        },
      ]
    }
  },
  computed: {
    filterTasks() {
      if (this.inputFilter) {
        return this.tasks.filter(t => t.title.toUpperCase().includes(this.inputFilter.toUpperCase()));
      }
      return this.tasks;
    },
    state() {
      return this.inputTitle.length >= 4
    },
    invalidFeedback() {
      if (this.inputTitle.length > 0) {
        return 'Enter at least 4 characters.'
      }
      return 'Please enter something.'
    },
  },
  methods: {
    addTask() {
      this.tasks.push({
          title: this.inputTitle,
          status: 'ongoing',
          creator: 'admin',
          createdAt: new Date(),
      });
      this.inputTitle = '';
    },
    removeTask(index) {
      this.tasks.splice(index, 1);
    },
  },
}
</script>

<style scoped>
  .timestamp {
    font-size: .7rem;
  }
</style>
