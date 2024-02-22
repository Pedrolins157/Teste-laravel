$(document).ready(function () {

    function carregarProdutos() {
        $.ajax({
            type: 'POST',
            url:urlCadastrarVenda,
            success: function (response) {

                $('#SelectProduto').empty();
                $.each(response, function (index, produto) {
                    $('#SelectProduto').append('<option data-preco="' + produto.preco +
                        '" value="' + produto.id + '">' + produto.nome + '</option>');
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    carregarProdutos();
    $('#valorQuant').prop('disabled',true);
    $('#valorTotalVenda').html('R$00,00')
    $('#SelectProduto').change(function () {
        var element = $(this);
         valor = element.find('option:selected').data('preco');
        valor = parseFloat(valor); 
        $('#precoUnid').val(valor.toFixed(2).toString().replace('.',',')).prop('disabled', true);
        $('#valorTotal').html(valor.toFixed(2).toString().replace('.',','));
        $('#valorQuant').val(1).prop('disabled',false);;
    });
    $('#valorTotal').html('00.00')
    $('#valorQuant').on('input', function () {
        var valorQuant = parseFloat($(this).val());
        console.log(valor)
        var result = valorQuant * valor;
        console.log(result);
        $('#valorTotal').html(result.toFixed(2));
    });

    totalCarrinho = 0;

    $('#adicionarProduto').click(function () {
        var qtd = $('#valorQuant').val();
        var produtoNome = $('#SelectProduto option:selected').text();
        var precoUnidade = $('#precoUnid').val();
        var valorTotal = $('#valorTotal').text();
        valorTotal = valorTotal.toString().replace(',','.');
        totalCarrinho =  parseFloat(totalCarrinho) + parseFloat(valorTotal);
        totalCarrinho = totalCarrinho.toFixed(2);

        $('#valorTotalVenda').html('R$ ' + totalCarrinho.toString().replace('.',','));
        

        if (qtd && produtoNome && precoUnidade && valorTotal) {
            var novaLinha = '<tr>' +
                '<td id="qtd_' + Date.now() + '">' + qtd + '</td>' +
                '<td id="produto_' + Date.now() + '">' + produtoNome + '</td>' +
                '<td id="preco_' + Date.now() + '">R$ ' + precoUnidade + '</td>' +
                '<td id="total_' + Date.now() + '">R$ ' + valorTotal + '</td>' +
                '</tr>';
            $('.tabelaResumoVenda tbody').append(novaLinha);
            $('#valorQuant').val(1).prop('disabled',true);
            $('#SelectProduto').val($('').val());
            $('#precoUnid').val('');
            $('#valorTotal').html('R$00.00');
        } else {
            alert('Por favor, preencha todos os campos antes de adicionar o produto.');
        }
    });
    
    function calcularSomaTotal() {
        var somaTotal = 0;
        $('.tabelaResumoVenda tbody tr').each(function () {
            var idTotal = $(this).find('td:eq(3)').attr('id');
            var valorTotal = parseFloat($('#' + idTotal).text().replace('R$ ', ''));
            somaTotal += valorTotal;
        });
        $('#valorTotalVenda').html("R$ " + somaTotal.toFixed(2));
    }
  
});
$('#somaTotal').click(function(){
    var soma = 0 ;
    
    function Constados(){
        soma++;
        if(soma ==10){
            alert(soma)
        }
    }
});
$(document).ready(function(){
    $('#formaPagamento').change(function(){
        var formaPagamento = $(this).val();
        if (formaPagamento === 'credito') {
            $('#parcelasGroup').show();
        } else {
            $('#parcelasGroup').hide();
        }
    });
});
