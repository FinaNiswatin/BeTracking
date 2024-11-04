document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen tab
    const incomeTab = document.getElementById('incomes-tab');
    const expenseTab = document.getElementById('expenses-tab');

    // Tambahkan event listener pada masing-masing tab
    incomeTab.addEventListener('click', function () {
        incomeTab.classList.add('active');
        expenseTab.classList.remove('active');
    });

    expenseTab.addEventListener('click', function () {
        expenseTab.classList.add('active');
        incomeTab.classList.remove('active');
    });
});
