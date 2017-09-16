

$("input[name=cep]").on("click focus", function (e) {
    e.stopPropagation();
    $(this).keypress(function () {
        setTimeout(() => {
            console.log(this.value.length);
            if(this.value.length == 9){
                let cep = (this.value).replace(/-/g, "");
                // console.log(cep);
                getAddress(cep)
            }
        }, 100)
    })
});


function getAddress(cep) {
        $.get("http://viacep.com.br/ws/"+cep+"/json/", function (cep) {
           console.log(cep);
           if(!cep.erro){
               $("input[name=street]").val(cep.logradouro);
               $("input[name=neighborhood]").val(cep.bairro);
               $("input[name=city]").val(cep.localidade);
               $("input[name=state]").val(cep.uf);

               $("input[name=number]").focus();
           }
        });
}