<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
        }
        .sidebar {
            width: 30%;
            padding: 20px;
            background-color: #f4f4f4;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            width: 65%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 10px;
        }
        .submit {
            margin-top: 20px;
        }
        .submit button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .submit button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="mostrar_resultado.php" method="POST">
    <header class="header">
            <div class="title">
            <h1>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
        </h1>
                <p><?php echo "Puesto Ocupado/ Buscado"; ?></p>
            </div>
        </header>
        <div class="container">
            <div class="sidebar">
                <section class="contacto">
                    <h2>CONTACTO</h2>
                    <p><i class="fas fa-phone"></i> 
                        <input type="text" name="telefono" placeholder="Ingresa tu número de teléfono">
                    </p>
                    <p><i class="fas fa-envelope"></i> 
                        <input type="text" name="email" placeholder="Ingresa tu correo electrónico">
                    </p>
                    <p><i class="fas fa-map-marker-alt"></i> 
                        <select name="pais">
                            <option value="peru">Perú</option>
                            <option value="argentina">Argentina</option>
                            <option value="chile" >Chile</option>
                            <option value="colombia" >Colombia</option>
                            <option value="brasil"  >Brasil</option>
                            <option value="ecuador" >Ecuador</option>
                            <option value="venezuela" >Venezuela</option>
                            <option value="uruguay" >Uruguay</option>
                            <option value="paraguay" >Paraguay</option>
                            <option value="bolivia" >Bolivia</option>
            </select>
                        </select>
                    </p>
                    <p><i class="fab fa-linkedin"></i> 
                        <input type="text" name="linkedin" placeholder="Ingresa tu perfil de LinkedIn">
                    </p>
                </section>

                <section class="IDIOMAS">
                    <h2>IDIOMAS</h2>
                    <p>Español:</p>
                    <label>
                        <input type="radio" name="español" value="básico"> Básico
                    </label>
                    <label>
                        <input type="radio" name="español" value="intermedio"> Intermedio
                    </label>
                    <label>
                        <input type="radio" name="español" value="avanzado"> Avanzado
                    </label>
                    <label>
                        <input type="radio" name="español" value="fluido"> Fluido
                    </label>

                    <p>Inglés:</p>
                    <label>
                        <input type="radio" name="ingles" value="básico"> Básico
                    </label>
                    <label>
                        <input type="radio" name="ingles" value="intermedio"> Intermedio
                    </label>
                    <label>
                        <input type="radio" name="ingles" value="avanzado"> Avanzado
                    </label>
                    <label>
                        <input type="radio" name="ingles" value="fluido"> Fluido
                    </label>
                </section>

                <section class="APTITUDES">
                        <h2>APTITUDES</h2>
                        <label for="aptitud">Selecciona una aptitud:</label>
                        <input list="aptitudes" id="aptitud" name="aptitud" placeholder="Elige o escribe una aptitud">
                        <datalist id="aptitudes">
                        <option value="Inteligencia emocional">
                        <option value="Trabajo en equipo">
                        <option value="Resistencia, tolerancia y flexibilidad">
                        <option value="Comunicación asertiva y eficiente">
                        <option value="Liderazgo">
                        <option value="Pensamiento crítico">
                        </datalist>
                    </section>
                <section class="HABILIDADES">
                    <h2>HABILIDADES</h2>
                    <label>
                        <input type="checkbox" name="habilidades[]" value="Natación"> Natación
                    </label><br>
                    <label>
                        <input type="checkbox" name="habilidades[]" value="Programación en C++"> Programación en C++
                    </label><br>
                    <label>
                        <input type="checkbox" name="habilidades[]" value="Diseño web"> Diseño web
                    </label><br>
                    <label>
                        <input type="checkbox" name="habilidades[]" value="Hablar en público"> Hablar en público
                    </label><br>
                    <label>
                        <input type="checkbox" name="habilidades[]" value="Liderazgo"> Liderazgo
                    </label><br>
                </section>
            </div>
            <div class="main-content">
                <section class="PERFIL">
                    <h2>PERFIL</h2>
                    <h3>Fecha de Nacimiento:</h3>
                    <input type="date" id="fecha-nacimiento" name="fecha_nacimiento">
                    <br><br>

                    <h3>Breve descripción de tu vida:</h3>
                    <textarea name="descripcion_vida" rows="4" cols="50" placeholder="Escribe una breve descripción de tu vida..."></textarea>
                </section>

                <section class="INTERESES">
                    <h2>INTERESES</h2>
                    <textarea id="intereses" name="intereses" rows="5" cols="40" placeholder="Escribe aquí tus intereses..."></textarea>
                </section>

                <section class="Lenguaje de programación">
                    <h2>Lenguaje de programación</h2>
                    <select id="lenguajes" name="lenguajes[]" multiple size="5">
                        <option value="C++">C++</option>
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="PHP">PHP</option>
                    </select>
                </section>
                <div class="submit">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
