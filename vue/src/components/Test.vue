<template>
  <div id="test">
    <h2>{{ testMessage }}</h2>
    <app-input
      :msg="testMessage"
      @changeMsg="testMessage = $event"
    ></app-input>
  </div>
</template>

<script>
import Field from './Field.vue'

export default {
  data() {
    return {
      testMessage: 'Test message'
    }
  },
  components: {
    'app-input': Field
  },

}
</script>
