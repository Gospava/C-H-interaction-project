<script>
    var options = {
    chart: {
        height: 450,
        type: 'scatter',
        textSize: '20',
        fontFamily: 'Lora',
        zoom: {
            enabled: true,
            type: 'xy'
        }
    },
    series: [{
        name: "Duvan",
        data: [
        [16.4, 5.4], [21.7, 2], [25.4, 3], [19, 2], [10.9, 1], [13.6, 3.2], [10.9, 7.4], [10.9, 0], [10.9, 8.2], [16.4, 0], [16.4, 1.8], [13.6, 0.3], [13.6, 0], [29.9, 0], [27.1, 2.3], [16.4, 0], [13.6, 3.7], [10.9, 5.2], [16.4, 6.5], [10.9, 0], [24.5, 7.1], [10.9, 0], [8.1, 4.7], [19, 0], [21.7, 1.8], [27.1, 0], [24.5, 0], [27.1, 0], [29.9, 1.5], [27.1, 0.8], [22.1, 2]]
    },{
        name: "Elektronske cigarete",
        data: [
        [36.4, 13.4], [1.7, 11], [5.4, 8], [9, 17], [1.9, 4], [3.6, 12.2], [1.9, 14.4], [1.9, 9], [1.9, 13.2], [1.4, 7], [6.4, 8.8], [3.6, 4.3], [1.6, 10], [9.9, 2], [7.1, 15], [1.4, 0], [3.6, 13.7], [1.9, 15.2], [6.4, 16.5], [0.9, 10], [4.5, 17.1], [10.9, 10], [0.1, 14.7], [9, 10], [12.7, 11.8], [2.1, 10], [2.5, 10], [27.1, 10], [2.9, 11.5], [7.1, 10.8], [2.1, 12]]
    },{
        name: "Nargile",
        data: [
        [21.7, 3], [23.6, 3.5], [24.6, 3], [29.9, 3], [21.7, 20], [23, 2], [10.9, 3], [28, 4], [27.1, 0.3], [16.4, 4], [13.6, 0], [19, 5], [22.4, 3], [24.5, 3], [32.6, 3], [27.1, 4], [29.6, 6], [31.6, 8], [21.6, 5], [20.9, 4], [22.4, 0], [32.6, 10.3], [29.7, 20.8], [24.5, 0.8], [21.4, 0], [21.7, 6.9], [28.6, 7.7], [15.4, 0], [18.1, 0], [33.4, 0], [16.4, 0]]
    }],
    xaxis: {
        tickAmount: 10,
        labels: {
            formatter: function(val) {
                return parseFloat(val).toFixed(1)
            }
        }
    },
    yaxis: {
        tickAmount: 7
    }
}
var chart = new ApexCharts(
    document.querySelector("#graf1"),
    options
);
chart.render();</script>
<script>
    var options = {
    chart: {
      height: 450,
      textSize: '20',
      fontFamily: 'Lora',
      type: 'line',
      stacked: false
    },
    dataLabels: {
      enabled: false
    },
    series: [{
      name: 'Cena duvana',
      type: 'column',
      data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6, 4.8, 5, 5.2]
    }, {
      name: 'Akcize na duvanske proizvode',
      type: 'column',
      data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5, 8.7, 9.2, 10]
    }, {
      name: 'Stopa kupovine duvanskih proizvoda',
      type: 'line',
      data: [58, 50, 45, 44, 36, 27, 29, 20, 17, 15, 11]
    }],
    stroke: {
      width: [1, 1, 4]
    },
    title: {
      text: 'Rezultati istraživanja (2008 - 2019)',
      align: 'left',
      offsetX: 110
    },
    xaxis: {
      categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019],
    },
    yaxis: [
      {
        axisTicks: {
          show: true,
        },
        axisBorder: {
          show: true,
          color: '#008FFB'
        },
        labels: {
          style: {
            color: '#008FFB',
          }
        },
        title: {
          text: "Milijarde dinara",
          style: {
            color: '#008FFB',
          }
        },
        tooltip: {
          enabled: true
        }
      },

      {
        seriesName: 'Akcize',
        opposite: true,
        axisTicks: {
          show: true,
        },
        axisBorder: {
          show: true,
          color: '#00E396'
        },
        labels: {
          style: {
            color: '#00E396',
          }
        },
        title: {
          text: "Milijarde dinara",
          style: {
            color: '#00E396',
          }
        },
      },
      {
        seriesName: 'Revenue',
        opposite: true,
        axisTicks: {
          show: true,
        },
        axisBorder: {
          show: true,
          color: '#FEB019'
        },
        labels: {
          style: {
            color: '#FEB019',
          },
        },
        title: {
          text: "Tone duvana",
          style: {
            color: '#FEB019',
          }
        }
      },
    ],
    tooltip: {
      fixed: {
        enabled: true,
        position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
        offsetY: 30,
        offsetX: 60
      },
    },
    legend: {
      horizontalAlign: 'left',
      offsetX: 40
    }
  }

  var chart = new ApexCharts(
    document.querySelector("#graf2"),
    options
  );


  chart.render();
</script>