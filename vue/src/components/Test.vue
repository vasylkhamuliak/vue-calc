<template>
  <div id="test">
    This is test
    <app-input></app-input>
  </div>
</template>

<script>
import Field from './Field.vue'

export default {
  components: {
    'app-input': Field
  }
}
</script>
