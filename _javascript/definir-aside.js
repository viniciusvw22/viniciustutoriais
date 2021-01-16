var aside = document.getElementById("adquira-cursos");
var meuMain = document.getElementById("artigos-programacao");
var meus_artigos_diversos = document.getElementById("artigos-diversos");
aside.style.height = String(meuMain.offsetHeight + meus_artigos_diversos.offsetHeight).concat("px");
