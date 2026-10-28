<?php

require_once "Includes/seguridad.php";
require_once "Config/Conexion.php";
require_once "Includes/header.php";

?>

<section class="inicio">

    <div class="bienvenida">

        <h2>Bienvenido al sistema SIGSM</h2>

        <p>
            Sistema de Gestión de Servicios y Módulos.
        </p>

        <p>
            Desde este sistema puedes gestionar usuarios,
            categorías, documentos y encuestas.
        </p>

    </div>

    <div class="modulos">

        <a href="/SIGSM/usuarios.php" class="tarjeta">
            <h3>Usuarios</h3>
            <p>Consultar los usuarios registrados en el sistema.</p>
        </a>

        <a href="/SIGSM/categorias.php" class="tarjeta">
            <h3>Categorías</h3>
            <p>Consultar las categorías de documentos.</p>
        </a>

        <a href="/SIGSM/documentos.php" class="tarjeta">
            <h3>Documentos</h3>
            <p>Consultar los documentos disponibles.</p>
        </a>

        <a href="/SIGSM/encuestas.php" class="tarjeta">
            <h3>Encuestas</h3>
            <p>Consultar las encuestas del sistema.</p>
        </a>

        <a href="/SIGSM/preguntas.php" class="tarjeta">
            <h3>Preguntas</h3>
            <p>Consultar las preguntas de las encuestas.</p>
        </a>

        <a href="/SIGSM/opciones.php" class="tarjeta">
            <h3>Opciones</h3>
            <p>Consultar las opciones de respuesta.</p>
        </a>

        <a href="/SIGSM/respuestas.php" class="tarjeta">
            <h3>Respuestas</h3>
            <p>Consultar las respuestas registradas.</p>
        </a>

    </div>

</section>

<?php

require_once "includes/footer.php";

?>