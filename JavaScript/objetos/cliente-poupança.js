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

function ClientePoupanca(nome, cpf, email, saldo, saldoPoup) {
  Cliente.call(this, nome, cpf, email, saldo);
  this.saldoPoup = saldoPoup;
}

const mariaCliente = new ClientePoupanca(
  "Maria",
  "123.456.789-01",
  "contato.maria@dominio.com",
  100,
  200
);

ClientePoupanca.prototype.depositaPoupanca = function (valor) {
  if (valor > 0) {
    this.saldoPoup += valor;
  } else {
    return "Valor de saque invalido.";
  }
};

mariaCliente.depositaPoupanca(1000.75);
console.log(mariaCliente.saldoPoup);