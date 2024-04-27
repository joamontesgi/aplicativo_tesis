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

    function crearTreeMap(idDiv, datos, titulo) {
        var data = [{
            type: 'treemap',
            labels: datos.map(item => item.name),
            parents: datos.map(() => ""), // En caso de que todos sean raíz, deberían tener el parent vacío o el nombre del grupo principal si es una subcategoría.
            values: datos.map(item => item.value),
            textinfo: 'label+value',
            outsidetextfont: {size: 20, color: '#377eb8'},
            marker: {line: {width: 2, color: 'black'}}
        }];
    
        var layout = {
            title: titulo,
            autosize: true
        };
    
        Plotly.newPlot(idDiv, data, layout);
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

    //sumamos todos los datos de cada vector
    var suma_benigno_uno = benigno_uno.reduce((a, b) => a + b, 0);
    var suma_ddos_uno = ddos_uno.reduce((a, b) => a + b, 0);
    var suma_dosgoldeneye_uno = dosgoldeneye_uno.reduce((a, b) => a + b, 0);
    var suma_doshulk_uno = doshulk_uno.reduce((a, b) => a + b, 0);
    var suma_dosslowhttptest_uno = dosslowhttptest_uno.reduce((a, b) => a + b, 0);
    var suma_dossslowloris_uno = dossslowloris_uno.reduce((a, b) => a + b, 0);

    //asemos un vector para desarrollar el tree map
    var treeMap = [
        { name: 'Benigno Uno', value: suma_benigno_uno },
        { name: 'DDoS Uno', value: suma_ddos_uno },
        { name: 'DoSGoldenEye Uno', value: suma_dosgoldeneye_uno },
        { name: 'DoSHulk Uno', value: suma_doshulk_uno },
        { name: 'DoSSlowhttptest Uno', value: suma_dosslowhttptest_uno },
        { name: 'DoSSlowloris Uno', value: suma_dossslowloris_uno }
    ];

    crearTreeMap('general_tree', treeMap, 'Tree Map - Conteo General de Ataques');
    crearGraficaBarras('benigno_uno_barra', benigno_uno, 'Gráfica de Barras - Benigno Uno');
    crearGraficaLinea('ddos_uno_line', ddos_uno, 'Gráfica de Línea - DDoS Uno');
    crearGraficaPolar('dosgoldeneye_uno_polar', dosgoldeneye_uno, 'Gráfica Polar - DosGoldenEye Uno');
    crearGraficaBarras('dosgoldeneye_uno_barras', dosgoldeneye_uno, 'Gráfica de Barras - DosGoldenEye Uno');
    crearGraficaArea('doshulk_uno_area', doshulk_uno, 'Gráfica de Área - DoSHulk Uno');
    crearGraficaPolar('dosslowhttptest_uno_polar', dosslowhttptest_uno, 'Gráfica Polar - DoSSlowhttptest Uno');
    crearGraficaBarras('dossslowloris_uno_barras', dossslowloris_uno, 'Gráfica de Barras - DoSSslowloris Uno');
});
