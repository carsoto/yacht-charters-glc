<script>
import { defineComponent } from 'vue'
import { Bubble } from 'vue3-chart-v2'

export default defineComponent({
  extends: Bubble,
  mounted () {
    // Overwriting base render method with actual data.
    this.renderChart({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label: 'GitHub Commits',
          backgroundColor: '#f87979',
          borderWidth: 1,
          borderColor: '#f87979',
          data: [{
                x: 6,
                y: 3,
                r: 15
              }, {
                x: 3,
                y: 12,
                r: 4
              },
              {
                x: 5,
                y: 15,
                r: 10
              },
              {
                x: 3,
                y: 12,
                r: 8
              },
              {
                x: 4,
                y: 5,
                r: 20
              },
              {
                x: 2,
                y: 6,
                r: 3
              },
              {
                x: 4,
                y: 9,
                r: 11
              },
              {
                x: 5,
                y: 10,
                r: 6
              }
            ]
        }
      ]
    },{
        title: {
          display: true,
          text: "CHART 6",
        },
      })
  }
});
</script>