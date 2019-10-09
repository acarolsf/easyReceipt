<section class="section-home contact-home" id="contact">
    <div class="container">
        <header class="section-home__header">
            <h2 class="section-home__header-title t-green">Vem pra Caicó?</h2>
        </header>
        <div class="section-home__content">
            <div class="contact-home__content">
                <form action="<?php echo home_url('/'); ?>" class="form form-contact row"
                      data-chourico-ajaxform="contato">
                    <div class="form-group col-sm-4">
                        <label for="fullname" class="label-control">Seu nome</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" required>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="email" class="label-control">Seu e-mail</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="phone" class="label-control">Seu telefone</label>
                        <input type="tel" class="form-control" name="phone" id="phone" data-chourico-mask="phone" required>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="phone" class="label-control">Sua mensagem</label>
                        <textarea name="message" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-xs-12 form-footer">
                        <input type="submit" class="btn btn--green btn--round" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>