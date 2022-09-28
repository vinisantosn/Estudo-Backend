// ADICIONAR ELEMENTO NA LISTA DE NOTAS

const notas = [10, 6, 8];
notas.push(7);
console.log(notas);

let soma = 0;
for(i = 0; i<notas.length;i++){
    soma += notas[i];
}
let media =  soma/notas.length;
console.log(media);
