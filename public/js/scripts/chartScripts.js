var ctx = document.getElementsByClassName("line-chart");
var chartGraph = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Domingo","Segunda", "Terça", "Quarta","Quinta", "Sexta", "Sábado"],
        datasets: [
        {
            label: "Media",
            data: [10, 10, 10, 10, 10, 10, 10],
            borderWidth: 6,
            borderColor: 'rgba(21, 174, 188,0.85)',
            backgroudColor: 'transparent',
            
        },
        {
            label: "Uso dos Laboratórios",
            data: [0, 20, 10, 8, 18, 12, 5],
            borderWidth: 6,
            borderColor: 'rgba(15, 127, 138,0.85)',
            backgroudColor: 'transparent',
        }
    ]
        
    }
});