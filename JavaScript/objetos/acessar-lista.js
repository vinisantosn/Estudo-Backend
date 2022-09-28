const Cliente = {
  nome: "Vinicius Santos",
  idade: 22,
  cpf: "12345678900",
  email: "contato.vinicius@vini.dev",
};

const chaves = ["nome", "idade", "cpf", "email"];

// for (let index = 0; index < chaves.length; index++) {
//     console.log(Cliente[chaves[index]]);
    
// }
chaves.forEach(element => {
    console.log(Cliente[element]);
});
