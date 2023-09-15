<article class="docs-article" id="rotas">
  <header class="docs-header user-select-none">
    <h2 class="docs-heading"><span class="text-success">#</span> Rotas <span class="docs-time">Ultima atualização: <strong>13 de setembro 2023</strong></span></h2>
    <section class="docs-intro border-bottom">
        <h5><span class="text-success">#</span> Introdução</h5>
        <p>Scada Unity utiliza o padrão MVC (Model,View,Controller), o arquivo de configuração das rotas são criados por padrão no diretório <strong>app/routes</strong>.</p>
        <p>As rotas são definidas no arquivo <strong>app/config/routes.php</strong> o arquivo, <strong>web.php</strong> ja vem carregado por padrão. </p>
        <p>Porém você é livre para criar um arquivo de rotas em qualquer lugar para isso basta informar o caminho do arquivo, e ele será carregado.</p>
<pre class="m-0">
<code class="language-php user-select-all">use ScadaUnity\Framework\Http\Router;

Router::setMap([
        'web' => ROOT.'/app/routes/web.php',
]);</code></pre>
      <br>
        <ul class="pb-0">
          <li><h5>Metodos disponiveis</h5>
              <ul class="ms-3 text-success">
                <li class="p-0">get</li>
                <li class="p-0">post</li>
                <li class="p-0">put</li>
                <li class="p-0">patch</li>
                <li class="p-0">delete</li>
                <li class="p-0">options</li>
              </ul>
          </li>
        </ul>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i class="fas fa-info-circle fa-2x pe-2"></i>
          <div>
              <small>Por padrão os navegadores aceitam apenas os metodos <strong>GET e POST</strong>.</small>
          </div>
        </div>
        <h5><span class="text-success">#</span> Listando as rotas</h5>
        <p>O Scadaunity conta com um assistente de linha de comando <strong>CLI</strong>, voce pode listar todas as rotas utilizando o comando:</p>
        <pre class="language-php"> <code class="user-select-all">php cli routes</code> </pre>

    </section><!--//docs-intro-->
  </header>

  <section class="docs-section" id="rotas-get">
      <div class="user-select-none">
          <h2 class="section-heading"><span class="text-success">* </span> Rota get</h2>
          <p>Rota mais básica e muito utilizada, onde se define uma Uri, o controllador e o metodo separado por @. </p>
          <ul>
            <li>No primeiro parametro informamos uma string com a Uri <strong>/user</strong>.
            </li>
            <li>No segundo parametro informamos o controller que ira tratar esta requisição e o metodo separado por @;
              <ul>
                <li><span class="h5">UserController@index</span></li>
              </ul>
            </li>
            <li>Criar uma rota do tipo: <strong class="text-success">get</strong></li>
          </ul>
      </div>
  <pre class="m-0"><code class="language-php">Router::get('/user','UserController@index');</code></pre>
</section>

<section class="docs-section" id="rotas-post">
  <h2 class="section-heading"><span class="text-success">*</span> Rota post</h2>
  <p>Utilizada para enviar dados de formularios para o servidor para criar um novo registro.</p>
  <ul>
    <li>No primeiro parametro informamos uma string com a Uri <strong>/rota</strong>;
    </li>
    <li>No segundo parametro informamos o controller que ira tratar esta requisição e o metodo separado por @;
      <ul>
        <li><span class="h5">Controller@metodo</span></li>
      </ul>
    </li>
    <li>Criar uma rota do tipo: <strong class="text-success">post</strong></li>
  </ul>
  <pre class="m-0"><code class="language-php">Router::post('/user','UserController@store');</code></pre>
  <br>
  <div class="alert alert-secondary d-flex align-items-center" role="alert">
      <i class="fas fa-exclamation-triangle fa-2x pe-2 text-info"></i>
    <div>
        <small>Rotas do tipo <strong>post</strong> exigem o envio do <strong>_CSRF</strong> token. saiba mais sobre <a  href="#item-3-1">Proteção CSRF</a> </small>
    </div>
  </div>

</section>

<section class="docs-section" id="rotas-put">
  <h2 class="section-heading"># Rota <span class="text-success">put</span></h2>
  <p>Utiliza para enviar dados de formularios para o servidor para criar um novo recurso ou editar um recurso existente</p>
  <ul>
    <li>No primeiro parametro informamos uma string com a Uri <strong>/rota</strong>;
    </li>
    <li>No segundo parametro informamos o controller que ira tratar esta requisição e o metodo separado por @;
      <ul>
        <li><span class="h5">Controller@metodo</span></li>
      </ul>
    </li>
    <li>Criar uma rota do tipo: <strong class="text-success">put</strong></li>
  </ul>
  <pre class="m-0"><code class="language-php">Router::put('/user','UserController@update');</code></pre>
  <br>
  <div class="alert alert-secondary d-flex align-items-center" role="alert">
      <i class="fas fa-exclamation-triangle fa-2x pe-2 text-info"></i>
    <div>
        <small>Rotas do tipo <strong>put</strong> exigem o envio do <a href="#item-3-1">token CSRF</a> e o <a href="#item-3-2">METODO</a></small>
    </div>
  </div>
</section>

<section class="docs-section" id="rotas-delete">
  <h2 class="section-heading"># Rota <span class="text-success">delete</span></h2>
  <p>Utiliza para enviar dados de formularios para o servidor para excluir um recurso</p>
  <ul>
    <li>No primeiro parametro informamos uma string com a Uri e um inteiro o id <strong>/rota/[0-9]</strong>;
    </li>
    <li>No segundo parametro informamos o controller que ira tratar esta requisição e o metodo separado por @;
      <ul>
        <li><span class="h5">Controller@metodo</span></li>
      </ul>
    </li>
    <li>Criar uma rota do tipo: <strong class="text-success">delete</strong></li>
  </ul>
  <pre class="m-0"><code class="language-php">Router::delete('/user/[0-9]','UserController@destroy');</code></pre>
  <br>
  <div class="alert alert-secondary d-flex align-items-center" role="alert">
      <i class="fas fa-exclamation-triangle fa-2x pe-2 text-info"></i>
    <div>
        <small>Rotas do tipo <strong>delete</strong> exigem o envio do <a href="#item-3-1">token CSRF</a> e o <a href="#item-3-2">METODO</a></small>
    </div>
  </div>
</section>

<section class="docs-section" id="rotas-resource">
  <h2 class="section-heading"># Rota <span class="text-success">resource</span></h2>
  <p>Utilize este metodo para criar rotas do tipo resource, informando o prefixo da rota e o controlador responsavel </p>
  <p>O metodo resource ira criar as rotas com os metodos padrão do framework auxiliando no CRUD de forma descomplicada e elegante. </p>
  <ul class="pb-0">
    <li><h5>Metodos padrão</h5>
        <ul class="ms-3">
          <li class="p-0">index | create | show | edit | update | destroy.</li>
        </ul>
    </li>
    <li>Criar uma rota do tipo: <strong class="text-success">resource</strong></li>
  </ul>
  <pre class="m-0"><code class="language-php">Router::resource('/user','UserController');</code></pre>
  <br>
  <p>* Criamos 7 rotas para <strong>/user</strong> com apenas uma linha de codigo, rode o comando abaixo para visualizar as rotas criadas.</p>
  <pre class="language-php"> <code class="user-select-all">php cli routes</code> </pre>
  <figure class="figure">
      <img src="assets/images/routes/resource_list.png" class="figure-img img-fluid rounded" alt="...">
      <figcaption class="figure-caption text-end">Lista de rotas do CLI</figcaption>
  </figure>

</section>

<section class="docs-section" id="rotas-resources">
  <h2 class="section-heading"># Rota <span class="text-success">resources</span></h2>
  <p>Utilize este metodo para criar um grupo de rotas do tipo resource. </p>
  <ul class="pb-0">
    <li>Imagine que em nossa aplicação teremos dois recursos onde teremos os mesmos metodos.
        <ul class="ms-3">
          <li class="p-0">Produtos</li>
          <li class="p-0">Usuários</li>
        </ul>
    </li>
    <li>Seu arquivo de rotas ficará super enxuto e elegante.</li>
    <li>Criar uma rota do tipo: <strong class="text-success">resources</strong></li>
  </ul>
  <pre class="m-0"><code class="language-php">Router::resources([
        '/product'=>'ProductController'
        '/user'=>'Usercontroller',
]);</code></pre>
<br>
<p>* Criamos 2 recursos <strong>/product e /user</strong> com apenas uma linha de codigo, rode o comando abaixo para visualizar as rotas criadas.</p>
<pre class="language-php"> <code class="user-select-all">php cli routes</code> </pre>
<figure class="figure">
    <img src="assets/images/routes/resources_list.png" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption text-end text-success">Lista de rotas do CLI</figcaption>
</figure>

</section>

</article>
