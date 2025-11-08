<?php include '../includes/header.php'; ?>
<section class="container my-5">
    <h2 class="text-center mb-4">Modelo de Evaluación Cuantitativa de la Calidad de Software</h2>
    <p class="lead text-justify">
        A continuación se presenta un modelo que permite <strong>evaluar cuantitativamente la calidad de un software educativo</strong>.
        Cada criterio se valora de 0 a 5, siendo 0 la calificación más baja y 5 la más alta. Al finalizar, el sistema
        calculará automáticamente el promedio general de calidad del software evaluado.
    </p>

    <form id="formEvaluacion" class="mt-4">
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Criterio</th>
                        <th>Descripción</th>
                        <th>Calificación (0 - 5)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Funcionalidad</strong></td>
                        <td>El sistema cumple con los requerimientos establecidos.</td>
                        <td><input type="number" class="form-control text-center" name="funcionalidad" min="0" max="5" step="0.1" required></td>
                    </tr>
                    <tr>
                        <td><strong>Usabilidad</strong></td>
                        <td>El software es fácil de entender, aprender y usar.</td>
                        <td><input type="number" class="form-control text-center" name="usabilidad" min="0" max="5" step="0.1" required></td>
                    </tr>
                    <tr>
                        <td><strong>Rendimiento</strong></td>
                        <td>El sistema responde rápidamente y maneja bien las cargas.</td>
                        <td><input type="number" class="form-control text-center" name="rendimiento" min="0" max="5" step="0.1" required></td>
                    </tr>
                    <tr>
                        <td><strong>Seguridad</strong></td>
                        <td>El sistema protege adecuadamente la información y los accesos.</td>
                        <td><input type="number" class="form-control text-center" name="seguridad" min="0" max="5" step="0.1" required></td>
                    </tr>
                    <tr>
                        <td><strong>Mantenibilidad</strong></td>
                        <td>El código es entendible, modular y fácil de actualizar.</td>
                        <td><input type="number" class="form-control text-center" name="mantenibilidad" min="0" max="5" step="0.1" required></td>
                    </tr>
                    <tr>
                        <td><strong>Eficiencia</strong></td>
                        <td>El sistema utiliza óptimamente los recursos del servidor y del cliente.</td>
                        <td><input type="number" class="form-control text-center" name="eficiencia" min="0" max="5" step="0.1" required></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" id="btnCalcularPromedio">Calcular Promedio</button>
        </div>
    </form>

    <div id="resultado" class="alert alert-info text-center mt-4" style="display:none;">
        <h4>Resultado de la Evaluación</h4>
        <p><strong>Puntaje promedio:</strong> <span id="promedio"></span> / 5</p>
        <p id="interpretacion"></p>
    </div>

    <div class="mt-5">
        <h5>Interpretación de los resultados</h5>
        <ul>
            <li><strong>0.0 - 2.0:</strong> Calidad baja, requiere mejoras significativas.</li>
            <li><strong>2.1 - 3.5:</strong> Calidad aceptable, pero con áreas críticas por mejorar.</li>
            <li><strong>3.6 - 4.5:</strong> Buena calidad, cumple con la mayoría de los estándares.</li>
            <li><strong>4.6 - 5.0:</strong> Excelente calidad, cumple con todas las métricas de forma sobresaliente.</li>
        </ul>
    </div>

    <!-- Video explicativo -->
    <!-- <div class="ratio ratio-16x9 mt-5">
        <iframe src="https://www.youtube.com/embed/" title="Video: Evaluación Cuantitativa de la Calidad del Software" allowfullscreen></iframe>
    </div> -->
</section>

<!-- Script externo -->
<script src="../assets/js/evaluacion_cuantitativa.js"></script>
<?php include '../includes/footer.php'; ?>
