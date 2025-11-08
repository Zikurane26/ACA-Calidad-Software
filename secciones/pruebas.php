<?php include '../includes/header.php'; ?>
<section class="container my-5">
    <h2 class="text-center mb-4">Pruebas y Evaluación de la Calidad del Software</h2>
    <p class="lead text-justify">
        Las <strong>pruebas de software</strong> son un conjunto de actividades diseñadas para evaluar si un sistema
        cumple con los requisitos especificados y funciona correctamente. Estas pruebas permiten identificar errores,
        medir la calidad del producto y asegurar que el software sea confiable, eficiente y seguro antes de su implementación.
    </p>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Tipos de Pruebas</h4>
            <ul>
                <li><strong>Pruebas Unitarias:</strong> verifican el funcionamiento de componentes individuales del código.</li>
                <li><strong>Pruebas de Integración:</strong> validan la correcta interacción entre módulos o componentes.</li>
                <li><strong>Pruebas Funcionales:</strong> comprueban que el sistema cumpla con los requerimientos del usuario.</li>
                <li><strong>Pruebas de Usabilidad:</strong> evalúan la experiencia del usuario al interactuar con la aplicación.</li>
                <li><strong>Pruebas de Rendimiento:</strong> miden la velocidad, estabilidad y capacidad de respuesta del sistema.</li>
                <li><strong>Pruebas de Seguridad:</strong> identifican vulnerabilidades o accesos no autorizados.</li>
            </ul>
        </div>

        <div class="col-md-6">
            <h4>Herramientas de Prueba</h4>
            <ul>
                <li><strong>Selenium:</strong> automatización de pruebas funcionales para aplicaciones web.</li>
                <li><strong>JUnit / PHPUnit:</strong> para pruebas unitarias en Java y PHP, respectivamente.</li>
                <li><strong>Postman:</strong> para pruebas de APIs y servicios web.</li>
                <li><strong>JMeter:</strong> para pruebas de carga y rendimiento.</li>
                <li><strong>Lighthouse (Google):</strong> para medir la calidad, rendimiento y accesibilidad de sitios web.</li>
            </ul>
        </div>
    </div>

    <div class="mt-5">
        <h4>Evaluación Cuantitativa de la Calidad</h4>
        <p>
            Para obtener una <strong>métrica cuantitativa</strong>, se realizó una evaluación del aplicativo web del 
            <strong>SENA</strong>, analizando distintos aspectos del sistema educativo en línea. 
            Se asignó una calificación entre <strong>0 y 5</strong> en criterios como funcionalidad, usabilidad, rendimiento, 
            seguridad, mantenibilidad y eficiencia. Con base en estos resultados, se generó un promedio general que refleja 
            el nivel de <strong>calidad del software</strong> del sitio evaluado.
        </p>

        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Criterio</th>
                        <th>Descripción</th>
                        <th>Calificación (0 - 5)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Funcionalidad</td>
                        <td>El sistema cumple correctamente sus funciones principales.</td>
                        <td>4.8</td>
                    </tr>
                    <tr>
                        <td>Usabilidad</td>
                        <td>La interfaz es clara, intuitiva y fácil de usar.</td>
                        <td>4.6</td>
                    </tr>
                    <tr>
                        <td>Rendimiento</td>
                        <td>El sistema responde de forma rápida y estable bajo carga.</td>
                        <td>4.7</td>
                    </tr>
                    <tr>
                        <td>Seguridad</td>
                        <td>Protege adecuadamente los datos y accesos del usuario.</td>
                        <td>4.5</td>
                    </tr>
                    <tr>
                        <td>Mantenibilidad</td>
                        <td>El código es modular, bien documentado y fácil de actualizar.</td>
                        <td>4.9</td>
                    </tr>
                    <tr>
                        <td>Eficiencia</td>
                        <td>El uso de recursos del sistema es óptimo.</td>
                        <td>4.8</td>
                    </tr>
                    <tr class="table-secondary">
                        <td colspan="2"><strong>Promedio General</strong></td>
                        <td><strong>4.72</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        <h5>Interpretación del Resultado</h5>
        <p>
            Un puntaje promedio superior a <strong>4.5</strong> indica que el software posee una <strong>alta calidad</strong>,
            cumpliendo con los estándares y buenas prácticas requeridas para entornos educativos.
        </p>
    </div>

    <!-- Video explicativo -->
    <!-- <div class="ratio ratio-16x9 mt-5">
        <iframe src="https://www.youtube.com/embed/" title="Video: Pruebas y Evaluación de Calidad" allowfullscreen></iframe>
    </div> -->
</section>
<?php include '../includes/footer.php'; ?>
