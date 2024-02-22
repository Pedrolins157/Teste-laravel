$(document).ready(function () {
    $("#valor").maskMoney({
        prefix: "R$:",
        decimal: ",",
        thousands: "."
    });
});

$('#formProduto').submit(function (e) {
    e.preventDefault();
    var preco = $('#valor').maskMoney('unmasked')[0];
    var formData = $(this).serialize();
    formData += '&preco=' + preco;
    $.ajax({
        type: 'POST',
        url: urlCadastrarProduto,
        data: formData,
        success: function (response) {
            console.log(response);
            alert('Produto cadastrado com sucesso!');
            $('#formProduto')[0].reset();
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
            alert('Ocorreu um erro ao cadastrar o produto. Por favor, tente novamente.');
        }
    });
});

function htmlTr(produto) {
    return `<tr>
    <th>`+ produto.nome + `</th>
    <th>`+ produto.preco + `</th>
    </tr>`
}
function obterListaProdutos() {
    var nomeProduto = $('#nome').val();
    $.ajax({
        type: 'POST',
        url: urlPesquisarProduto,
        data: {
            nome: nomeProduto
        },
        success: function (response) {
            var tbody = '';
            $.each(response, function (key, produto) {
                tbody += htmlTr(produto)
            });


            $('#resultado').show();
            $('#tabelaProdutos tbody').html(tbody);
        }
    });
}
$(document).ready(function () {
    obterListaProdutos();
    $('#btnPesquisar').click(function () {
        obterListaProdutos();
    });
});