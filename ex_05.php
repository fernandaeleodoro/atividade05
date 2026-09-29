  <?php 

function ordenarNomes(lista) {
    let nomes = lista.split(",");
      nomes.sort();
      return nomes;
}
let lista = "Fernanda,Maria,João,Neiva";

console.log(ordenarNomes(lista));
