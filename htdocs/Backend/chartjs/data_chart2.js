$.getJSON("data2.php", function (data) {
    console.log(data);
    var label = [];
    var total = [];

    for(var i in data) {
        label.push(data[i].label);
        total.push(data[i].total);
    }

    var chartdata = {
        labels: label,
        datasets: [{
                label: 'Attendance',
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(153, 102, 255, 0.2)'],
                borderColor: ['rgba(255,99,132,1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(153, 102, 255, 1)'],
                data: total
            }
        ]
    };

    var ctx = $("#mycanvas");

    var graph = new Chart(ctx, {
        type: 'doughnut',
        data: chartdata,
        options: {
            responsive: false,
        }
    });
});