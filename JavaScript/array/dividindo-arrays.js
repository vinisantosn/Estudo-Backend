const nomes = [
  "João",
  "Juliana",
  "Ana",
  "Caio",
  "Lara",
  "Marjorie",
  "Guilherme",
  "Aline",
  "Fabiana",
  "Andre",
  "Carlos",
  "Paulo",
  "Bia",
  "Vivian",
  "Isabela",
  "Vinícius",
  "Renan",
  "Renata",
  "Camilo",
];
console.log(`TAMANHO DO ARRAY: ${nomes.length}`);

const sala1 = nomes.slice(0, nomes.length / 2);
const sala2 = nomes.slice(nomes.length / 2);

console.log(`ALUNOS DA SALA 1: ${sala1}`);
console.log(`ALUNOS DA SALA 2: ${sala2}`);
