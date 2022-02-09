<template>
  <div>
    <input type="text" v-model="message">
    <hr>
    {{ message }}
  </div>
</template>

<script>
  export default {
    data () {
      return {
        message: ''
      }
    }
  }
</script>
