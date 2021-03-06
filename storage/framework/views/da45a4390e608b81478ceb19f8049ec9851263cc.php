<?php $__env->startSection('content'); ?>

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Entre em Contato</h1>
                            <h2>Dúvidas, críticas, sugestões ou apenas para tomar um cafezinho? É só entrar em contato!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Informações de Contato</h3>
                        <ul>
                            <li class="address"><?php echo e(env('CLIENT_DATA_ADDRESS')); ?>, <br> <?php echo e(env('CLIENT_DATA_COMPLEMENT')); ?>, <br> <?php echo e(env('CLIENT_DATA_CITY')); ?>/<?php echo e(env('CLIENT_DATA_STATE')); ?></li>
                            <li class="phone"><a href="tel://1234567920"><?php echo e(env('CLIENT_DATA_TELEPHONE')); ?></a></li>
                            <li class="email"><a href="mailto:<?php echo e(env('MAIL_FROM_ADDRESS')); ?>"><?php echo e(env('MAIL_FROM_ADDRESS')); ?></a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Me manda um e-mail</h3>
                    <form action="#">

                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="first_name" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" name="last_name" class="form-control" placeholder="Sobrenome" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar E-mail" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <?php echo $__env->make('front.includes.optin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>