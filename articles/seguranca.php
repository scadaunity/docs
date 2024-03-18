<article class="docs-article" id="seguranca">
    <header class="docs-header">
        <h1 class="docs-heading"><span class="text-success">#</span> Segurança</h1>
        <section class="docs-intro">
            <h5><span class="text-success">#</span> Introdução</h5>
            <p>Quando desenvolvemos nossa aplicação web, devemos atentar para falhas de segurança e ataques maliciosos de usuarios mau intencionados, pensando nisso Scadaunity fornece diferentes ferramentas para prevenir ataques.</p>
        </section><!--//docs-intro-->
    </header>
     <section class="docs-section" id="seguranca-csrf">
        <h2 class="section-heading"><span class="text-success">#</span> CSRF</h2>
        <p>Cross-site Request Forgery <strong>(CSRF)</strong> é um tipo de ataque de websites maliciosos. Um ataque CSRF às vezes é chamado de ataque de um clique ou transporte de sessão. Esse tipo de ataque envia solicitações de um usuário não autorizado, permitindo acessar recursos da aplicação.</p>
        <p>O Scadaunity gera a cada requisição um token <strong>CSRF</strong> de sessão prevenindo este tipo de ataque no envio de formularios de usuarios não autorizados.</p>
        <p>Ao enviar seu formulario com os metodos <strong>POST, PUT, PATCH, DELETE</strong voce deve informar o token <strong>CSRF</strong> junto a sua requisição, o router checará se existe um token e se ele ainda é valido, caso não existir o token uma resposta de pagina expirada será exibida.</p>
        <p>Utilize o helper para informar o token, que informa um usuario autenticado a manipular recursos da aplicação.</p>
        <small>Exemplo:</small>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="&lt;?php route('/user')?&gt;"&gt;
    &lt;?php csrf()?&gt;
&lt;/form&gt;</code></pre>
<small><strong>Resultado:</strong></small>
<div class="container border pt-3">
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_csrf" value="77575ae7ac9df5cd5fab0ae14e7b40f67cafc3a4402a53c6810c9ca28c58d295"&gt;</pre>
</div>
    </section><!--//section-->

    <section class="docs-section" id="seguranca-metodo">
       <h2 class="section-heading"><span class="text-success">#</span> METODO</h2>
       <p>A interface de programação de aplicativos (API) fornece uma maneira de aplicativos externos consultarem e atualizarem dados na sua aplicação.
       <p>Esta integração geralmente é feita utilizando os verbos http </strong>POST, PUT, PATCH, DELETE</strong> e outros mais...</p>
       <p>Os navegadores aceitam porem os verbos <strong>GET e POST</strong>, desta maneira quando enviar o formulario será necessario enviar o tipo de verbo na requisição.</p>
       <p>Isto poderá ser feito de duas maneiras.</p>
       <small>Utilizando o helper:</small>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="&lt;?php route('/user')?&gt;"&gt;
   &lt;?php csrf()?&gt;
   &lt;?php method('put')?&gt;
&lt;/form&gt;</code></pre>
        <small>Inserindo um campo</small>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="@route('/user')"&gt;
   @csrf
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_method" value="put"&gt;</pre>
&lt;/form&gt;</code></pre>
<small><strong>Resultado:</strong></small>
<div class="container border pt-3">
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_csrf" value="77575ae7ac9df5cd5fab0ae14e7b40f67cafc3a4402a53c6810c9ca28c58d295"&gt;</pre>
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_method" value="put"&gt;</pre>
</div>
   </section><!--//section-->

    
</article><!--//docs-article-->
