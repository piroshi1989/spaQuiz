<script setup lang="ts">
import { Chart, ChartData, registerables } from "chart.js"
import { BarChart } from "vue-chart-3"

Chart.register(...registerables)
const chart: ChartData<"bar"> = {
  labels: ["a", "b", "c", "d", "e"],
  datasets: [
    {
      label: "最高得点率",
      backgroundColor: "rgba(0, 170, 248, 0.47)",
      data: [100, 90, 80, 70, 60],
    },
  ],
}
</script>

<template>
  <section class="home-quiz__ranking">
    <h2 class="home-quiz__ranking-h2">
      <img class="home-quiz__ranking-h2-logo" src="@/assets/images/graph-icon.png" />
      ランキング
    </h2>
    <div>
      <label>
        <input class="ranking-radio" type="radio" name="ranking-radio" value="1" checked />
        総合
      </label>
      <label>
        <input class="ranking-radio" type="radio" name="ranking-radio" value="2" />
        今月
      </label>
      <label>
        <input class="ranking-radio" type="radio" name="ranking-radio" value="3" />
        今週
      </label>
    </div>
    <div class="home_quiz__ranking-chart">
      <BarChart :chartData="chart" />
    </div>
  </section>
</template>


<style lang="scss" scoped>
.home {
  &-quiz {
    &__ranking {
      padding: 5px 10px;

      &-h2 {
        border-bottom: solid;

        &-logo {
          width: 10%;
        }
      }
    }
  }
}
</style>

