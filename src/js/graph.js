/*!
* Graph classes
* Plot the given data into a graph canvas
*/
function canvas (data, parsedDate, graphLabel) { // eslint-disable-line no-unused-vars
  Highcharts.chart('graph-container', { // eslint-disable-line no-undef
    chart: {
      type: 'line'
    },
    title: {
      text: ''
    },
    xAxis: {
      categories: parsedDate
    },
    plotOptions: {
      line: {
        dataLabels: {
          enabled: false
        },
        enableMouseTracking: true
      },
      series: {
        events: {
          hide (a) {
            this.yAxis.axisTitle.hide()
          },
          show () {
            this.yAxis.axisTitle.show()
          }
        }
      }
    },
    yAxis: [{
      title: {
        text: 'Valores'
      }
    }],
    series: [{
      yAxis: 0,
      name: graphLabel,
      data
    }]
  })
}
