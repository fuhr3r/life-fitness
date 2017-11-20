/**
 * Created by leluk on 13/09/2017.
 */
let inputList = [
    document.querySelector("input[name=cpf]"),
    document.querySelector("input[name=phone"),
    document.querySelector("input[name=cellphone]"),
    document.querySelector("input[name=birth_date]")
];

//CPF
VMasker(inputList[0]).maskPattern("999.999.999-99");

//CEP
VMasker(document.querySelector("input[name=cep]")).maskPattern("99999-999");

//Telephone
VMasker(inputList[1]).maskPattern("(99) 9999-9999");

//Cellphone
VMasker(inputList[2]).maskPattern("(99) 99999-9999");

//Date
VMasker(inputList[3]).maskPattern("99/99/9999");


//Unmask

$('form').submit(function (e) {

    // e.preventDefault();
    inputList.forEach(function () {
        VMasker(inputList).unMask()
    });
    // $(this).submit();
});