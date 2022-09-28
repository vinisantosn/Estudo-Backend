const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
  telefone: ["5598912345678", "5599912345678"],
};

Cliente.Dependente = {
    nome: "João",
    parentesco: "filho",
    dataNascimento: "32/13/2046"
}

console.log(Cliente);

Cliente.Dependente.nome = "João Barros"

console.log(Cliente);