var quebrada = false;
function mudaLampada(tipo) {

  if (!quebrada) {
    document.getElementById("lampada").src= "../_imagens/" + tipo + ".jpg";
    if (tipo === 'lampada-quebrada') {
      quebrada = true;
    }
  }
}     

function mudaFoto(novaFoto) {
  document.getElementById("icone").src= "/viniciustutoriais/_imagens/" + novaFoto;
}