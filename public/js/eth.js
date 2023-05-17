fetch(
  "https://api.coingecko.com/api/v3/coins/ethereum/market_chart?vs_currency=eur&days=30&interval=daily"
)
  .then((response) => response.json())
  .then((data) => {
    const prices = data.prices;

    // Extraire les dates et les prix pour le graphique
    const labels = prices.map((price) =>
      new Date(price[0]).toLocaleDateString()
    );
    const values = prices.map((price) => price[1]);

    // Créer le graphique avec Chart.js
    const ctx = document.getElementById("ethereumChart").getContext("2d");
    new Chart(ctx, {
      type: "line",
      data: {
        labels: labels,
        datasets: [
          {
            label: "Cours de l'Ethereum",
            data: values,
            borderColor: "blue",
            fill: false,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: {
            display: true,
            title: {
              display: true,
              text: "Date",
            },
          },
          y: {
            display: true,
            title: {
              display: true,
              text: "Prix (Eur)",
            },
          },
        },
      },
    });
  })
  .catch((error) => {
    console.error(
      "Erreur lors de la récupération des données du cours de l'Ethereum:",
      error
    );
  });
