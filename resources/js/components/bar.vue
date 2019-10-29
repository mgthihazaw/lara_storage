<template>
  <div class="progress">
    <div
      class="progress-bar progress-bar-striped progress-bar-animated"
      role="progressbar"
      :style="{width: getProgress}"
    >{{ getProgress != "100%" ? getProgress : "Upload Complete" }}</div>
  </div>
</template>

<script>
export default {
  props: {
    progress: {
      type: Number,
      default: 0
    }
  },
  computed: {
    getProgress() {
      return Math.round(this.progress) + "%";
    }
  }
};
</script>
