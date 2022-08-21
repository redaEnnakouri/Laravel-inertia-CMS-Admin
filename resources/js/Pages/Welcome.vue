<template>
  <app-layout title="Dashboard">
    <div style="margin-left: 50px;">
      <input
        v-model="title"
        type="text"
        placeholder="title"
      >
      <button class="disabled:opacity-50">
        Submit
      </button>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
  components: {
    AppLayout
  },
  data () {
    return {
      form: this.$inertia.form({
        title: null
      })
    }
  },
  methods: {
    createPage () {
      this.form.post(this.route('create.page'))
    }
  }
}
</script>
