<template>
  <div class="section">
    <article class="panel is-primary">
      <p class="panel-heading">MyCart</p>
      <a class="panel-block column is-active">
        <div class="columns">
          <div class="column is-6">
            bulma &nbsp;
            <span class="tag is-normal is-link">4</span>
          </div>
          <div class="column is-6">
            <div class="button is-pulled-right is-small m-2 is-info">+</div>
            <div class="button is-pulled-right is-small m-2 is-danger">-</div>
          </div>
        </div>
      </a>
      <div class="columns is-centered">
        <div class="m-5">
          <button class="is-small button is-link">Checkout</button>
        </div>
      </div>
    </article>
  </div>
</template>

<script>
export default {
  name: "MyCart",
};
</script>