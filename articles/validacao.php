<article class="docs-article" id="validacao">
    <header class="docs-header">
        <h1 class="docs-heading"><span class="text-success"># </span>Validação <span class="docs-time">Ultima atualização: <strong>24 de setembro de 2022</strong></span></h1>
        <section class="docs-intro">
            <h5># Introdução</h5>
            <p>O framework oferece varias abordagens de validação para as requisições de entrada, o metodo <code>validate()</code> já é carregado por padrão junto com os demais helpers do sistema.</p>
        </section><!--//docs-intro-->
    </header>
    <section class="docs-section" id="validacao-required">
        <h2 class="section-heading"><span class="text-success">* </span>Required</h2>
        <p>Utilizamos quando o campo deve ser obrigatório</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'required',
            ]);</code></pre>

    </section><!--//section-->

    <section class="docs-section" id="validacao-email">
<h2 class="section-heading"><span class="text-success">* </span>Email</h2>
<p>Utilizamos para verificar se o email é valido</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'email',
            ]);</code></pre>
    </section><!--//section-->

<section class="docs-section" id="validacao-unique">
<h2 class="section-heading"><span class="text-success">* </span>Unique</h2>
<p>Utilizamos para verificar se o registro ja existe no banco de dados</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'unique:users',
            ]);</code></pre>

    </section><!--//section-->

<section class="docs-section" id="validacao-max">
<h2 class="section-heading"><span class="text-success">* </span>Max Length</h2>
<p>Utilizamos para verificar o numero maximo de caracteres</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'maxlength:100',
            ]);</code></pre>
    </section><!--//section-->

<section class="docs-section" id="validacao-min">
<h2 class="section-heading"><span class="text-success">* </span>Min Length</h2>
<p>Utilizamos para verificar o numero minimo de caracteres</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'minlength:5',
            ]);</code></pre>
    </section><!--//section-->

    <section class="docs-section" id="validacao-bool">
    <h2 class="section-heading"><span class="text-success">* </span>Bool</h2>
    <p>Utilizamos para verificar se o valor é boleano</p>
<pre class="m-0"><code class="language-php">$validate = validate([
              'email'=>'bool',
            ]);</code></pre>
        </section><!--//section-->

</article><!--//docs-article-->
