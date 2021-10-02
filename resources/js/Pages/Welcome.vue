<template>
  <div>
    <input
      v-model="title"
      type="text"
      placeholder="title"
    >
    <button class="disabled:opacity-50">
      Submit
    </button>
  </div>
</template>

<script>
export default {
  data () {
    return {
      title: null
    }
  }
}
</script>
