<?php include 'includes/header.php'; ?>

<div class="text-center mb-5">
  <h1 class="display-5 fw-bold text-primary">Calidad de Software</h1>
  <p class="lead mt-3">
    Este aplicativo web explica los fundamentos, normas, modelos, estándares y procesos que garantizan la calidad del software en entornos educativos y reales.
  </p>
</div>

<div class="row g-4">
  <?php
  $secciones = [
    ["Normas", "secciones/normas.php", "fas fa-balance-scale"],
    ["Modelos", "secciones/modelos.php", "fas fa-cogs"],
    ["Estándares", "secciones/estandares.php", "fas fa-certificate"],
    ["Código y Programación", "secciones/codigo.php", "fas fa-code"],
    ["Pruebas y Evaluación", "secciones/pruebas.php", "fas fa-vial"],
    ["Conclusiones", "secciones/conclusiones.php", "fas fa-lightbulb"],
    ["Recomendaciones", "secciones/recomendaciones.php", "fas fa-comments"],
    ["Evaluar Calidad", "secciones/evaluar.php", "fas fa-chart-bar"]
  ];

  foreach ($secciones as $sec) {
    echo "
    <div class='col-md-3'>
      <div class='card h-100 shadow-sm'>
        <div class='card-body text-center'>
          <h5 class='card-title fw-bold mb-3'>{$sec[0]}</h5>
          <a href='{$sec[1]}' class='btn btn-outline-primary'>Ver más</a>
        </div>
      </div>
    </div>";
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>
