function calculePreco() {
  var qtd = parseInt(document.getElementById("cQtd").value);
  var preco = qtd * 1500;
  document.getElementById("cTot").value = preco;
}