$("input[name=cep]").change(function () { //TODO: focused and keydown
    console.log(this.length);
});

function getEndereco() {

    if($('input[name=cep]').val() != ""){

        $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#campoCep").val(),
            function(){
                if(resultadoCEP.resultado){
                    // troca o valor dos elementos
                    $("#campoLogradouro").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                    //$("#campoBairro").val(unescape(resultadoCEP["bairro"]));
                    $("#campoCidade").val(unescape(resultadoCEP["cidade"]));
                    $("#campoEstado").val(unescape(resultadoCEP["uf"]));
                    //$("#enderecoCompleto").show("slow");
                    $("#campoNumero").focus();
                }else{
                    alert("Endereço não encontrado");
                    return false;
                }
            });
    }
    else{
        alert('Antes, preencha o campo CEP!')
    }

}