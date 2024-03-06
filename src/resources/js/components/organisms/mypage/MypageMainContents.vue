<script setup lang="ts">
import { Chart, ChartData, registerables } from 'chart.js'
import { LineChart } from 'vue-chart-3'

Chart.register(...registerables)
const chart: ChartData<'line'> = {
  labels: ['2022/03/01', '2022/03/02', '2022/03/03'],
  datasets: [
    {
      label: '最高得点率',
      backgroundColor: 'rgba(0, 170, 248, 0.47)',
      borderColor: 'rgba(0, 170, 248, 1)',
      data: [100, 90, 50],
    },
  ],
}
</script>

<template>
  <article class="col-md-8 col-xs-12">
    <section>
      <h2 class="mypage-h2">
        <img class="mypage__logo" src="@/assets/images/mypage-icon.png" />
        マイページ
      </h2>
      <h3>直近 3 回の正解率推移</h3>
      <LineChart :chartData="chart"/>
    </section>
  </article>
</template>

<style lang="scss" scoped>
.mypage {
  &-h2 {
    border-bottom: solid;
  }

  &__logo {
    width: 10%;
  }
}
</style>
