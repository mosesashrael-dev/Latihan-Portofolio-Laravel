document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("performanceChart");
    if (ctx) {
        const chartLabels = ["2021", "2022", "2023", "2024", "2025", "2026"];
        const dataProyekSelesai = [12, 19, 25, 32, 40, 48];
        const dataKepuasanKlien = [85, 88, 90, 92, 95, 98];

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: chartLabels,
                datasets: [
                    {
                        label: "Proyek Selesai",
                        data: dataProyekSelesai,
                        backgroundColor: "rgba(220, 53, 69, 0.85)",
                        borderColor: "rgba(220, 53, 69, 1)",
                        borderWidth: 1,
                        borderRadius: 6
                    },
                    {
                        label: "Skor Performa (%)",
                        data: dataKepuasanKlien,
                        type: "line",
                        borderColor: "#0f172a",
                        backgroundColor: "rgba(15, 23, 42, 0.1)",
                        borderWidth: 3,
                        tension: 0.3,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "top"
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 110
                    }
                }
            }
        });
    }
});