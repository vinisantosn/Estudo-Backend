const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
  telefone: ["5598912345678", "5599912345678"],
};

Cliente.telefone.forEach(numero => {
    console.log(numero);
    
});
