<?php include '../includes/header.php'; ?>
<section class="container my-5">
    <h2 class="text-center mb-4">Documentación Técnica del Aplicativo</h2>
    <p class="lead text-justify">
        Esta sección describe la estructura técnica, tecnologías empleadas y el funcionamiento interno del
        aplicativo web <strong>“Calidad de Software”</strong>, desarrollado con el objetivo de ilustrar los
        principios, normas y prácticas que garantizan la calidad en proyectos de software.
    </p>

    <div class="mt-5">
        <h4>1. Arquitectura del Sistema</h4>
        <p>
            El aplicativo sigue una estructura basada en la arquitectura <strong>Modelo-Vista-Controlador (MVC) simplificada</strong>,
            donde cada sección representa una vista modular. La lógica principal se distribuye entre archivos PHP,
            mientras que los recursos visuales y de interacción se manejan a través de <strong>Bootstrap</strong> y
            <strong>JavaScript</strong>.
        </p>
    </div>

    <div class="mt-4">
        <h4>2. Tecnologías Utilizadas</h4>
        <ul>
            <li><strong>PHP:</strong> Lenguaje de programación principal para la estructura del aplicativo.</li>
            <li><strong>HTML5 y CSS3:</strong> Estructura y presentación del contenido.</li>
            <li><strong>Bootstrap 5:</strong> Framework CSS para el diseño responsivo y moderno.</li>
            <li><strong>JavaScript:</strong> Implementación de funciones interactivas, como el modelo de evaluación.</li>
            <li><strong>InfinityFree:</strong> Servidor gratuito para el despliegue público del sitio web.</li>
        </ul>
    </div>

    <div class="mt-4">
        <h4>3. Estructura del Proyecto</h4>
        <p>La organización de carpetas y archivos es la siguiente:</p>
<pre class="bg-light p-3 rounded">
/calidadsoftware/
│
├── index.php
│
├── /assets/
│   └── /js/
│       └── evaluacion_cuantitativa.js
│
├── /includes/
│   ├── footer.php
│   └── header.php
│
└── /secciones/
    ├── codigo.php
    ├── conclusiones.php
    ├── documentacion.php
    ├── estandares.php
    ├── evaluar.php
    ├── modelos.php
    ├── normas.php
    ├── pruebas.php
    └── recomendaciones.php

</pre>
    </div>

    <div class="mt-4">
        <h4>4. Flujo de Navegación</h4>
        <p>
            El aplicativo cuenta con un menú principal ubicado en el <strong>header</strong>, desde el cual
            se puede acceder a todas las secciones del contenido. Cada sección está diseñada como un componente
            independiente que se incluye dinámicamente dentro del archivo principal <code>index.php</code>.
        </p>
    </div>

    <div class="mt-4">
        <h4>5. Modelo de Evaluación Cuantitativa</h4>
        <p>
            El modelo de evaluación implementado en el archivo <code>evaluacion_cuantitativa.php</code> permite
            al usuario ingresar métricas sobre la calidad de un software educativo y calcular una calificación
            final en una escala de 0 a 5. Este modelo se basa en criterios como funcionalidad, usabilidad,
            fiabilidad, eficiencia, mantenibilidad y portabilidad.
        </p>
    </div>

    <div class="mt-4">
        <h4>6. Aplicación de Principios de Calidad</h4>
        <p>
            Durante el desarrollo del aplicativo se aplicaron los principios de <strong>eficiencia, mantenibilidad y
            usabilidad</strong>. Se mantuvo una estructura modular, uso de estándares web y un diseño responsivo.
            Además, se siguió un enfoque iterativo con validación constante del funcionamiento y revisión del código.
        </p>
    </div>

    <div class="alert alert-secondary mt-5">
        <h5 class="mb-2">Conclusión Técnica</h5>
        <p>
            El aplicativo “Calidad de Software” demuestra la importancia de implementar estándares, modelos y métricas
            para asegurar la calidad en proyectos tecnológicos. Su diseño modular y uso de buenas prácticas refleja
            los principios fundamentales de la ingeniería de software moderna.
        </p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
