<article class="docs-article" id="inicio">
    <header class="docs-header">
        <h1 class="docs-heading"><span class="text-success">#</span> Inicio</h1>
    </header>

    <section class="docs-section" id="inicio-introducao">
        <h2><span class="text-success">#</span> Introdução</h2>
        <p>Scada Unity é um framework PHP de baixa curva de aprendizado com sintaxe simples com intuito de resolver tarefas simples para inicio de uma nova aplicação. </p>
        <p>O pacote conta com sistema de autenticação nativo, controle de sessoes, envio de email, validações, template engine, Assistente de linha de comando e etc...</p>
        <p>Com tudo isso vc tem mais produtividade focando apenas na regra de negocio do seu cliente, entregando mais em menor prazo.</p>
    </section><!--//docs-intro-->

    <section class="docs-section" id="inicio-instalacao">
        <h2><span class="text-success">#</span> Instalação</h2>
        <pre rel="HTML" class="language-php">
            <code class="language-php user-select-all">composer create-project scadaunity/framework</code>
        </pre>
    </section><!--//docs-intro-->
    
    <section class="docs-section" id="inicio-configuracao">
        <h2 class="section-heading"><span class="text-success">#</span> Configuração</h2>
        <h5 class="section-headind">.Env</h5>
        <p>Crie um arquivo de configuração na raiz do seu projeto com o nome <b>.env</b></p>
        <p>Todas as configurações da aplicação serão feitas por aqui, qualquer variavel criada aqui será uma constante, não podendo ser alteradas em tempo de execução.</p>
        <p>Adicione as variaveis de ambiente no seu arquivo .Env na raiz do projeto, as configurações de conexão do seu banco de dados. </p>
        <pre rel="HTML" class="language-php">
            <code>/** Database /*
DB_DRIVER=mysql
DB_HOST=localhost
DB_PORT=3306
DB_NAME=framework
DB_USER=root
DB_PASSWORD=1234
            </code>
        </pre>
    </section><!--//section-->
</article><!--//docs-article-->
