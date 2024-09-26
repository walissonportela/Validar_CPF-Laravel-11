import './bootstrap';

// Importar o Inputmask
import Inputmask from 'inputmask';

// Acrescentar máscara no campo inputmask
// DOMContentLoaded - disparar o evento quando o HTML for totalmente carregado
document.addEventListener('DOMContentLoaded', function(){

    // Máscara para o campo CPF
    var cpfMask = new Inputmask('999.999.999-99');
    cpfMask.mask(document.querySelectorAll('#cpf'));
});