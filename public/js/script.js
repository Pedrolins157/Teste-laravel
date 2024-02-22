$('.load-page').click(function () {
    var href = $(this).attr('href');
    $('.dashboard-body').load(href);
    return false;
});
mascaraCpf($('.cpf'));
function mascaraCpf(element) {
   
    element.on('input', function () {
        var value = $(this).val().replace(/\D/g, '');
        if (value.length > 11) {
            value = value.substring(0, 11);
        }
        var formattedValue = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        $(this).val(formattedValue);
    });
    element.on('blur', function () {
        var unmaskedValue = $(this).val().replace(/\D/g, '');
        if (unmaskedValue.length === 11) {
            if (validaCPF(unmaskedValue)) {
                $(this).removeClass('is-invalid');
                $('#cpfError').text('');
            } else {
                $(this).addClass('is-invalid');
                $('#cpfError').text('CPF inválido');
            }
        } else {
            $(this).removeClass('is-invalid');
            $('#cpfError').text('');
        }
    });

    function validaCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');
        if (cpf.length != 11 || /^(.)\1{10}$/.test(cpf)) return false;
        return true;
    }
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("user-registration-form");
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            fetch(form.action, {
                method: form.method,
                body: new FormData(form)
            })
            .then(response => {
                if (response.ok) {
                    form.reset();
                    alert("Registro bem-sucedido!");
                }
            })
            .catch(error => console.error('Erro ao enviar o formulário:', error));
        });
    });
}