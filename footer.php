<?php 
        
        $home = get_template_directory_uri();
        wp_footer(); 
        
        ?>

<footer>
    <div class="container">
        <div class="row d-flex align-items-end justify-content-end">
            <div class="col-4 col-md-3 col-lg-4">
                <img src="<?php echo $home ?>/assets/img/logo-cbe-smart-white.svg" alt="">
            </div>
        </div>
    </div>
</footer>



<!-- Modal -->
<div class="modal fade" id="cbe-contato" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

<div class="modal-dialog" role="document">
    <img src="<?php echo  $home ?>/assets/img/img-contato.png" alt="" class="img-contato">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Contato</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="c-blue">Deixe sua mensagem para nós, seja para dúvidas ou
                mesmo pedir um orçamento!</h2>
                <form action=" " class="pb-2 pt-3">
                    <div class="form-group">
                        <input type="text" name="" id="name" class="form-control" placeholder="Nome"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="email" class="form-control" placeholder="E-mail"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="telefone" class="form-control" placeholder="Telefone"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="cpfcnpj" class="form-control" placeholder="CPF/CNPJ"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="" id="mensagem" class="form-control" placeholder="Mensagem"
                            aria-describedby="helpId"> Mensagem</textarea>
                    </div>
                    <div class="form-group mb-0 pt-3">
                        <button type="submit" class="btn-default bgc-green mx-auto d-block">Enviar</button>
                    </div>
                </form>
        </div>

    </div>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="<?php echo  $home ?>/assets/js/main.js"></script>


</body>

</html>