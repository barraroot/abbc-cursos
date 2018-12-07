$(document).ready(function() {

    $('#dados-responsavel').css('display', 'none');

    $('#responsavel').click(function(){
        if($('#responsavel').is(':checked')) {
            $('#dados-responsavel').css('display', 'block');
        } else {
            $('#dados-responsavel').css('display', 'none');
        }
    });

    //Add class no menu
    $('#maluno').addClass("active");
    //Remove class no menu
    $('#mdash').removeClass("active");
    $('#mrelat').removeClass("active");
    $('#mgraf').removeClass("active");
    $('#unid').removeClass("active");
    $('#mplanoPag').removeClass("active");
    $('#mfuncionario').removeClass("active");

    demo.initMaterialWizard();
    demo.initFormExtendedDatetimepickers();

    //Valida CPF
    $('#cpf_cnpj').blur(function(){
        var cpf = $('#cpf_cnpj').val();
        if(cpf !== '') {
            if(cpf.length < 14) {
                swal("O CPF inserido é inválido. Por favor confira este campo.");
                $('#cpf_cnpj').val('');
                $('#cpf_cnpj').focus();
            } else {
                if(!validaCPF(cpf)) {
                    swal("O CPF inserido é inválido. Por favor confira este campo.");
                    $('#cpf_cnpj').val('');
                    $('#cpf_cnpj').focus();                                   
                }
            }      
        }
    })

    //Busca de CEP Condominio
    $('#end_cep').blur(function() {
        var cep = $('#end_cep').val().replace('-', '');
        $.get('https://viacep.com.br/ws/'+ cep +'/json/', function(data) {
            if(data.cep){ 
                $('#end_rua').val(data.logradouro);
                $('#end_compl').val(data.complemento);
                $('#end_bairro').val(data.bairro);
                $('#end_cidade').val(data.localidade);
                $('#end_estado').val(data.uf);
                $('#end_num').focus();
            } else {
                console.warn('erro, cep não localizado.');
            }
        });
    }); 


    //Valida CPF
    $('#resp_cpf_cnpj').blur(function(){
        var cpf = $('#resp_cpf_cnpj').val();
        if(cpf !== '') {
            if(cpf.length < 14) {
                swal("O CPF inserido é inválido. Por favor confira este campo.");
                $('#resp_cpf_cnpj').val('');
                $('#resp_cpf_cnpj').focus();
            } else {
                if(!validaCPF(cpf)) {
                    swal("O CPF inserido é inválido. Por favor confira este campo.");
                    $('#resp_cpf_cnpj').val('');
                    $('#resp_cpf_cnpj').focus();                                   
                }
            }      
        }
    })

    //Busca de CEP Condominio
    $('#resp_cep').blur(function() {
        var cep = $('#resp_cep').val().replace('-', '');
        $.get('https://viacep.com.br/ws/'+ cep +'/json/', function(data) {
            if(data.cep){ 
                $('#resp_rua').val(data.logradouro);
                $('#resp_compl').val(data.complemento);
                $('#resp_bairro').val(data.bairro);
                $('#resp_cidade').val(data.localidade);
                $('#resp_estado').val(data.uf);
                $('#resp_num').focus();
            } else {
                console.warn('erro, cep não localizado.');
            }
        });
    });     
});