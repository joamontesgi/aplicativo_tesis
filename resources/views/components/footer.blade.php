<footer class="bg-primary text-center text-lg-start text-white custom-footer">
    <div class="container-fluid p-4">
        <!--Grid row-->
        <div class="row my-6">
            <!-- Grid column for logo and description -->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <div class="rounded-circle shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                    <img src="{{asset('/images/LogoGaiaCuadrado.png') }}" height="150" alt="Logo GAIA" loading="lazy" />
                </div>
                <p class="text-center">Refactorización de un Sistema de Detección de Intrusos Orientado a Servicios en la Nube para Detectar Ataques de Denegación de Servicios Distribuidos. Este proyecto tiene como objetivo principal mejorar la detección y mitigación de ataques DDoS/DoS en entornos de servicios en la nube, utilizando técnicas de aprendizaje supervisado y análisis de tráfico de red.</p>
            </div>
            <!-- Grid column for director info -->
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold">Contacto</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #95B43A; height: 2px" />
                <p><i class="fas fa-map-marker-alt mr-3"></i>Manizales, Caldas</p>
                <p><i class="fas fa-envelope mr-3"></i>Universidad Nacional de Colombia, Campus La Nubia</p>
                <p><i class="fas fa-envelope mr-3"></i>Universidad de Caldas</p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold">Directores y codirectores</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #95B43A; height: 2px" />
                <p><i class="fas fa-user-graduate mr-3"></i>Néstor Darío Duque - (PhD) - Director del proyecto</p>
                <p><i class="fas fa-user-graduate mr-3"></i>Gustavo Adolfo Isaza - (PhD) - Codirector del proyecto</p>
                <p><i class="fas fa-user-graduate mr-3"></i>Jeferson Arango López - (PhD) - Experto asesor</p>
                <p><i class="fas fa-user-graduate mr-3"></i>Albeiro Montes Gil - (Mgtr) - Investigador</p>
                <a href="https://repositorio.unal.edu.co/handle/unal/83889" class="text-white" target="_blank">Maestría</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold">Otras personas implicadas</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #95B43A; height: 2px" />
                <p><i class="fas fa-user mr-3"></i>Fabián Alberto Ramírez - (Mgtr) - Investigador</p>
                <p><i class="fas fa-user mr-3"></i>Juan Camilo Ballesteros (estudiante pregrado) - Investigador</p>
            </div>
        </div>
        <!--Grid row-->
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 GAIA UNAL MANIZALES
    </div>
</footer>


<style>
    .custom-footer {
        background-color: #3B3D3D !important; /* Fuerza el color de fondo */
        border-top: 2px solid #95B43A !important; /* Fuerza el color del borde superior */
    }

    .custom-footer .text-white, 
    .custom-footer a:not(.btn) { /* Aplica a enlaces que no sean botones de Bootstrap */
        color: #95B43A !important; /* Fuerza el color del texto y enlaces */
    }

    .custom-footer a:not(.btn):hover {
        color: #789628 !important; /* Fuerza el color al pasar el mouse */
    }

    .custom-footer p {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .custom-footer h6 {
        font-size: 16px;
        margin-bottom: 10px;
    }
</style>