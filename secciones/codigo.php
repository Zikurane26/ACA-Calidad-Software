<?php include '../includes/header.php'; ?>
<section class="container my-5">
    <h2 class="text-center mb-4">Código y Programación</h2>
    <p class="lead text-justify">
        El <strong>código fuente</strong> es el corazón del software, y su calidad determina gran parte del éxito o fracaso
        de un proyecto. Una buena programación no solo implica que el sistema funcione, sino que sea <em>eficiente, mantenible
        y escalable</em>. Las buenas prácticas de desarrollo permiten que los equipos trabajen de forma ordenada,
        minimicen errores y mejoren la calidad global del producto.
    </p>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Buenas Prácticas de Programación</h4>
            <ul>
                <li>Utilizar nombres descriptivos para variables, funciones y clases.</li>
                <li>Aplicar principios como <strong>DRY (Don’t Repeat Yourself)</strong> y <strong>KISS (Keep It Simple, Stupid)</strong>.</li>
                <li>Seguir una guía de estilo o estándar de codificación (por ejemplo, PSR en PHP).</li>
                <li>Documentar adecuadamente el código con comentarios y manuales técnicos.</li>
                <li>Usar control de versiones (Git) para gestionar los cambios del proyecto.</li>
            </ul>
        </div>

        <div class="col-md-6">
            <h4>Ejemplo de Código Limpio en PHP</h4>
            <pre><code class="language-php">
&lt;?php
class Calculadora {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }
}

$calc = new Calculadora();
echo "Resultado: " . $calc-&gt;sumar(5, 3);
?&gt;
            </code></pre>
            <p class="text-muted">
                Este ejemplo muestra una clase simple con métodos claros y reutilizables, demostrando
                principios básicos de encapsulación y legibilidad.
            </p>
        </div>
    </div>

    <div class="mt-4">
        <h4>Integración de Herramientas</h4>
        <p>
            Para garantizar la calidad en el código, se recomienda integrar herramientas como:
        </p>
        <ul>
            <li><strong>PHPStan</strong> o <strong>Psalm</strong> para análisis estático del código.</li>
            <li><strong>PHPUnit</strong> para realizar pruebas unitarias automatizadas.</li>
            <li><strong>Prettier</strong> o <strong>PHP-CS-Fixer</strong> para mantener un formato de código consistente.</li>
        </ul>
    </div>

    <div class="alert alert-success mt-4">
        <h5 class="mb-2">Importancia de la Calidad del Código</h5>
        <p>
            Un código bien estructurado facilita la detección de errores, mejora la colaboración en equipo y
            permite el crecimiento del software a largo plazo sin comprometer su estabilidad.
        </p>
    </div>

    <!-- Espacio para el video explicativo
    <div class="ratio ratio-16x9 mt-5">
        <iframe src="https://www.youtube.com/embed/" title="Video: Código y Programación" allowfullscreen></iframe>
    </div> -->
</section>
<?php include '../includes/footer.php'; ?>
