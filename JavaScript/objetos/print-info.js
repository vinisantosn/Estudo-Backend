const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
};

console.log(
  `Meu nome é ${Cliente.nome}, tenho ${Cliente.idade} anos e você pode entrar em contato comigo atraves do email ${Cliente.email}.`
);
console.log(`CPF: ${Cliente.cpf.substring(0, 3)}`);
