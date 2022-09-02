<template>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header bg-primary text-white">Login</div>
        <div class="card-body">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" v-model="formData.username" class="form-control" />
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" v-model="formData.password" class="form-control" />
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-sm" @click="login">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: 'auth',
  data() {
    return {
      formData: {
        username: '',
        password: ''
      }
    }
  },
  methods: {
    login() {
      this.$axios.post('login', this.formData)
        .then(res => {
          // localStorage.setItem('user', res.data.user);
          // localStorage.setItem('accessToken', res.data.token);
          // this.$router.push('/dashboard');
        });
    }
  }
}
</script>