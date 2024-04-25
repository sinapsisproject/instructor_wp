
<div class="col-12 text-center">
    <h3 style="color: #445AFF;">Profesores</h3>
    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
</div>

{$c=0}
{foreach $instructores->response as $instructor}

{if $c % 2 == 0}
    <div class=" row mb-5 shadow box-info-instructor">
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h3>{$instructor->nombre}</h3>
                </div>
                <div class="col-6 text-end">
                    Dr. en Hospital Lorem Ipsum
                </div>
                <div class="col-12">
                    <p style="font-weight: bold;">+ 10 años de experiencia en el sector de la salud</p>
                </div>
                <div class="col-12 mb-4">
                    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
                </div>
                <div class="col-12">
                    <a href="/instructor/?id={$instructor->id}"><button type="button">Descubre más sobre Alena Saris <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="photo-instructor-box">
                <img src="" alt="">
            </div>
        </div>
    </div>
{/if}

{if $c % 2 != 0}

<div class=" row mb-5 shadow box-info-instructor">
        <div class="col-4">
            <div class="photo-instructor-box">
                <img src="" alt="">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h3>{$instructor->nombre}</h3>
                </div>
                <div class="col-6 text-end">
                    Dr. en Hospital Lorem Ipsum
                </div>
                <div class="col-12">
                    <p style="font-weight: bold;">+ 10 años de experiencia en el sector de la salud</p>
                </div>
                <div class="col-12 mb-4">
                    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
                </div>
                <div class="col-12">
                    <a href="/instructor/?id={$instructor->id}"><button type="button">Descubre más sobre Alena Saris <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>


{/if}


{$c = $c + 1}

{/foreach}



