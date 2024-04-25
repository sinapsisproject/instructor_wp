<div class="row box-blue-instructor mt-5 mb-5">

    <div class="col-8">
        <h2 style="color: white;">{$instructor->response->nombre}</h2>
        <p>{$instructor->response->especialidad}</p>
        <p>+ 10 años de experiencia en Medicina interna</p>
    </div>
    
    <div class="col-7 box-white-description shadow">
        <p>{$instructor->response->descripcion}</p>
    </div>

    <div class="col-5" style="padding: 30px;">
        <div class="box-img-instructor">

        </div>
    </div>

</div>

<br>

{if $cursos|count > 0}
<br><br><br>
<div class="banner-courses-instructor mt-5 mb-5">

    <div class="row">
        <div class="col-6 pt-4 pl-2">
            <h3 style="color: white; padding-left: 20px;">Descubre sus cursos</h3>
        </div>
        <div class="col-6">
            <!-- <a href=""><button type="button">Ver todos los cursos</button></a> -->
        </div>

        <div class="col-12" style="padding : 30px;">
            <div class="row">
            {foreach $cursos as $curso}
            <div class="col-4">
                <div class="card shadow">
                    <div class="box-img-courses">
                        <div class="img-courses" style="background-image: url({$curso->imagen});"></div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p><i class="fa-solid fa-users"></i> + {$curso->estudiantes} Estudiantes</p>
                            </div>
                            <div class="col-6">
                                <p><i class="fa-regular fa-clock"></i> {$curso->duracion}</p>
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


