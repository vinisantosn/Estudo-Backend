const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
  telefone: ["5598912345678", "5599912345678"],
  Dependente: [
    {
      nome: "João",
      parentesco: "filho",
      dataNascimento: "32/13/2046",
    },
  ],
};
console.log(Cliente);
Cliente.Dependente.push({
  nome: "Maria",
  parentesco: "filha",
  dataNascimento: "19/04/2025",
});
console.log(Cliente);
