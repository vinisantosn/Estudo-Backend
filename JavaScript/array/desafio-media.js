/**
 * VALORES DAS NOTAS:
 *
 * 10, 6.5, 8, 7.5
 *
 */

// let nota1 = 10;
// let nota2 = 6.5;
// let nota3 = 8;
// let nota4 = 7.5;

// let media = (nota1+nota2+nota3+nota4)/4;

// console.log(media)

const notas = [10, 6.5, 8, 7.5];
let soma = 0;
for(i = 0; i<notas.length;i++){
    soma += notas[i];
}
let media =  soma/notas.length;
console.log(media);