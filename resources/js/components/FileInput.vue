<template>
  <div>
    <div class="input-group mb-3">
      <input
        type="text"
        v-model="files"
        readonly
        class="form-control"
        placeholder="Choose Your images"
      />
      <span class="input-group-btn">
        <button class="btn btn-outline-secondary" type="button" @click="showFilePicker">
          <i class="fa fa-image"></i>
        </button>
      </span>
    </div>
    <input type="file" ref="file" class="d-none" @change="changeImage" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      files: ""
    };
  },
  methods: {
    showFilePicker() {
      this.$refs.file.click();
    },
    changeImage(e) {
      this.files = e.target.files[0];
      this.$emit("fileChange", this.files);
    }
  }
};
</script>
