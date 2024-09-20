<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Curriculum</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="title">
                <h1>
                    <?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'Nombre no ingresado'; ?>
                </h1>
                <p>Puesto Ocupado / Buscado</p>
            </div>
        </header>
        <div class="content">
            <div class="sidebar">
                <section>
                    <h2>Datos de Contacto</h2>
                    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($_POST['telefono']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
                    <p><strong>País:</strong> <?php echo htmlspecialchars($_POST['pais']); ?></p>
                    <p><strong>LinkedIn:</strong> <?php echo htmlspecialchars($_POST['linkedin']); ?></p>
                </section>

                <section>
                    <h2>Idiomas</h2>
                    <p><strong>Español:</strong> 
                        <?php echo isset($_POST['espanol']) ? htmlspecialchars($_POST['espanol']) : "No seleccionado"; ?>
                    </p>
                    <p><strong>Inglés:</strong> 
                        <?php echo isset($_POST['ingles']) ? htmlspecialchars($_POST['ingles']) : "No seleccionado"; ?>
                    </p>
                </section>
                <section>
                    <h2>Aptitudes</h2>
                     <?php echo htmlspecialchars($_POST['aptitud']); ?></p>
                </section>
                <section>
                    <h2>Habilidades</h2>
                        <?php 
                        if (isset($_POST['habilidades'])) {
                            echo implode(', ', $_POST['habilidades']);
                        } else {
                            echo "Ninguna habilidad seleccionada.";
                        }
                        ?>
                    </p>
                </section>
            </div>
            <div class="main-content">
                <section>
                    <h2>Perfil</h2>
                    <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($_POST['fecha_nacimiento']); ?></p>
                    <p><strong>Descripción de vida:</strong> <?php echo nl2br(htmlspecialchars($_POST['descripcion_vida'])); ?></p>
                </section>
                <section>
                    <h2>Intereses</h2>
                    <p><?php echo nl2br(htmlspecialchars($_POST['intereses'])); ?></p>
                </section>
                <section>
                    <h2>Lenguajes de Programación</h2>
                        <?php 
                        if (isset($_POST['lenguajes'])) {
                            echo implode(', ', $_POST['lenguajes']);
                        } else {
                            echo "No se seleccionaron lenguajes.";
                        }
                        ?>
                    </p>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
