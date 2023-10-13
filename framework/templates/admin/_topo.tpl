<!-- Menu fixo -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#" style="font-weight:bold">Painel administrativo</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    Você está logado como : <b>{$smarty.session.NOME}</b>
                </p>
                <ul class="nav">
                    <li>
                        <a href="?pagina=admin/logoff">Sair</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>