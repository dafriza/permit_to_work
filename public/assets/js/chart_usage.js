function doughnutChart(target, data) {
    const color = {
        "ON GOING": "#7C66FF",
        "SUCCESS": "#E2D345",
        "REJECTED": "#FF6464",
        "DRAFT": "#e5e5e5"
    };
    let bgColor = [];
    Object.keys(data).forEach(function (element, index) {
        bgColor[index] = color[element];
    });
    let labels = Object.keys(data);
    data = Object.values(data);
    // console.log(bgColor);
    // console.log("ini data " + color["ON GOING"]);
    // let target = document.getElementById("oilChart");
    let target_canvas = $("#" + target);

    Chart.defaults.global.defaultFontFamily = "Public Sans";
    Chart.defaults.global.defaultFontSize = 13;

    let datasets = {
        // labels: ["Approved", "On Going", "Rejected"],
        labels: labels,
        datasets: [{
            data: data,
            // backgroundColor: ["#7C66FF", "#E2D345", "#FF6464", "#e5e5e5"],
            backgroundColor: bgColor,
            borderColor: "white",
            borderWidth: 0,
        },],
    };

    let optionChart = {
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
            labels: {
                usePointStyle: true,
                padding: 35,
                pointStyle: 'circle',
                boxWidth: 1,
            }
        }
    };

    return new Chart(target_canvas, {
        type: "doughnut",
        data: datasets,
        options: optionChart
    });

}
