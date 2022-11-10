<main class="contenedor seccion">
    <h1>Actualizar Vendedor</h1>

    <a href="/vendedores" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>
enctype
    <form class="formulario" method="POST"  action="/vendedores/actualizar">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
</main>