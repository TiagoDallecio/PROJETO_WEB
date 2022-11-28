function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    document.getElementById('ibge').value=(conteudo.ibge);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
        document.getElementById('ibge').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};


 $(function(){
    //função para adicionar um formulário de escolha de imagens
    //link: https://pt.stackoverflow.com/questions/13188/como-criar-um-select-com-imagens-nas-op%C3%A7%C3%B5es
    var sels = $(".fake-sel");
    
    var imgs_ = [
       [
          'https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg',
          'https://oc2.ocstatic.com/images/logo_small.png',
          'https://upload.wikimedia.org/wikipedia/commons/3/3a/Cat03.jpg'
       ]
    ];
 
    sels.each(function(x){
       
       var $t = $(this);
       
       var opts_ = '', first;
       
       $t.find("option").each(function(i){
          
          if(i == 0){
             first = "<li><img src='"+ imgs_[x][i] +"'>"+ $(this).text() +"</li>";
          }
          opts_ += "<li"+ (i == 0 ? " class='ativo'" : '') +"><img src='"+ imgs_[x][i] +"'>"+ $(this).text() +"</li>";
       });
 
       $t
       .wrap("<div class='fake-sel-wrap'></div>")
       .parent()
       .css("width", $t.outerWidth()+60)
       .append("<ul>"+ first+opts_ +"</ul>")
       .find("ul")
       .on("click", function(e){
          e.stopPropagation();
          $(".fake-sel-wrap ul")
          .not(this)
          .removeClass("ativo");
          $(this).toggleClass("ativo");
       })
       .find("li:not(:first)")
       .on("click", function(){
          $(this)
          .addClass("ativo")
          .siblings()
          .removeClass("ativo")
          .parent()
          .find("li:first")
          .html($(this).html());
          
          $t.val($(this).text());
          
       });
    });
    
    $(document).on("click", function(){
       $(".fake-sel-wrap ul").removeClass("ativo");
    });
    
 });

 //função que habilita ou desabilita um determinado input
 function verifica(value){
         var input = document.getElementById("tipo");
         var input2 = document.getElementById("Movie");

         if(value == "Professor"){
            input.disabled = false;
            input2.disabled = true;
         }else if (value == "Aluno"){
            input.disabled = true;
            input2.disabled = false;
         }
 };