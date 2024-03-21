<section id="contacto" class="contacto">
    <div class="contenido-seccion">
        <h2>CONTACTO</h2>
        <div class="fila">
            <div class="col">
                <form action="{{ route('contactos.store') }}" method="post">
                    @csrf
                    <!-- Formulario -->

                    <input name="nombre" type="text" placeholder="Tú Nombre" />
                    <input name="telefono" type="text" placeholder="Número telefónico" />
                    <input name="email" type="email" placeholder="Dirección de correo" />
                    <input name="tema" type="text" placeholder="Tema" />
                    <textarea name="mensaje" id="" cols="30" rows="5" placeholder="Mensaje"></textarea>
                    <button>
                        Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>

                </form>
            </div>
            <!-- Mapa -->
            <div class="col info">
                <img src="{{ asset('assets/img/ubicacion.jpg') }}" alt="" />
            </div>
        </div>
    </div>
</section>
