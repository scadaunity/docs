<article class="docs-article" id="database">
    <header class="docs-header">
        <h1 class="docs-heading"><span class="text-success">#</span> Database <span class="docs-time">Ultima atualização: <strong>18 de março 2024</strong></span></h1>
        <section class="docs-intro">
            <h2><span class="text-success">#</span> Introdução</h2>
            <p>Interação com banco de dados é uma pratica muito comum no desenvolvimento web moderno. </p>
        </section><!--//docs-intro-->
    </header>
     <section class="docs-section" id="database-config">
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

    <section class="docs-section" id="database-migrations">
       <h2 class="section-heading"><span class="text-success">#</span> Migrations</h2>
       <p>Tarefas para criar e manipular tabelas de bancos ficam bem simples.</p>
       <p>Para trabalhar com as migrações utilize o <strong>cli</strong></p>
       <h4><span class="text-success">#</span> Criar</h4>
<pre rel="HTML" class="language-php"><code>&lt;form method="post" action="&lt;?php route('/user')?&gt;"&gt;
   &lt;?php csrf()?&gt;
   &lt;?php method('put')?&gt;
&lt;/form&gt;</code></pre>
<small><strong>Resultado:</strong></small>
<div class="container border pt-3">
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_csrf" value="77575ae7ac9df5cd5fab0ae14e7b40f67cafc3a4402a53c6810c9ca28c58d295"&gt;</pre>
   <pre rel="HTML" class="language-php">&lt;input type="hidden" name="_method" value="put"&gt;</pre>
</div>
   </section><!--//section-->

</article><!--//docs-article-->
