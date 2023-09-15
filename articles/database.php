<article class="docs-article" id="section-4">
    <header class="docs-header">
        <h1 class="docs-heading"><span class="text-success">#</span> Database</h1>
        <section class="docs-intro">
            <h2><span class="text-success">#</span> Introdução</h2>
            <p>Interação com banco de dados é uma pratica muito comum no desenvolvimento web moderno. </p>
        </section><!--//docs-intro-->
    </header>
     <section class="docs-section" id="item-4-1">
        <h2 class="section-heading"><span class="text-success">#</span> Configuração</h2>
        <h5 class="section-headind">.Env</h5>
        <p>Adicione as variaveis de ambiente no seu arquivo .Env na raiz do projeto, as configurações de conexão do seu banco de dados. </p>
<pre rel="HTML" class="language-php"><code>/** Database /*
DB_DRIVER=mysql
DB_HOST=localhost
DB_PORT=3306
DB_NAME=framework
DB_USER=root
DB_PASSWORD=1234</code></pre>

    </section><!--//section-->

    <section class="docs-section" id="item-4-2">
       <h2 class="section-heading"><span class="text-success">#</span> METODO</h2>
       <p>Cross-site Request Forgery <strong>(CSRF)</strong> é um tipo de ataque de websites maliciosos. Um ataque CSRF às vezes é chamado de ataque de um clique ou transporte de sessão. Esse tipo de ataque envia solicitações de um usuário não autorizado, permitindo acessar recursos da aplicação.</p>
       <p>O Scadaunity gera a cada requisição um token <strong>CSRF</strong> de sessão prevenindo este tipo de ataque no envio de formularios de usuarios não autorizados.</p>
       <p>Ao enviar seu formulario com metodo post, voce deve informar o token <strong>CSRF</strong> junto a sua requisição, o router checará se existe um token e se ele ainda é valido, caso não existir o token uma resposta de pagina expirada será exibida.</p>
       <p>Utilize o helper para informar o token, que informa um usuario autenticado a manipular recursos da aplicação.</p>
       <small>*Usando - <strong>PHP</strong></small>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="&lt;?php route('/user')?&gt;"&gt;
   &lt;?php csrf()?&gt;
   &lt;?php method('put')?&gt;
&lt;/form&gt;</code></pre>
<small>*Usando - <strong>Vesut</strong> - Template engine (AInda em desenvolvimento - estará disponivel na <strong>versão 2.0.0</strong>)</small>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="@route('/user')"&gt;
   @csrf
   @method('put')
&lt;/form&gt;</code></pre>
<small><strong>Resultado:</strong></small>
<div class="container border pt-3">
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_csrf" value="77575ae7ac9df5cd5fab0ae14e7b40f67cafc3a4402a53c6810c9ca28c58d295"&gt;</pre>
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_method" value="put"&gt;</pre>
</div>
   </section><!--//section-->

    <section class="docs-section" id="item-3-3">
        <h2 class="section-heading">Section Item 3.3</h2>
        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
    </section><!--//section-->
</article><!--//docs-article-->
