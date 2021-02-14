<script>
    var options = {
    chart: {
        height: 450,
        type: 'line',
        textSize: '25',
        fontFamily: 'Lora',
        shadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 1
        },
        toolbar: {
            show: false
        }
    },
    colors: ['#77B6EA', '#545454'],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: 'smooth'
    },
    
    series: [{
            name: "Privatna preduzeća",
            data: [28, 29, 33, 36, 32, 32, 33, 36]
        },
        {
            name: "Javna preduzeća",
            data: [12, 11, 14, 18, 17, 13, 13, 19]
        }
    ],
    title: {
        text: 'Rezultati',
        align: 'left',
    },
    grid: {
        borderColor: '#e7e7e7',
        row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
        },
    },
    markers: {
        size: 6
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg'],
        title: {
            text: 'Meseci'
        }
    },
    yaxis: {
        title: {
            text: 'Ukupno klijenata',
            fontSize:  '16px'
        },
        min: 5,
        max: 40
    },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: true,
            offsetY: -25,
            offsetX: -5
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#chart"),
        options
    );
    chart.render();      
</script>