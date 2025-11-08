<?php include '../includes/header.php'; ?>

<div class="text-center mb-5">
  <h1 class="display-5 fw-bold text-primary">Normas de Calidad de Software</h1>
  <p class="lead mt-3">
    Las normas de calidad de software establecen lineamientos y requisitos que aseguran que un producto cumpla con las expectativas de los usuarios y los estándares de la industria.
  </p>
</div>

<section class="mb-5">
  <h3 class="fw-bold text-secondary mb-3">Principales Normas Internacionales</h3>

  <div class="accordion" id="accordionNormas">
    <!-- ISO/IEC 25010 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
          ISO/IEC 25010 – Modelo de Calidad del Software
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Define un modelo de calidad compuesto por <strong>ocho características</strong> principales:
          funcionalidad, fiabilidad, usabilidad, eficiencia, mantenibilidad, portabilidad, compatibilidad y seguridad.
          Es la norma más actual utilizada para evaluar la calidad de los productos de software.
        </div>
      </div>
    </div>

    <!-- ISO/IEC 9126 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
          ISO/IEC 9126 – Calidad del producto software
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Es una de las primeras normas que definió un modelo de calidad del software, base de la ISO/IEC 25010.  
          Introdujo métricas de evaluación para cada característica de calidad.
        </div>
      </div>
    </div>

    <!-- ISO 9001 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
          ISO 9001 – Sistemas de Gestión de Calidad
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Aplica a organizaciones de cualquier sector.  
          Garantiza que los procesos estén controlados y orientados a la satisfacción del cliente.  
          En software, asegura que el proceso de desarrollo esté bien documentado y gestionado.
        </div>
      </div>
    </div>

    <!-- IEEE 730 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
          IEEE 730 – Plan de Aseguramiento de la Calidad del Software (SQA)
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Define el contenido y estructura del plan de aseguramiento de la calidad.  
          Ayuda a los equipos a establecer procedimientos, auditorías y revisiones para mantener la calidad durante todo el ciclo de vida del software.
        </div>
      </div>
    </div>

    <!-- CMMI -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
          CMMI – Capability Maturity Model Integration
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Evalúa la madurez de los procesos de una organización.  
          Establece cinco niveles que van desde un desarrollo caótico hasta procesos optimizados y predecibles.
        </div>
      </div>
    </div>

    <!-- ISO/IEC 15504 (SPICE) -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
          ISO/IEC 15504 – SPICE (Software Process Improvement and Capability Determination)
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionNormas">
        <div class="accordion-body">
          Permite evaluar la capacidad de los procesos de desarrollo de software y establecer mejoras continuas.  
          Se usa frecuentemente en auditorías y certificaciones.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="text-center mt-5">
  <h4 class="fw-bold mb-3">Video Explicativo</h4>
  <p>Conoce la importancia de aplicar normas de calidad en el desarrollo de software:</p>
  <div class="ratio ratio-16x9 mx-auto" style="max-width: 720px;">
    <iframe src="https://www.youtube.com/embed/FuZCZZrYwEo" title="Normas de calidad del software" allowfullscreen></iframe>
  </div>
</section> -->

<?php include '../includes/footer.php'; ?>
