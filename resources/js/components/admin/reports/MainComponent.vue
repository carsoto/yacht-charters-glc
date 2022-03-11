<template>
  <div class="card">
    <div class="card-header">
      <h1>{{ title }}</h1>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <line-chart/>
            </div>
          
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <radar-chart/>
            </div>
          
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <bar-chart/>
            </div>
          
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <pie-chart/>
            </div>
          
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <doughnut-chart/>
            </div>
          
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
            <div class="chart-container">
                <bubble-chart/>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import LineChart from "./charts/LineChart";
import RadarChart from "./charts/RadarChart";
import BarChart from "./charts/BarChart";
import PieChart from "./charts/PieChart";
import DoughnutChart from "./charts/DoughnutChart";
import BubbleChart from "./charts/BubbleChart";

export default {
  components: {
    "line-chart": LineChart,
    "radar-chart": RadarChart,
    "bar-chart": BarChart,
    "pie-chart": PieChart,
    "doughnut-chart": DoughnutChart,
    "bubble-chart": BubbleChart,
  },
  setup: () => ({
    title: "REPORTS",
  }),
};
</script>
