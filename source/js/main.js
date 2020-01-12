$('.link.excluir').on('click', function (e) {
    var confirmar = confirm('Tem certeza que quer excluir o usuário?');
    if (confirmar == false) {
        e.preventDefault();
    }
})
$('#cnpj').mask('00.0000.000/0000-00', { reverse: true });



$('#telefone').mask('(00) 0000-00009');
$('#agencia').mask('000-0');
$('#conta').mask('00.000-0');

$('form').validate({
    rules: {
        telefone: {
            required: {
                depends: function (element) {
                    return $('#catID').val() == 0
                }
            }
        }
    },
    messages: {
        razaoSoc: "Esse campo é obrigatório",
        cnpj: "CNPJ é obrigatório",
        telefone: "Telefone é obrigatório para Supermercados"
    }
});