var ctx = document.getElementById('expenseChart').getContext('2d');
var expenseChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Food and Beverages', 'Groceries', 'Subscription', 'Hanging Out'],
        datasets: [{
            data: [34, 16, 25, 15],
            backgroundColor: ['#004442', '#2EA8A2', '#3B3E48', '#777C90']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false 
            },
        }
    }
});

// Function to handle legend item click
document.querySelectorAll('.legend-item').forEach(function(item) {
    item.addEventListener('click', function() {
        var index = this.getAttribute('data-index');
        var dataset = expenseChart.getDatasetMeta(0);

        // Toggle visibility
        dataset.data[index].hidden = !dataset.data[index].hidden;

        // Change opacity of legend item based on visibility
        if (dataset.data[index].hidden) {
            this.style.opacity = '0.5'; // Reduce opacity
        } else {
            this.style.opacity = '1'; // Restore opacity
        }

        // Update chart
        expenseChart.update();
    });
});
