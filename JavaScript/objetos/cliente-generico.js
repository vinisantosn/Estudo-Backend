function Cliente(nome, cpf, email, saldo) {
  this.nome = nome;
  this.cpf = cpf;
  this.email = email;
  this.saldo = saldo;
  this.depositar = function (valor) {
    if (valor > 0) {
      this.saldo += valor;
    } else {
      return "Valor de saque invalido.";
    }
  };
}

const novoCliente = new Cliente("Vinícius Santos", "123.456.789-00", "contato.vini@dev.br", 123.56);

console.log(novoCliente);