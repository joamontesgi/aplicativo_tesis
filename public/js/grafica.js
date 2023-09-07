window.onload = function() {
    let benigno = document.querySelector("#benigno").innerText;
    let DDoS = document.querySelector("#DDoS").innerText;
    let DoSGoldenEye = document.querySelector("#DoSGoldenEye").innerText;
    let DoSHulk = document.querySelector("#DoSHulk").innerText;
    let DoSSlowhttptest = document.querySelector("#DoSSlowhttptest").innerText;
    let DoSSslowloris = document.querySelector("#DoSSslowloris").innerText;
    let benigno_dos = document.querySelector("#benigno_dos").innerText;
    let DDoS_dos = document.querySelector("#DDoS_dos").innerText;
    let DoSGoldenEye_dos = document.querySelector("#DoSGoldenEye_dos").innerText;
    let DoSHulk_dos = document.querySelector("#DoSHulk_dos").innerText;
    let DoSSlowhttptest_dos = document.querySelector("#DoSSlowhttptest_dos").innerText;
    let DoSSslowloris_dos = document.querySelector("#DoSSslowloris_dos").innerText;
    
    benigno = parseInt(benigno);
    DDoS = parseInt(DDoS);
    DoSGoldenEye = parseInt(DoSGoldenEye);
    DoSHulk = parseInt(DoSHulk);
    DoSSlowhttptest = parseInt(DoSSlowhttptest);
    DoSSslowloris = parseInt(DoSSslowloris);
    benigno_dos = parseInt(benigno_dos);
    DDoS_dos = parseInt(DDoS_dos);
    DoSGoldenEye_dos = parseInt(DoSGoldenEye_dos);
    DoSHulk_dos = parseInt(DoSHulk_dos);
    DoSSlowhttptest_dos = parseInt(DoSSlowhttptest_dos);
    DoSSslowloris_dos = parseInt(DoSSslowloris_dos);




    var ataques = [ benigno, DDoS, DoSGoldenEye, DoSHulk, DoSSlowhttptest, DoSSslowloris];
    var ataquesDos = [ benigno_dos, DDoS_dos, DoSGoldenEye_dos, DoSHulk_dos, DoSSlowhttptest_dos, DoSSslowloris_dos];
    var etiquetas = ['Benigno', 'DDoS', 'DoSGoldenEye', 'DoSHulk', 'DoSSlowhttptest', 'DoSSslowloris']
    var data = [
        {
            x: etiquetas,
            y: ataques,
            type: 'bar',
            text: ataques.map(String),
        }
    ];
    var layout = {
        height: 500,
        width: 500, 
        title: "Comportamiento de la trama Red Neuronal Profunda"
      };
      
    Plotly.newPlot('barra', data, layout);

    var data = [{
        values: ataques,
        labels: ['Benigno', 'DDoS', 'DoSGoldenEye', 'DoSHulk', 'DoSSlowhttptest', 'DoSSslowloris'],
        type: 'pie'
      }];
      
      var layout = {
        height: 500,
        width: 500,
        title: "Comportamiento de la trama Red Neuronal Profunda"

      };
      
      Plotly.newPlot('pie', data, layout);


      var dataDos = [
        {
            x: etiquetas,
            y: ataquesDos,
            type: 'bar',
            text: ataquesDos.map(String),
        }
    ];
    var layout = {
        height: 500,
        width: 500, 
        title: "Comportamiento de la trama Red Neuronal Convolucional"
      };
      
    Plotly.newPlot('myDiv', dataDos, layout);

    var dataTres = [{
        values: ataquesDos,
        labels: ['Benigno', 'DDoS', 'DoSGoldenEye', 'DoSHulk', 'DoSSlowhttptest', 'DoSSslowloris'],
        type: 'pie'
      }];
      
      var layout = {
        height: 500,
        width: 500,
        title: "Comportamiento de la trama Red Neuronal Convolucional"

      };
      
      Plotly.newPlot('myDiv2', dataTres, layout);
      
    }
