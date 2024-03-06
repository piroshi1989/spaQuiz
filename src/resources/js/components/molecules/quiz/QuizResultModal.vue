<script setup lang="ts">
import { Chart, ChartData, registerables } from 'chart.js'
import { PieChart } from 'vue-chart-3'

Chart.register(...registerables)

type Props = {
  correctRatio: number
}

const props = defineProps<Props>()
const chartData: ChartData<'pie'> = {
  labels: ['正解', '不正解'],
  datasets: [
    {
      label: '正答率',
      data: [0, 100],
      backgroundColor: ['#00D8FF', '#E46651'],
      hoverOffset: 4,
    },
  ],
}
</script>

<template>
  <form>
    <div id="modal-result" tabindex="-1" class="modal fade" aria-hidden="true" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">正解率</h4>
          </div>
          <div class="modal-body text-center">
            <PieChart :chartData="chartData" />
            <div>正解率 0 %</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">終了する</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>
