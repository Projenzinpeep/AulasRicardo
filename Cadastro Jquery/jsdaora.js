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

        if (!nome) {
            alert('Por favor, preencha o campo Nome.');
            return;
        }

        if (!cid) {
            alert('Por favor, selecione uma Cidade.');
            return;
        }

        if (!ani) {
            alert('Por favor, preencha o campo Data de Nascimento.');
            return;
        }

        if (!tel) {
            alert('Por favor, preencha o campo Telefone.');
            return;
        }

        if (!rg) {
            alert('Por favor, preencha o campo RG.');
            return;
        }

        if (!cpf) {
            alert('Por favor, preencha o campo CPF.');
            return;
        }

        if (!cep) {
            alert('Por favor, preencha o campo CEP.');
            return;
        }

        if (!nume) {
            alert('Por favor, preencha o campo N° Residencial.');
            return;
        }

        if (!log) {
            alert('Por favor, preencha o campo Logradouro.');
            return;
        }
        
        const mensagem =
        'Nome: ' + nome + '\nCidade: ' + cid + '\nData de Nasc: ' + ani + 
        '\nTelefone: ' + tel + '\nRG: ' + rg + '\nCPF: ' + cpf +
        '\nCEP: ' + cep + '\nN° Res: ' + nume + '\nLogradouro: ' + log;
    
        alert(mensagem);

    });
});