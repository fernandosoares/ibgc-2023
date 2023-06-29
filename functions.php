<?php

/**
 * Assets
 */

function ibgc_enqueue_resources()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery.countdown', get_template_directory_uri() . '/assets/vendor/jquery.countdown/dist/jquery.countdown.min.js', ['jquery'], false, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick.min.js', ['bootstrap-js'], false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['slick'], false, true);
}
add_action('wp_enqueue_scripts', 'ibgc_enqueue_resources');

/**
 * Move all JS to footer
 */
add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});


function wps_deregister_styles()
{
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);


function isBeforeEventStart()
{
    $startTime = strtotime('2022-11-09 10:00:00');
    $currentTime = strtotime(date('Y-m-d H:i:s'));

    if ($currentTime > $startTime) {
        return true;
    }

    return false;
}

function ibgc_get_speakers()
{
    return [
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/cristine.png',
            'name' => 'Cristine Grings Nogueira',
            'position' => 'CEO na Picadilly Company',
            'linkedin' => 'https://br.linkedin.com/in/cristine-grings-nogueira-005a93170'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/edgard.png',
            'name' => 'Edgard Gouveia Júnior',
            'position' => 'Presidente da Epic Journey e fundador da Livelab',
            'linkedin' => 'https://www.linkedin.com/in/edgardgouveiajr/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/estevan.png',
            'name' => 'Estevan Sartoreli',
            'position' => 'Cofundador e Co-CEO na Dengo Chocolates',
            'linkedin' => 'https://br.linkedin.com/in/estevansartoreli'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/juliana.png',
            'name' => 'Juliana Rozenbaum',
            'position' => 'Conselheira na Lojas Renner, Dexco, EDP Brasil, Eurofarma e Cogna Educação',
            'linkedin' => 'https://www.linkedin.com/in/juliana-rozenbaum-031644a'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/ricardo.png',
            'name' => 'Ricardo Young',
            'position' => 'Empresário, consultor de sustentabilidade e sócio-diretor da CT&I Brasil e da Byocoin',
            'linkedin' => 'https://br.linkedin.com/in/ricardo-young-22857911'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/vicky.png',
            'name' => 'Vicky Bloch',
            'position' => 'Sócia-diretora na Vichy Bloch Associados',
            'linkedin' => 'https://br.linkedin.com/in/vicky-bloch-2a66b44/pt'
        ],
    ];
}

function ibgc_build_speaker($picture, $name, $position, $linkedin)
{

    return <<<HTML
        <div class="palestrante">
            <img src="{$picture}" alt="{$name}" />
            <div class="info">
                <h3>{$name}</h3>
                <p>{$position}</p>
            </div>
            <a class="linkedin-button" href="{$linkedin}" target="_blank">
                <p>Conectar</p>
            </a>
        </div>
    HTML;
}

function ibgc_get_past_event_videos()
{
    return [
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/01.png",
            "url" => "https://www.youtube.com/watch?v=yACCZtb72MY&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=1&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/02.png",
            "url" => "https://www.youtube.com/watch?v=wxyWrroLs7I&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=2&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/03.png",
            "url" => "https://www.youtube.com/watch?v=TZhVp1TPS6s&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=3&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/04.png",
            "url" => "https://www.youtube.com/watch?v=_ZA_YuuhPzY&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=4&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/05.png",
            "url" => "https://www.youtube.com/watch?v=ZNiHemwjoEk&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=5&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/06.png",
            "url" => "https://www.youtube.com/watch?v=WdkMwppT2tc&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=6&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/07.png",
            "url" => "https://www.youtube.com/watch?v=UvHoyfbF4ZQ&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=7&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/08.png",
            "url" => "https://www.youtube.com/watch?v=avpaq0JkKAs&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=8&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/09.png",
            "url" => "https://www.youtube.com/watch?v=UG5A_SHmH4A&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=9&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/10.png",
            "url" => "https://www.youtube.com/watch?v=ckLQrXFtIeY&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=10&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/11.png",
            "url" => "https://www.youtube.com/watch?v=WddQEn0QVJ0&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=11&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/12.png",
            "url" => "https://www.youtube.com/watch?v=HNQRM-GX0ZY&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=12&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/13.png",
            "url" => "https://www.youtube.com/watch?v=-Zt44MdJbFQ&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=13&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/14.png",
            "url" => "https://www.youtube.com/watch?v=B-skiesjUsA&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=14&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/15.png",
            "url" => "https://www.youtube.com/watch?v=VbLt6ztj1XA&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=15&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/16.png",
            "url" => "https://www.youtube.com/watch?v=JzF-sY_OdsI&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=16&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/17.png",
            "url" => "https://www.youtube.com/watch?v=Caci9Jm_KFY&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=17&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/18.png",
            "url" => "https://www.youtube.com/watch?v=7LIOagiTGRE&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=18&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/19.png",
            "url" => "https://www.youtube.com/watch?v=zr3_NuYg5b0&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=19&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/20.png",
            "url" => "https://www.youtube.com/watch?v=9GzSKikxet4&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=20&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/21.png",
            "url" => "https://www.youtube.com/watch?v=f9w-IgmTMW0&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=21&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/22.png",
            "url" => "https://www.youtube.com/watch?v=3Cm5PCo0zsQ&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=22&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/23.png",
            "url" => "https://www.youtube.com/watch?v=Q_VSO2pHryQ&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=23&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/24.png",
            "url" => "https://www.youtube.com/watch?v=uimD9lXhka4&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=24&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/25.png",
            "url" => "https://www.youtube.com/watch?v=Alp5Z_bSfn4&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=25&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/26.png",
            "url" => "https://www.youtube.com/watch?v=v7yXGyBDaAA&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=26&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/27.png",
            "url" => "https://www.youtube.com/watch?v=waNvJ640gRo&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=27&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/28.png",
            "url" => "https://www.youtube.com/watch?v=3tnT1DdVnRs&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=28&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/29.png",
            "url" => "https://www.youtube.com/watch?v=Jc6ScQi20Gs&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=29&pp=iAQB"
        ],
        [
            "thumb" => get_template_directory_uri() . "/assets/img/2023/yt/30.png",
            "url" => "https://www.youtube.com/watch?v=sZj4oUe5r8A&list=PL7LheNPNr5gdo_NurpS6sUTbHc476mzMw&index=30&pp=iAQB"
        ],
    ];
}
