<template>
  <div class="feature-card">
    <img v-bind:src="loadImage()" alt="Icon" width="200px" />
    <h5>{{ title }}</h5>
    <p>
      <slot></slot>
    </p>
  </div>
</template>

<script>
export default {
  name: "FeatureCard",
  props: {
    title: String,
    imglink: String
  },
  methods: {
    loadImage: function() {
      return require("../assets/svg/" + this.imglink);
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
