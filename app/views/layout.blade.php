<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        {{ HTML::script('packages/jquery/jquery-1.11.1.min.js') }}
        {{ HTML::style('packages/semantic/packaged/css/semantic.min.css') }}
        {{ HTML::script('packages/semantic/packaged/javascript/semantic.min.js') }}
        {{ HTML::style('css/estilo_TuMesa.css') }}
        {{ HTML::script('js/script_TuMesa.js') }}
    </head>   

    <body>
        <div class="wrapper">
            <!-- HEADER -->
            <div class="ui attached inverted small menu block">
                <div id="header">
                    <a href="/PFG/TuMesa/public/" class="item"><h1>Tu Mesa</h1></a>
                    <div class="item borderless buscador">
                        <div class="ui icon input">
                            <input type="text" placeholder="Nombre del restaurante, dirección, CP...">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                    <?php
                    if (Auth::check()) {
                        ?>
                        <div class="right menu restaurante">
                            <div class="item borderless logout">
                                <a class="ui teal icon button" href="logout">
                                    <i class="off icon"></i> Cerrar Sesión
                                </a>
                            </div>
                            <div class="item borderless">
                                <div class="ui teal left attached icon button menu">
                                    <i class="reorder icon"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <!-- MENU -->
            <?php
            if (Auth::check()) {
                ?>
                <div class="ui floating right vertical inverted sidebar menu">
                    <!--    <div class="item">
                            <div class="ui input"><input type="text" placeholder="Search..."></div>
                        </div>-->
                    <a class="item" href="/PFG/TuMesa/public/restaurantes">
                        <i class="home icon"></i> Perfil
                    </a>
                    <a class="item" href="/PFG/TuMesa/public/cuenta">
                        <i class="settings layout icon"></i> Cuenta
                    </a>
                    <a class="item" href="/PFG/TuMesa/public/reservas">
                        <i class="mail icon"></i> Mensajes
                    </a>
                    <div class="item">
                        <b>Más</b>
                        <div class="menu">
                            <a class="item">
                                <i class="edit icon"></i> Editar tema
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- CONTENT -->
            <?php
            if (Auth::check()) {
                ?>
                <div class="ui inverted teal label tituloRestaurante">
                    <div>{{Auth::user()->nombre;}}</div>
                </div>
                <?php
            }
            ?>
            <div id="contenido">
                @yield('content')
            </div>

            <!-- FOOTER -->
            <div id="footer">
                <div class="ui attached inverted menu">
                    <a class="item" href="sobreNosotros"> Sobre nosotros </a>
                    <?php
                    if (!Auth::check()) {
                        ?>
                        <h4 class="item"> ¿Tienes un restaurante? </h4>
                        <a class="item borderless signin"> Regístrate </a> 
                        <h4 class="item borderless"> o </h4>
                        <a class="item borderless login"> Inicia sesión </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!--    FORMULARIOS POPUP   -->
        <!-- REGISTRO -->
        <form class="ui small modal signin">
            <div class="ui inverted black header form">
                <i class="close icon"></i>
                <div class="tituloModal">Regístrate</div>
            </div>
            <div class="content form">
                <div class="ui form signin">
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="text" name="email" placeholder="Correo electrónico">
                            <i class="mail icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="text" name="nombre" placeholder="Nombre de tu restaurante">
                            <i class="food icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="password" name="password" placeholder="Contraseña">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="password" name="password2" placeholder="Repite la contraseña">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="botonFormulario">
                        <div class="ui small teal submit button">Regístrate</div>
                    </div>
                </div>
            </div>
        </form>

        <!-- INICIO DE SESIÓN -->
        <form class="ui small modal login">
            <div class="ui inverted black header form">
                <i class="close icon"></i>
                <div class="tituloModal">Inicia Sesión</div>
            </div>
            <div class="content form">
                <div class="ui form login">
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="text" name="email" placeholder="Correo electrónico">
                            <i class="mail icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input type="password" name="password" placeholder="Contraseña">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="botonFormulario">
                        <div class="ui small teal submit button">Iniciar sesión</div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>