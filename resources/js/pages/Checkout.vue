<template>
  <div class="section">
    <div class="box">
      <div class="box-header">
        <ul class="steps is-balanced">
          <li class="steps-segment" :class="{ 'is-active': theSteps == 1 }">
            <span class="steps-marker"></span>
            <div class="steps-content">
              <p class="is-size-4">Step 1</p>
              <p>My Identity</p>
            </div>
          </li>
          <li class="steps-segment" :class="{ 'is-active': theSteps == 2 }">
            <span class="steps-marker"></span>
            <div class="steps-content">
              <p class="is-size-4">Step 2</p>
              <p>My Document</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="box-content">
        <form ref="form">
          <div v-show="1 == theSteps">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input
                  class="input"
                  type="text"
                  placeholder="Name"
                  v-model="post.name"
                />
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left has-icons-right">
                <input
                  class="input"
                  type="email"
                  placeholder="Email input"
                  value=""
                  v-model="post.email"
                />
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
            <!-- <div class="field">
              <label class="label">Phone 1</label>
              <div class="control">
                <input
                  class="input"
                  type="number"
                  placeholder="Phone"
                  v-model="post.phone[0]"
                />
              </div>
            </div> -->

            <div class="field" v-for="(phone, key) in phoneTotal" :key="key">
              <label class="label">Phone {{ key }}</label>
              <div class="control">
                <input
                  class="input"
                  type="number"
                  placeholder="Phone"
                  v-model="post.phones[key]"
                />
              </div>
            </div>

            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link m-3" @click.prevent="addPhone">
                  Add Phone
                </button>
              </div>
            </div>

            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link m-3" @click.prevent="goto2">
                  Next
                </button>
              </div>
            </div>
          </div>

          <div v-show="2 == theSteps">
            <div class="field">
              <div id="preview">
                <img v-if="urlPreview" :src="urlPreview" />
              </div>
              <label class="label">Foto KTP</label>
              <div class="control">
                <input
                  class="input"
                  type="FILE"
                  placeholder="file"
                  @change="onFileChange"
                />
              </div>
            </div>
            <div class="field is-grouped m-3">
              <div class="control">
                <button class="button is-link" @click.prevent="goto1">
                  Back
                </button>
                <button class="button is-link" @click.prevent="submit">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Checkout",
  data() {
    return {
      theSteps: 1,
      urlPreview: null,
      phoneTotal: 1,
      post: {
        name: "",
        email: "",
        phones: [],
        url: null,
      },
    };
  },
  methods: {
    addPhone() {
      this.phoneTotal += 1;
      this.post.phones.push();
    },
    goto2() {
      this.theSteps = 2;
    },
    goto1() {
      this.theSteps = 1;
    },
    onFileChange(e) {
      const file = e.target.files[0];
      this.urlPreview = URL.createObjectURL(file);
      this.url = file;
    },
    submit(e) {
      console.log(this.$ref);
      const params = new FormData();
      params.append("name", this.post.name);
      params.append("email", this.post.email);
      params.append("phones", this.post.phones);
      params.append("ktp", this.url, "As");
      axios
        .post("http://product.test/api/abc", params, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((e) => console.log(e));
    },
  },
};
</script>

<style scoped>
#preview {
  display: flex;
  justify-content: center;
  align-items: center;
}

#preview img {
  max-width: 100%;
  max-height: 500px;
}
</style>