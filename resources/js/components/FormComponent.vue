<template>
  <div>
    <form method="post" enctype="multipart/form-data" @submit.prevent="upload">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" v-model="title" />
      </div>
      <file-input @fileChange="changeFile"></file-input>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>
    <bar :progress="progress" v-if="isUploading"></bar>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      files: "",
      progress: 0,
      isUploading: false
    };
  },
  methods: {
    upload() {
      let formData = new FormData();
      formData.append("title", this.title);
      formData.append("imagefile", this.files);
      this.isUploading = true;
      axios
        .post("/api/image", formData, {
          onUploadProgress: e => {
            if (e.lengthComputable) {
              console.log(e);
              this.progress = (e.loaded / e.total) * 100;
            }
          }
        })
        .then(res => {
          setTimeout(() => {
            this.isUploading = false;
          }, 1000);

          console.log("Success");
        });
    },
    changeFile(file) {
      if (file != undefined) {
        this.files = file;
      }
    }
  }
};
</script>
