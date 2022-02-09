<template>
  <div>
    <input type="text" :value="msg" @input="changeMess">
    <hr>
    {{ message }}
  </div>
</template>

<script>
  export default {
    props: [
      'msg'
    ],
    data () {
      return {
        message: ''
      }
    },
    methods: {
      changeMess(event) {
        this.message = event.target.value;
        this.$emit('changeMsg', this.message);
      }
    }
  }
</script>
