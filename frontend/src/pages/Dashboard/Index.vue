<template>
  <div class="desktop" data-model-id="5:2">
    <div v-for="frameIndex in 5" :key="frameIndex" class="frame">
      <div class="div-wrapper">
        <div class="text-wrapper">div1 wrap vai</div>
      </div>
      <div class="div">
        <div class="text-wrapper">div1 wrap vai</div>
      </div>
      <div class="div">
        <div class="text-wrapper">div1 wrap vai</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DashboardIndex",
  props: {}
};
</script>

<style scoped>
.desktop {
  align-items: flex-start;
  background-color: #ffffff;
  display: flex;
  flex-direction: column;
  gap: 32px;
  padding: 64px;
  position: relative;
}

.desktop .frame {
  align-items: flex-start;
  align-self: stretch;
  display: flex;
  flex: 0 0 auto;
  gap: 32px;
  padding: 64px;
  position: relative;
  width: 100%;
}

.desktop .div-wrapper {
  align-items: flex-start;
  background-color: #fda0a0;
  display: flex;
  flex: 1;
  flex-grow: 1;
  gap: 10px;
  padding: 85px 0px;
  position: relative;
}

.desktop .text-wrapper {
  align-self: stretch;
  color: #000000;
  flex: 1;
  font-family: "Inter", Helvetica, sans-serif;
  font-size: 128px;
  font-weight: 400;
  letter-spacing: 0;
  line-height: normal;
  margin-top: -1px;
  position: relative;
}

.desktop .div {
  align-items: flex-start;
  background-color: #00ced5;
  display: flex;
  flex: 1;
  flex-grow: 1;
  gap: 10px;
  padding: 85px 0px;
  position: relative;
}
</style>