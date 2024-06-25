<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/tutorial_php">TUTORIAL PHP E SQL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- TUDO QUE ESTIVER DENTRO DESSE TAG <ul> aparecera no NAVBAR -->

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/tutorial_php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorial_php/exemplo.php">Exemplo PHP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorial_php/exemplo.html">Exemplo HTML</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorial_php/exemplo_db.php">Exemplo DB</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projetos
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach (scandir(__DIR__ . "/../projetos") as $projeto) {
                            if (preg_match("/" . "\.php$" . "/Xu", $projeto)) {
                                $nome_projeto = strtoupper(preg_replace("/" . "\.php$" . "/Xu", "", $projeto));
                                echo <<<HEREDOC
                                <li><a class="dropdown-item" href="/tutorial_php/projetos/$projeto">$nome_projeto</a></li>
                                HEREDOC;
                            }
                        }
                        ?>
                    </ul>
                </li>

                <!-- FIM DOS BOTões  DO NAVBAR -->
            </ul>
        </div>
    </div>
</nav>