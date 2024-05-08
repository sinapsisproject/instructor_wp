
<div class="col-12 text-center">
    <h3 style="color: #445AFF;">Profesores</h3>
    <p>Todos nuestros profesores son egresados de las mejores universidades y cuentan con + 10 años de experiencia en diversas especialidades.</p>
</div>

{$c=0}
{foreach $instructores->response as $instructor}

{if $c % 2 == 0}
    <div class="row mb-5 shadow box-info-instructor">
        <div class="col-12 col-md-8 ">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>{$instructor->nombre}</h3>
                </div>
                <div class="col-12 col-md-6 text-start text-md-end">
                     {$instructor->cargo}
                </div>
                <div class="col-12 mt-3 mt-md-0">
                    <p style="font-weight: bold;">{$instructor->especialidad}</p>
                </div>
                <div class="col-12 mb-4">
                    <p>{$instructor->descripcion}</p>
                </div>
                <div class="col-12 mb-4">
                    <a href="/instructor/?id={$instructor->id}"><button class="button_instructor" type="button">Más sobre {$instructor->nombre} <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="photo-instructor-box">
                <!-- <img src="{$instructor->foto}" alt=""> -->
                <img src="{$instructor->foto}" alt="">
            </div>
        </div>
    </div>
{/if}

{if $c % 2 != 0}

<div class=" row mb-5 shadow box-info-instructor">
        <div class="col-12 col-md-4 d-none d-md-block">
            <div class="photo-instructor-box">
                <img src="{$instructor->foto}" alt="">
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>{$instructor->nombre}</h3>
                </div>
                <div class="col-12 col-md-6 text-start text-md-end">
                     {$instructor->cargo}
                </div>
                <div class="col-12 mt-3 mt-md-0">
                    <p style="font-weight: bold;">{$instructor->especialidad}</p>
                </div>
                <div class="col-12 mb-4">
                    <p>{$instructor->descripcion}</p>
                </div>
                <div class="col-12 mb-4">
                    <a href="/instructor/?id={$instructor->id}"><button class="button_instructor" type="button">Más sobre {$instructor->nombre} <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-block d-md-none">
            <div class="photo-instructor-box">
                <!-- <img src="{$instructor->foto}" alt=""> -->
                <img src="{$instructor->foto}" alt="">
            </div>
        </div>
    </div>


{/if}


{$c = $c + 1}

{/foreach}



