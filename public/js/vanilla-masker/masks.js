/**
 * Created by leluk on 13/09/2017.
 */

//CPF
VMasker(document.querySelector("input[name=cpf]")).maskPattern("999.999.999-99");

//CEP
VMasker(document.querySelector("input[name=cep]")).maskPattern("99999-999");

//Telephone
VMasker(document.querySelector("input[name=phone")).maskPattern("(99) 9999-9999");

//Cellphone
VMasker(document.querySelector("input[name=cellphone]")).maskPattern("(99) 99999-9999");

//Date
VMasker(document.querySelector("input[name=birth_date]")).maskPattern("99/99/9999");
