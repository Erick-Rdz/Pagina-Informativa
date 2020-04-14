function loadListPlataformas() {
     div = document.getElementById('listadoPlataformas');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarPlataformas.php', true);
     xhr.send();

 }