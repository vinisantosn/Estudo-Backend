/**
 * As funções podem ser: sem parametros e sem retorno.
 *                       com parametros e sem retorno.
 *                       [...]                       
 * 
 * SEUS TIPOS SÃO 
 * 
 * DECLARATIVA
 *  
 *  function soma(a,b){
 *      return a+b;
 *  }
 * 
 * EXPRESSÕES DE FUNÇÕES (FUNÇÕES ANÔNIMAS)
 * 
 * 
 *  const soma = function (a,b){ return a+b;}
 * 
 * ARROW FUNCTION
 * 
 *  const soma = (a,b) => a+b;
 * 
 *  arrow function com mais de uma linha de instrução
 *  
 *  const somaDeNumerosPequenos = (a,b) => {
 *      if(a and b > 10){
 *          return "Reveja os numeros";
 *      } else {
 *          return a+b;
 *      }
 *  }
 */

 const somaDeNumerosPequenos = (a,b) => {
    if((a || b) > 10){
        return "Reveja os numeros";
    } else {
        return a+b;
    }
}

console.log(somaDeNumerosPequenos(42,3));