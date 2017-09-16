$("input[name=cep]").one("mousedown focus", function (e) { //TODO: duplicated return when clicked

    $(this).keypress(function () {
        setTimeout(() => {
            if (this.value.length == 9) {
                let cep = (this.value).replace(/-/g, "");
                getAddress(cep)
            }
        }, 100)
    })

});


function getAddress(cep) {
    $.get("http://viacep.com.br/ws/" + cep + "/json/", function (cep) {
        console.log(cep);
        if (!cep.erro) {
            $("input[name=street]").val(cep.logradouro);
            $("input[name=neighborhood]").val(cep.bairro);
            $("input[name=city]").val(cep.localidade);
            $("input[name=state]").val(cep.uf);

            $("input[name=number]").focus(function () {
                if (!this.val() == "") {
                    this.val("");
                }
            });
        }
    });
}