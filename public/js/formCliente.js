$('#formCliente').submit(function (e) {
    e.preventDefault();
    var form = $(this)[0];
    var formData = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: urlCadastrarCliente,
        data: formData,
        success: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cadastro realizado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                form.reset();
            });
        },
        error: function (error) {
            if (error.responseJSON && error.responseJSON.errors) {
                var errors = error.responseJSON.errors;
                Object.keys(errors).forEach(function (key) {
                    var errorMessage = errors[key].join(' '); 
                    var inputElement = $('#' + key);
                    inputElement.siblings('.error-message').text(errorMessage);
                    inputElement.addClass('red-border');
                    inputElement.on('focus', function () {
                        $(this).removeClass('red-border');
                        inputElement.siblings('.error-message').text('');
                    });
                });
            }
        }
    });
    return false ;
});


function htmlTr(cliente) {
    return `<tr>
    <th>`+ cliente.nome + `</th>
    <th>`+ cliente.cpf + `</th>
    <th>`+ cliente.email + `</th>
    </tr>`
}
function obterListaClientes() {
    var nomeCliente = $('#nome').val();
    $.ajax({
        type: 'POST',
        url: urlPesquisarCliente,
        data: {
            nome: nomeCliente
        },
        success: function (response) {
            var tbody = '';
            $.each(response, function (key, produto) {
                tbody += htmlTr(produto)
            });


            $('#resultadoCliente').show();
            $('#tabelaClientes tbody').html(tbody);
        }
    });
}
$(document).ready(function () {
    obterListaClientes();
    $('#btnPesquisarCliente').click(function () {
        obterListaClientes();
    });
});

mascaraCpf($('.cpf'));
