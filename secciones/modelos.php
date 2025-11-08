<?php include '../includes/header.php'; ?>

<div class="text-center mb-5">
  <h1 class="display-5 fw-bold text-primary">Modelos de Calidad de Software</h1>
  <p class="lead mt-3">
    Los modelos de calidad permiten evaluar y estructurar los atributos que debe cumplir un producto de software para considerarse de alta calidad.
    A lo largo del tiempo, varios expertos han propuesto modelos que sirven de guía para la evaluación y mejora del software.
  </p>
</div>

<section class="mb-5">
  <h3 class="fw-bold text-secondary mb-3">Principales Modelos de Calidad</h3>

  <div class="accordion" id="accordionModelos">
    <!-- McCall -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
          Modelo de McCall (1977)
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionModelos">
        <div class="accordion-body">
          Uno de los primeros modelos de calidad del software. Propone tres perspectivas:
          <ul>
            <li><strong>Operación del producto:</strong> corrección, fiabilidad, eficiencia, integridad, usabilidad.</li>
            <li><strong>Revisión del producto:</strong> mantenibilidad, flexibilidad, facilidad de prueba.</li>
            <li><strong>Transición del producto:</strong> portabilidad, reusabilidad, interoperabilidad.</li>
          </ul>
          Fue pionero al establecer una relación directa entre métricas y atributos de calidad.
        </div>
      </div>
    </div>

    <!-- Boehm -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
          Modelo de Boehm (1978)
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionModelos">
        <div class="accordion-body">
          Basado en el de McCall, propuso una jerarquía más detallada de atributos de calidad:  
          <ul>
            <li><strong>Alta utilidad:</strong> facilidad de uso, portabilidad y eficiencia.</li>
            <li><strong>Mantenibilidad:</strong> facilidad para entender, modificar y probar.</li>
            <li><strong>Confiabilidad:</strong> corrección, robustez y consistencia del software.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Dromey -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
          Modelo de Dromey (1995)
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionModelos">
        <div class="accordion-body">
          Dromey enfatizó la relación entre la calidad del producto y la calidad de sus componentes.  
          Propuso que cada componente debe cumplir con atributos de corrección, confiabilidad, eficiencia y mantenibilidad.  
          Su enfoque es más dinámico y adaptable a distintos tipos de software.
        </div>
      </div>
    </div>

    <!-- FURPS -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
          Modelo FURPS (IBM)
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionModelos">
        <div class="accordion-body">
          Propuesto por Hewlett-Packard, define cinco factores clave:
          <ul>
            <li><strong>F</strong>unctionality (Funcionalidad)</li>
            <li><strong>U</strong>sability (Usabilidad)</li>
            <li><strong>R</strong>eliability (Fiabilidad)</li>
            <li><strong>P</strong>erformance (Rendimiento)</li>
            <li><strong>S</strong>upportability (Mantenibilidad)</li>
          </ul>
          Se utiliza ampliamente en ingeniería de requisitos para clasificar características de calidad.
        </div>
      </div>
    </div>

    <!-- CMMI -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
          Modelo CMMI (Capability Maturity Model Integration)
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionModelos">
        <div class="accordion-body">
          CMMI no solo evalúa la calidad del producto, sino también la madurez de los procesos de desarrollo.  
          Establece cinco niveles de madurez organizacional, desde procesos caóticos hasta procesos optimizados.  
          Es ampliamente usado en instituciones educativas y organizaciones de desarrollo.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="text-center mt-5">
  <h4 class="fw-bold mb-3">Video Explicativo</h4>
  <p>Comprende las diferencias entre los modelos de calidad y su aplicación en proyectos reales:</p>
  <div class="ratio ratio-16x9 mx-auto" style="max-width: 720px;">
    <iframe src="https://www.youtube.com/embed/3PpG4t0bRnk" title="Modelos de calidad del software" allowfullscreen></iframe>
  </div>
</section> -->

<?php include '../includes/footer.php'; ?>
