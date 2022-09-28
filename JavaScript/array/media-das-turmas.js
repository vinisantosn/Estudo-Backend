const salaJs = [7, 8, 8, 7, 10, 6.5, 4, 10, 7];
const salaJava = [6, 5, 8, 9, 5, 6];
const salaPython = [7, 3.5, 8, 9.5];

function mediaDasNotas(arrayDeNotas) {
  let somaDasNotas = 0;
  arrayDeNotas.forEach((nota) => {
    somaDasNotas += nota;
  });
//   OUTRA MANEIRA DE FAZER O ACUMULADOR
//   const somaDasNotas = arrayDeNotas.reduce((acumulador,atual)=> atual + acumulador,0)
  let media = somaDasNotas / arrayDeNotas.length;
  return media;
}

console.log(`Média da sala de JS: ${mediaDasNotas(salaJs)}`);
console.log(`Média da sala de Java: ${mediaDasNotas(salaJava)}`);
console.log(`Média da sala de Python: ${mediaDasNotas(salaPython)}`);
