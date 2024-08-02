$(document).ready(function() {
    $('#btCont').click(function() {
        const tel = $('#inTel').val();
        const rg = $('#inRG').val();
        const cpf = $('#inCPF').val();
        const nome = $('#inNome').val();
        const cid = $('#slcCidade').val();
        const ani = $('#inData').val();
        const log = $('#inLog').val();
        const nume = $('#inNum').val();
        const cep = $('#inCEP').val();

        const mensagem =
        'Nome: ' + nome + '\nCidade: ' + cid + '\nData de Nasc: ' + ani + 
        '\nTelefone: ' + tel + '\nRG: ' + rg + '\nCPF: ' + cpf +
        '\nCEP: ' + cep + '\nN° Res: ' + nume + '\nLogradouro: ' + log;
    
        alert(mensagem);

    });
});