const Clientes = [
  {
    nome: "Vinicius Santos",
    idade: 77,
    cpf: "12345678900",
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
  },
  {
    nome: "Margareth Silva",
    idade: 68,
    cpf: "12345678900",
    Dependente: [
      {
        nome: "Pedro",
        parentesco: "filho",
        dataNascimento: "32/13/2046",
      },
      {
        nome: "Weverton",
        parentesco: "filho",
        dataNascimento: "19/03/2026",
      },
    ],
  },
];

const listaDeDependentes =[...Clientes[0].Dependente,...Clientes[1].Dependente];
console.table(listaDeDependentes);