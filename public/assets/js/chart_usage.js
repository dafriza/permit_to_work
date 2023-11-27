function doughnutChart(target, labels, data) {
  // let oilCanvas = document.getElementById("oilChart");
  let oilCanvas = $("#" + target);

  Chart.defaults.global.defaultFontFamily = "Public Sans";
  Chart.defaults.global.defaultFontSize = 13;

  let datasets = {
    // labels: ["Approved", "On Going", "Rejected"],
    labels: labels,
    datasets: [{
      data: data,
      backgroundColor: ["#7C66FF", "#E2D345", "#FF6464"],
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

  return new Chart(oilCanvas, {
    type: "doughnut",
    data: datasets,
    options: optionChart
  });

}
