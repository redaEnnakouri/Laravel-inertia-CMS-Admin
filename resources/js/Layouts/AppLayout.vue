<template>
  <div>
    <Head :title="title" />

    <jet-banner />
  </div>
</template>

<script>
import JetBanner from '@/Jetstream/Banner.vue'

export default {

  components: {
    JetBanner
  },
  props: {
    title: String
  },

  data () {
    return {
    }
  },

  methods: {
    switchToTeam (team) {
      this.$inertia.put(route('current-team.update'), {
        team_id: team.id
      }, {
        preserveState: false
      })
    },

    logout () {
      this.$inertia.post(route('logout'))
    }
  }
}
</script>
