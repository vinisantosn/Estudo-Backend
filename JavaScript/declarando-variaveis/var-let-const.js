// TIPOS DE VARIAVEIS 

// VAR -> É um tipo de variável mutável (pouco utilizada atualmente)

var nome = 'Vinicius';
var nome = 'João';

console.log(nome);

// LET -> também trata-se de uma variável mutável (mais utilizada)

const formaGeometrica = 'triângulo';
let altura = 3.87;
let comprimento = 6.97;

let area; 

if(formaGeometrica === 'triângulo'){
    area = (altura*comprimento)/2;
}else{
    console.log("Cálculo de forma ainda não definida.");
}

console.log(area);

// CONST -> É uma variável constante e precisa ser atribuido valor assim que declarada. 
const CPF = '12345678900';
console.log("Meu CPF " + CPF);