function loadListPlataformas() {
     div = document.getElementById('listarPlataformas');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'listarPlataformas.php', true);
     xhr.send();

 }

 function loadListAccesorios() {
     div = document.getElementById('listarAccesorios');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'listarAccesorios.php', true);
     xhr.send();

 }