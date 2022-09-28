const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
};

console.log(Cliente);
Cliente.telefone = "98912345678";
console.log(Cliente);

// APAGAR ATRIBUTO DO OBJETO

delete Cliente.cpf;
console.log(Cliente);