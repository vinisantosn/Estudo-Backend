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
    {
      nome: "Maria",
      parentesco: "filha",
      dataNascimento: "19/04/2025",
    },
  ],
  saldo: 100.0,

  depositar: function (valor) {
    if (valor > 0) {
      this.saldo += valor;
    } else {
      return "Valor de saque invalido.";
    }
  },
};

let relatorio = "";
//REFATORAR

for (let info in Cliente) {
  relatorio += `${info}`;
}


console.log(relatorio);