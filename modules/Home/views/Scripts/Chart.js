const ctx = document.getElementById('ventasChart').getContext('2d');
const ventasChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['1 may', '2 may', '3 may', '4 may', '5 may', '6 may', '7 may'],
    datasets: [
      {
        label: '2023',
        data: [0, 0, 0, 0, 0, 0, 0],
        borderColor: 'blue',
        fill: false
      },
      {
        label: '2024',
        data: [0, 0, 0, 12000, 0, 0, 0],
        borderColor: 'green',
        borderDash: [5, 5], // Línea punteada
        fill: false
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: value => '$' + value
        }
      }
    }
  }
});