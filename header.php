<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Cronapp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=5,9,10,11;Edge">
    <?php wp_head(); ?>
</head>
<body>
<!-- inicio menus sup -->
<div class="box-header-menu display-flex">
    <span class="icon-menu2"></span>
    <div class="menu-drop-mobile display-flex">
        <div class="box-link-menu-header-mobile display-flex">
            <p class="text-link-header-mobile plataformaMobile"><?php $string = __('Plataforma'); echo $string; ?></p>
        </div>

        <div class="box-link-menu-header-mobile display-flex">
            <p class="text-link-header-mobile comunidadeMobile"><?php $string = __('Comunidade'); echo $string; ?></p>
        </div>


        <div class="box-links-menu-mobile display-flex-column">
            <div class="box-link plataforma-mobile display-flex-column">
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/cronapp/"><h1 class="title-menu-drop"><?php $string = __('Cronapp'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Saiba mais sobre a ferramenta e todos os benefícios'); echo $string; ?></p>
                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/planos-e-precos/"><h1 class="title-menu-drop"><?php $string = __('Planos e Preços'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Escolha o plano que melhor atende suas necessidades'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/fabrica-de-softwares/"><h1 class="title-menu-drop"><?php $string = __('Fábrica de Software'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Entre em contato com nossa equipe para tirar dúvidas ou contratar serviços'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/fale-conosco/"><h1 class="title-menu-drop"><?php $string = __('Fale Conosco'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Entre em contato com nossa equipe para tirar dúvidas ou contratar serviços'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="https://acesso.cronapp.io/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('IDE'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Acesse sua conta e gerencie seus projetos'); echo $string; ?></p>

                </div>
            </div>
            <div class="box-link comunidade-mobile display-flex-column">
                <div class="box-text-menu display-flex-column">
                    <a href="https://docs.cronapp.io/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('Documentação'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Acesse manuais, guias técnicos tutoriais e outros recursos exclusivos'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/eventos/"><h1 class="title-menu-drop"><?php $string = __('Eventos e Webinars'); echo $string; ?></h1>
                    <p class="text-menu-drop"><?php $string = __('Veja as datas e fique por dentro dos nossos eventos online'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/tutoriais-e-dicas/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('Tutoriais e dicas'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Treinamentos para usuários Premium que vão de conceitos fundamentais a funcionalidades complexas'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/blog/"><h1 class="title-menu-drop"><?php $string = __('Blog'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Saiba mais sobre tecnologias e as possibilidades de desenvolvimentos no CronApp'); echo $string; ?></p>

                </div>
                <div class="box-text-menu display-flex-column">
                    <a href="/pt-br/freelancer/"><h1 class="title-menu-drop"><?php $string = __('Seja um Freelancer'); echo $string; ?></h1></a>
                    <p class="text-menu-drop"><?php $string = __('Desenvolva aplicações na nuvem'); echo $string; ?></p>

                </div>
            </div>
        </div>
    </div>
    <div class="box-logo-links display-flex"><a class="link-cron" href="/pt-br/cronapp/">
        <img class="logo-header" src="/wp-content/themes/Cronapp/img/logo-hor-white-color.png" />
    </a>
    <div class="box-link-menu-header display-flex">
        <p class="text-link-header plataforma"><?php $string = __('Plataforma'); echo $string; ?></p>
        <span class="icon-chevron-down"></span>
    </div>
    <div class="box-link-menu-header display-flex">
        <p class="text-link-header comunidade"><?php $string = __('Comunidade'); echo $string; ?></p>
        <span class="icon-chevron-down"></span>
    </div>
</div>
<a class="btn-header" href="/pt-br/cronapp/"><?php $string = __('Experimente Grátis'); echo $string; ?></a>

</div>

<!-- inicio menu sup mobile -->

<div class="menu-drop-dow mPlataforma display-flex">
    <div class="box-menu-drop display-flex">
        <div class="box-text-menu display-flex-column">
            <a href="/pt-br/cronapp/"><h1 class="title-menu-drop"><?php $string = __('Cronapp'); echo $string; ?></h1></a>
            <p class="text-menu-drop"><?php $string = __('Saiba mais sobre a ferramenta e todos os benefícios'); echo $string; ?></p>

        </div>
        <div class="box-text-menu display-flex-column">
            <a href="/pt-br/planos-e-precos/"><h1 class="title-menu-drop"><?php $string = __('Planos e Preços'); echo $string; ?></h1></a>
            <p class="text-menu-drop"><?php $string = __('Escolha o plano que melhor atende suas necessidades'); echo $string; ?></p>

        </div>
        <div class="box-text-menu display-flex-column">
            <a href="/pt-br/fabrica-de-softwares/"><h1 class="title-menu-drop"><?php $string = __('Fábrica de Software'); echo $string; ?></h1></a>
            <p class="text-menu-drop"><?php $string = __('Entre em contato com nossa equipe para tirar dúvidas ou contratar serviços'); echo $string; ?></p>

        </div>
        <div class="box-text-menu display-flex-column">
            <a href="/pt-br/fale-conosco/"><h1 class="title-menu-drop"><?php $string = __('Fale Conosco'); echo $string; ?></h1></a>
            <p class="text-menu-drop"><?php $string = __('Entre em contato com nossa equipe para tirar dúvidas ou contratar serviços'); echo $string; ?></p>

        </div>
        <div class="box-text-menu display-flex-column">
            <a href="https://acesso.cronapp.io/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('IDE'); echo $string; ?></h1></a>
            <p class="text-menu-drop"><?php $string = __('Acesse sua conta e gerencie seus projetos'); echo $string; ?></p>

        </div>
        <div class="box-newsletter-drop display-flex">
            <h1 class="title-links-drop-newsletter"><?php $string = __('Newsletter'); echo $string; ?></h1>
            <div class="box-email-drop-newsletter display-flex"><input class="ipt-header-newsletter-drop" type="text" placeholder="Receba novidades em seu email" />
                <a class="btn-header-ipt-newsletter-drop"><?php $string = __('Assine já'); echo $string; ?></a></div>
            </div>
        </div>
    </div>
    <div class="menu-drop-dow mComunidade display-flex">
        <div class="box-menu-drop display-flex">
            <div class="box-text-menu display-flex-column">
                <a href="https://docs.cronapp.io/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('Documentação'); echo $string; ?></h1></a>
                <p class="text-menu-drop"><?php $string = __('Acesse manuais, guias técnicos tutoriais e outros recursos exclusivos'); echo $string; ?></p>

            </div>
            <div class="box-text-menu display-flex-column">
                <h1 class="title-menu-drop"><?php $string = __('Eventos e Webinars'); echo $string; ?></h1>
                <p class="text-menu-drop"><?php $string = __('Veja as datas e fique por dentro dos nossos eventos online'); echo $string; ?></p>

            </div>
            <div class="box-text-menu display-flex-column">
                <a href="/pt-br/tutoriais-e-dicas/" target="_blank"><h1 class="title-menu-drop"><?php $string = __('Tutoriais e dicas'); echo $string; ?></h1></a>
                <p class="text-menu-drop"><?php $string = __('Treinamentos para usuários Premium que vão de conceitos fundamentais a funcionalidades complexas'); echo $string; ?></p>

            </div>
            <div class="box-text-menu display-flex-column">
                <a href="/pt-br/blog/"><h1 class="title-menu-drop"><?php $string = __('Blog'); echo $string; ?></h1></a>
                <p class="text-menu-drop"><?php $string = __('Saiba mais sobre tecnologias e as possibilidades de desenvolvimentos no CronApp'); echo $string; ?></p>

            </div>
            <div class="box-text-menu display-flex-column">
                <a href="/pt-br/freelancer/"><h1 class="title-menu-drop"><?php $string = __('Seja um Freelancer'); echo $string; ?></h1></a>
                <p class="text-menu-drop"><?php $string = __('Desenvolva aplicações na nuvem'); echo $string; ?></p>

            </div>
            <div class="box-newsletter-drop display-flex">
                <h1 class="title-links-drop-newsletter"><?php $string = __('Newsletter'); echo $string; ?></h1>
                <div class="box-email-drop-newsletter display-flex"><input class="ipt-header-newsletter-drop" type="text" placeholder="Receba novidades em seu email" />
                    <a class="btn-header-ipt-newsletter-drop"><?php $string = __('Assine já'); echo $string; ?></a></div>
                </div>
            </div>
        </div>

        <div class="background-mobile">


        </div>
<!-- fim menus sup -->
