<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
  <h1><?php echo 'Calculator:' ?></h1>
  <div id="calc">
    <div class="grid">
      <input @keyup.enter="calc()" type="text" v-model="result" placeholder="0">
      <button @click="input(num)" class="cell num" v-for="num in numbers">{{num}}</button>
      <button @click="input(op)" class="cell op" v-for="op in operations">{{op}}</button>
      <button @click="reset()" class="cell op">R</button>
      <button @click="calc()" class="cell op">=</button>
    </div>
  </div>
</body>
<script src="script.js"></script>
</html>
