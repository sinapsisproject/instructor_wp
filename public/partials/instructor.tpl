<div class="row box-blue-instructor mt-5 mb-5">

    <div class="col-12 col-md-8 pe-md-5">

        <div class="row">
            <div class="col-12">
                <h2 style="color: white;">{$instructor->response->nombre}</h2>
                <p>{$instructor->response->especialidad}</p>
                <p>{$instructor->response->cargo}</p>
            </div>
            <div class="col-12 d-block d-md-none mb-3">
                <div class="img-profesor-instructor">
                    <img src="http://local.sinapsis.cl/wp-content/uploads/2024/05/fabian.jpg" alt="">
                </div>
            </div>
            <div class="col-12 box-white-description">
                <p>{$instructor->response->descripcion}</p>
            </div>
        </div>

    </div>

    <div class="col-12 col-md-4 d-none d-md-block">
        <div class="img-profesor-instructor">
            <img src="http://local.sinapsis.cl/wp-content/uploads/2024/05/fabian.jpg" alt="">
        </div>
    </div>

</div>


{if $cursos|count > 0}

<div class="banner-courses-instructor mb-5">

    <div class="row">
        <div class="col-12 text-center text-md-start">
            <h3 style="color: white;">Descubre sus cursos</h3>
        </div>
        <div class="col-6">
            <!-- <a href=""><button type="button">Ver todos los cursos</button></a> -->
        </div>

        <div class="col-12">
            <div class="row">
            {foreach $cursos as $curso}
            <div class="col-12 col-md-4 mb-3">
                <div class="card shadow">
                    <div class="box-img-courses">
                        <div class="img-courses" style="background-image: url({$curso->imagen});"></div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-course-data"><i class="fa-solid fa-users"></i> + {$curso->estudiantes} Estudiantes</p>
                            </div>
                            <div class="col-6">
                                <p class="text-course-data"><i class="fa-regular fa-clock"></i> {$curso->duracion}</p>
                            </div>
                        </div>
                        
                        <h5 class="card-title mb-3">{$curso->nombre}</h5>
                        <p class="card-text">{$curso->descripcion_corta}</p>
                        <a href="/curso/?curso={$curso->id}"><button style="width: 100%;" type="button" class="more-info-course btn btn-primary">Más información  <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        {/foreach}
        </div>

        </div>

    </div>

</div>

{/if}

<div class="col-12 text-center">
    <a href="/instructores/"><button type="button"><i style="margin-left: 10px;" class="fa-solid fa-arrow-left"></i> Volver a profesores</button></a>
</div>
<br><br>


