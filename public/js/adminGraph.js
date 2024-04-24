document.addEventListener('DOMContentLoaded', function () {
    // Asegúrate de que 'window.datosGraficas' existe y tiene datos
    if (!window.datosGraficas) {
        console.error("No se encontraron datos.");
        return;
    }

    var datos = window.datosGraficas;
    var benigno_uno = datos.map(item => item.benigno_uno);
    var ddos_uno = datos.map(item => item.ddos_uno);
    var dosgoldeneye_uno = datos.map(item => item.dosgoldeneye_uno);
    var doshulk_uno = datos.map(item => item.doshulk_uno);
    var dosslowhttptest_uno = datos.map(item => item.dosslowhttptest_uno);
    var dossslowloris_uno = datos.map(item => item.dossslowloris_uno);

    function crearGraficaBarras(idDiv, datos, titulo) {
        var trace = {
            x: [...Array(datos.length).keys()],
            y: datos,
            type: 'bar'
        };
        var layout = {
            title: titulo
        };
        Plotly.newPlot(idDiv, [trace], layout);
    }

    function crearGraficaPastel(idDiv, datos, titulo) {
        var trace = {
            labels: [...Array(datos.length).keys()],
            values: datos,
            type: 'pie'
        };
        var layout = {
            title: titulo
        };
        Plotly.newPlot(idDiv, [trace], layout);
    }

    function crearGraficaLinea(idDiv, datos, titulo) {
        var trace = {
            x: [...Array(datos.length).keys()],
            y: datos,
            type: 'scatter', // Line chart
            mode: 'lines+markers'
        };
        var layout = {
            title: titulo
        };
        Plotly.newPlot(idDiv, [trace], layout);
    }

    function crearGraficaArea(idDiv, datos, titulo) {
        var trace = {
            x: [...Array(datos.length).keys()],
            y: datos,
            type: 'scatter', // Area chart
            fill: 'tozeroy'
        };
        var layout = {
            title: titulo
        };
        Plotly.newPlot(idDiv, [trace], layout);
    }

    function crearGraficaPolar(idDiv, datos, titulo) {
        var trace = {
            r: datos,
            theta: [...Array(datos.length).keys()].map(i => i * (360 / datos.length)),
            type: 'scatterpolar',
            fill: 'toself'
        };
        var layout = {
            polar: {
                radialaxis: {
                    visible: true,
                    range: [0, Math.max(...datos)]
                }
            },
            title: titulo
        };
        Plotly.newPlot(idDiv, [trace], layout);
    }

    // Ejecutar funciones para crear gráficas
    crearGraficaBarras('barra', benigno_uno, 'Gráfica de Barras - Benigno Uno');
    crearGraficaPastel('pie', benigno_uno, 'Gráfica de Pastel - Benigno Uno');
    crearGraficaLinea('myDiv', ddos_uno, 'Gráfica de Línea - DDoS Uno');
    crearGraficaArea('myDiv2', ddos_uno, 'Gráfica de Área - DDoS Uno');
    crearGraficaPolar('myDiv3', dosgoldeneye_uno, 'Gráfica Polar - DosGoldenEye Uno');
    crearGraficaBarras('myDiv4', dosgoldeneye_uno, 'Gráfica de Barras - DosGoldenEye Uno');
    crearGraficaLinea('myDiv5', doshulk_uno, 'Gráfica de Línea - DoSHulk Uno');
    crearGraficaArea('myDiv6', doshulk_uno, 'Gráfica de Área - DoSHulk Uno');
    crearGraficaPastel('myDiv7', dosslowhttptest_uno, 'Gráfica de Pastel - DoSSlowhttptest Uno');
    crearGraficaPolar('myDiv8', dosslowhttptest_uno, 'Gráfica Polar - DoSSlowhttptest Uno');
    crearGraficaBarras('myDiv9', dossslowloris_uno, 'Gráfica de Barras - DoSSslowloris Uno');
});
