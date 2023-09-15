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
            'picture' => get_template_directory_uri() . '/assets/img/2023/ada-mota-foto-congresso.png',
            'name' => 'Ada Mota',
            'position' => 'Sócia e presidente do Grupo ADCOS',
            'linkedin' => 'https://www.linkedin.com/in/ada-mota-12688415/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-AleliseLara.png',
            'name' => 'Anelise Lara',
            'position' => 'Conselheira independente da TotalEnergies',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/alexandre-di-miceli-foto-congresso.png',
            'name' => 'Alexandre Di Miceli',
            'position' => 'Sócio fundador da Virtuous Company',
            'linkedin' => 'https://www.linkedin.com/in/alexandre-di-miceli-85781/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/alexandre-silva-foto-congresso.png',
            'name' => 'Alexandre Silva',
            'position' => 'Presidente do conselho de administração (PCA) da EMBRAER',
            'linkedin' => 'https://www.linkedin.com/in/alexandre-silva-1a12211b2/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/amaury-olsen-foto-congresso.png',
            'name' => 'Amaury Olsen',
            'position' => 'Chairman da Zilor',
            'linkedin' => 'https://linkedin.com/in/amaury-olsen-003b4a43'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/ana-karina-bortoni-foto-congresso.png',
            'name' => 'Ana Karina Bortoni',
            'position' => 'Presidente do conselho da 2W Ecobank e presidente do conselho da Biolab Farmacêutica',
            'linkedin' => 'http://linkedin.com/in/anakarinadias'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/andreza-rocha-foto-congresso.png',
            'name' => 'Andreza Rocha',
            'position' => 'Fundadora e diretora executiva AfrOya Tech Hub',
            'linkedin' => 'http://www.linkedin.com/in/andrezarocha'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-BrunellaIsper.png',
            'name' => 'Brunella Isper J. Gomide',
            'position' => 'Diretora de Investimentos da Abrdn',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-CamiloMarcantonio.png',
            'name' => 'Camilo Marcantonio',
            'position' => 'sócio fundador e gestor da Charles River Capital',
            'linkedin' => 'https://www.linkedin.com/in/camilomarcantonio/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/cezar-taurion-foto-congresso.png',
            'name' => 'Cezar Taurion',
            'position' => 'Chief Strategy Officer (CSO) da Redcore',
            'linkedin' => 'https://www.linkedin.com/in/ctaurion/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/cristiana-pereira-foto-congresso.png',
            'name' => 'Cristiana Pereira',
            'position' => 'Conselheira e sócia da Ace Governance',
            'linkedin' => 'https://www.linkedin.com/in/cristiana-pereira-2019b'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/cristine.png',
            'name' => 'Cristine Grings Nogueira',
            'position' => 'CEO na Piccadilly Company',
            'linkedin' => 'https://br.linkedin.com/in/cristine-grings-nogueira-005a93170'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/cristine.png',
            'name' => 'Daniel Alves Ferreira',
            'position' => 'Sócio da Alves Ferreira e Mesquita Sociedade de Advogados',
            'linkedin' => 'https://www.linkedin.com/in/daniel-alves-ferreira-78543217/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-DanielAlves.png',
            'name' => 'Daniel Alves Ferreira',
            'position' => 'Sócio da Alves Ferreira e Mesquita Sociedade de Advogados',
            'linkedin' => 'https://www.linkedin.com/in/daniel-alves-ferreira-78543217/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-DanielIzzo.png',
            'name' => 'Daniel Izzo',
            'position' => 'CEO da Vox Capital',
            'linkedin' => 'https://www.linkedin.com/in/danielizzo/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-DenisePavarina.png',
            'name' => 'Denise Pavarina',
            'position' => 'Conselheira do Banco Bradesco S.A.',
            'linkedin' => 'https://www.linkedin.com/in/denise-pavarina-983ab1212/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/edgard.png',
            'name' => 'Edgard Gouveia Júnior',
            'position' => 'Presidente da Epic Journey e fundador da Livelab',
            'linkedin' => 'https://www.linkedin.com/in/edgardgouveiajr/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/eduardo-ibrahim-foto-congresso.png',
            'name' => 'Eduardo Ibrahim',
            'position' => 'Especialista em IA e economia da Singularity University e CEO da Exonomics',
            'linkedin' => 'https://www.linkedin.com/in/eduibrahim/'
        ],
        // [
        //     'picture' => get_template_directory_uri() . '/assets/img/2023/ed-hess-foto-congresso.png',
        //     'name' => 'Edward D. Hess',
        //     'position' => 'Professor emérito de administração de empresas, Darden School of Business, Universidade da Virgínia',
        //     'linkedin' => 'https://linkedin.com/in/edward-hess-41638b16'
        // ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/elisa-leonel-foto-congresso.png',
            'name' => 'Elisa Leonel',
            'position' => 'Secretária de Coordenação e Governança das Empresas Estatais',
            'linkedin' => 'https://www.linkedin.com/in/elisa-leonel-4b9aab98/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/emily-well-foto-congresso.png',
            'name' => 'Emily Ewell',
            'position' => 'CEO & co-fundadora da Pantys',
            'linkedin' => 'https://www.linkedin.com/in/emilyewell/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/estevan.png',
            'name' => 'Estevan Sartoreli',
            'position' => 'Cofundador e Co-CEO na Dengo Chocolates',
            'linkedin' => 'https://br.linkedin.com/in/estevansartoreli'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/fernando-bonfim-foto-congresso.png',
            'name' => 'Fernando Bonfim',
            'position' => 'Produtor de cacau da Bahia',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/fernando-mode-foto-congresso.png',
            'name' => 'Fernando Modé',
            'position' => 'CEO do Grupo Boticário',
            'linkedin' => 'https://www.linkedin.com/in/fernando-mode/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/flavia-mouta-foto-congresso.png',
            'name' => 'Flávia Mouta',
            'position' => 'Diretora de Emissores, B3',
            'linkedin' => 'https://www.linkedin.com/in/flavia-mouta-2a1b31122/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-FernandoWagner.png',
            'name' => 'Fernando Wagner da Silva',
            'position' => 'Sócio e Head de Venture Capital na Crescera Capital',
            'linkedin' => 'https://www.linkedin.com/in/fernandowagner/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/gabriela-baumgart-foto-congresso.png',
            'name' => 'Gabriela Baumgart',
            'position' => 'Conselheira de administração do Grupo Baumgart; presidente do conselho do IBGC',
            'linkedin' => 'http://www.linkedin.com/in/gabrielabaumgart/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/george-dallas-foto-congresso.png',
            'name' => 'George Dallas',
            'position' => 'Head of Content, European Corporate Governance Institute',
            'linkedin' => 'https://www.linkedin.com/in/george-dallas-6b36851/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/geraldo-enck-foto-congresso.png',
            'name' => 'Geraldo E. Enck',
            'position' => 'Conselheiro da Évora S.A.',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/giovana-meneghel-foto-congresso.png',
            'name' => 'Giovanna Meneghel',
            'position' => 'CEO e co-fundadora da Nude',
            'linkedin' => 'https://www.linkedin.com/in/giovanna-meneghel-14896525/ '
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/glaucy-bocci-foto-congresso.png',
            'name' => 'Glaucy Bocci',
            'position' => 'Senior Client Partner & Board Services COE Member da Korn Ferry',
            'linkedin' => 'https://www.linkedin.com/in/glaucybocci/'
        ],
        // [
        //     'picture' => get_template_directory_uri() . '/assets/img/2023/guilherme-fernandes-foto-congresso.png',
        //     'name' => 'Guilherme Fernandes',
        //     'position' => 'Founder & CTO do Meu Chapa',
        //     'linkedin' => 'https://www.linkedin.com/in/guilhermederesendefernandes/'
        // ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/guillaume-legare-foto-congresso.png',
            'name' => 'Guillaume Légaré',
            'position' => 'Head, South America, Toronto Stock Exchange & TSX Venture Exchange',
            'linkedin' => 'https://www.linkedin.com/in/guillaume-l%C3%A9gar%C3%A9-73b16914/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/ingrid-barth-foto-congresso.png',
            'name' => 'Ingrid Barth',
            'position' => 'COO do Linker',
            'linkedin' => 'https://www.linkedin.com/in/ingridbarth/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/joana-setzer-foto-congresso.png',
            'name' => 'Joana Setzer',
            'position' => 'Professora e pesquisadora no Grantham Research Institute on Climate Change and the Environment, LSE',
            'linkedin' => 'https://www.linkedin.com/in/joana-setzer-16418910/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/joao-biarari-foto-congresso.png',
            'name' => 'João Biarari',
            'position' => 'Founder & CEO do Meu Chapa',
            'linkedin' => 'https://www.linkedin.com/in/joaobiarari/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-JoaoKohn.png',
            'name' => 'João Kohn',
            'position' => 'Diretor geral Betterfly Brasil',
            'linkedin' => 'https://www.linkedin.com/in/joaokohn/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/joaquim-rubens-foto-congresso.png',
            'name' => 'Joaquim Rubens',
            'position' => 'Professor e consultor na Fundação Getulio Vargas/EBAPE',
            'linkedin' => 'https://linkedin.com/in/joaquim-rubens-fontes-filho-38662b216/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/jose-pugas-foto-congresso.png',
            'name' => 'José Pugas',
            'position' => 'Sócio e head de Investimentos Sustentáveis, JGP',
            'linkedin' => 'https://www.linkedin.com/in/jos%C3%A9-pugas-2ab41425/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/juliana-custodio-foto-congresso.png',
            'name' => 'Juliana Custódio',
            'position' => 'Gerente geral de dados na PagBank',

            'linkedin' => 'https://www.linkedin.com/in/julianaacustodio/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/juliana.png',
            'name' => 'Juliana Rozenbaum',
            'position' => 'Conselheira na Lojas Renner, Dexco, EDP Brasil, Eurofarma e Cogna Educação',
            'linkedin' => 'https://www.linkedin.com/in/juliana-rozenbaum-031644a',

        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/lais-xavier-foto-congresso.png',
            'name' => 'Laís Xavier',
            'position' => 'CTO do Muda meu Mundo',
            'linkedin' => 'https://www.linkedin.com/in/laisx'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/livia-brando-foto-congresso.png',
            'name' => 'Lívia Brando',
            'position' => 'Sócia-diretora de Venture Capital, Vox Capital',
            'linkedin' => 'https://www.linkedin.com/in/liviabrando/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/lucas-mota-soares-foto-congresso.png',
            'name' => 'Lucas Mota Soares',
            'position' => 'Sócio diretor do Grupo ADCOS',
            'linkedin' => 'https://www.linkedin.com/in/lucas-mota-soares-14091542/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/luciana-dias-foto-congresso.png',
            'name' => 'Luciana Dias',
            'position' => 'Professora da FGV-Direito e sócia do L|Dias Advogados',
            'linkedin' => 'https://www.linkedin.com/in/luciana-dias-54954b156/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/luiz-zillo-neto-foto-congresso.png',
            'name' => 'Luiz Zillo Neto',
            'position' => 'Conselheiro da Zilor',
            'linkedin' => 'https://www.linkedin.com/in/luizzillo/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/marcelo-favieiro-foto-congresso.png',
            'name' => 'Marcelo Favieiro',
            'position' => 'Presidente do conselho de administração (PCA) da Piccadilly @ Co.',
            'linkedin' => 'https://www.linkedin.com/in/marcelo-favieiro-25915517/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/maria-eduarda-camargo-foto-congresso.png',
            'name' => 'Maria Eduarda Camargo',
            'position' => 'COO, CFO e co-fundadora da Pantys',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-MarianaBarbosa.png',
            'name' => 'Mariana Barbosa',
            'position' => 'Colunista do jornal O Globo',
            'linkedin' => 'https://www.linkedin.com/in/marianaccbarbosa/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-MauroRodriguesdaCunha.png',
            'name' => 'Mauro Rodrigues da Cunha',
            'position' => 'Membro do conselho de administração da Embraer, Klabin, AES e Hypera Pharma; ex-presidente da Amec e do conselho de administração do IBGC',
            'linkedin' => 'https://www.linkedin.com/in/mauro-rodrigues-da-cunha-nacd-dc-1114b28/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/otavio-yazbek-foto-congresso.png',
            'name' => 'Otávio Yazbek',
            'position' => 'Sócio do Yazbek Advogados',
            'linkedin' => 'https://br.linkedin.com/in/otavio-yazbek-398b4656'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/pedro-rudge-foto-congresso.png',
            'name' => 'Pedro Rudge',
            'position' => 'Sócio fundador da Leblon Equities',
            'linkedin' => 'https://www.linkedin.com/in/pedro-rudge-45b6202/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/priscilla-veras-foto-congresso.png',
            'name' => 'Priscilla Veras',
            'position' => 'CEO & founder Muda meu Mundo',
            'linkedin' => 'https://www.linkedin.com/in/priscilla-veras-50a8ba120'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/r-edward-freeman-foto-congresso.png',
            'name' => 'R. Edward Freeman',
            'position' => 'Professor emérito de administração de empresas, Darden School of Business, Universidade de Virgínia',
            'linkedin' => 'https://linkedin.com/in/r-edward-freeman-98b8897'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/ricardo.png',
            'name' => 'Ricardo Young',
            'position' => 'Empresário, consultor de sustentabilidade e sócio-diretor da CT&I Brasil e da Byocoin',
            'linkedin' => 'https://br.linkedin.com/in/ricardo-young-22857911'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/roberto-waack-foto-congresso.png',
            'name' => 'Roberto Waack',
            'position' => 'Presidente do conselho do Instituto Arapyau',
            'linkedin' => ''
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/Foto-SandraBoccia.png',
            'name' => 'Sandra Boccia',
            'position' => 'Diretora de Editorial de Marcas e Projetos Especiais da Editora Globo',
            'linkedin' => 'https://www.linkedin.com/in/sandra-boccia-44595876/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/sandro-magaldi-foto-congresso.png',
            'name' => 'Sandro Magaldi',
            'position' => 'Co-autor do bestseller "Gestão do Amanhã" e outras 8 obras de negócios',
            'linkedin' => 'https://www.linkedin.com/in/sandromagaldi/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/tania-cosentino-foto-congresso.png',
            'name' => 'Tânia Cosentino',
            'position' => 'Presidente da Microsoft Brasil',
            'linkedin' => 'https://www.linkedin.com/in/tania-cosentino-18bb236/'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/vicky.png',
            'name' => 'Vicky Bloch',
            'position' => 'Sócia-diretora na Vicky Bloch Associados',
            'linkedin' => 'https://br.linkedin.com/in/vicky-bloch-2a66b44/pt'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/victor-mota-soares-foto-congresso.png',
            'name' => 'Victor Mota Soares',
            'position' => 'Diretor de Tecnologia do Grupo ADCOS',
            'linkedin' => 'https://www.linkedin.com/in/vmsoares'
        ],
        [
            'picture' => get_template_directory_uri() . '/assets/img/2023/william-ling-foto-congresso.png',
            'name' => 'William Ling',
            'position' => 'Presidente do conselho de administração (PCA) da Évora S.A.',
            'linkedin' => 'https://www.linkedin.com/in/william-ling-23'
        ],
    ];
}

function ibgc_build_speaker($picture, $name, $position, $linkedin)
{

    $invisible = !empty($linkedin) ?: "invisible";

    return <<<HTML
        <div class="palestrante">
            <img src="{$picture}" alt="{$name}" />
            <div class="info">
                <h3>{$name}</h3>
                <p>{$position}</p>
            </div>
            <a class="linkedin-button {$invisible}" href="{$linkedin}" target="_blank">
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

function ibgc_schedule(int $dia)
{
    switch ($dia) {
        case 1:
            return [
                [
                    "time" => "09h",
                    "title" => "Credenciamento e welcome coffee",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => false
                ],
                [
                    "time" => "10h",
                    "title" => "Abertura",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => true
                ],
                [
                    "time" => "10h20",
                    "title" => "A definir",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => true
                ],
                [
                    "time" => "10h40",
                    "title" => "Governança pela perspectiva da Teoria dos <em>stakeholders</em>",
                    "topic" => "",
                    "desc" => ["R. Edward Freeman, professor emérito de administração de empresas, Darden School of Business, Universidade de Virgínia"],
                    "presencial" => true,
                    "online" => true
                ],
                [
                    "time" => "11h",
                    "title" => "Integridade como princípio",
                    "topic" => "",
                    "desc" => ["Alexandre Di Miceli, sócio fundador da Virtuous Company"],
                    "presencial" => true,
                    "online" => true
                ],
                [
                    "time" => "11h40h",
                    "title" => "Grupo Boticário: governança de stakeholders e impacto multidimensional",
                    "topic" => "",
                    "desc" => ["Fernando Modé, CEO do Grupo Boticário"],
                    "presencial" => true,
                    "online" => false
                ],
                [
                    "time" => "12h",
                    "title" => "Almoço",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => false
                ],
                [
                    "time" => "13h",
                    "title" => "Masterclasses <em>(A definir)</em>",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => false
                ],
                [
                    "time" => "14h",
                    "title" => "Feira de negócios",
                    "topic" => "",
                    "desc" => [],
                    "presencial" => true,
                    "online" => false
                ],
                [
                    "time" => "14h30",
                    "title" => "Breakout sessions | Desafios contemporâneos das empresas familiares",
                    "topic" => "Piccadilly",
                    "desc" => ["Cristine Grings Nogueira, CEO da Piccadilly Company", "Marcelo Favieiro, presidente do conselho de administração da Piccadilly @ Co."],
                    "presencial" => true,
                    "online" => false
                ],
            ];
    }
}

function ibgc_get_schedule($time, $title, $topic = "", array $desc, $presencial = false, $online = false)
{

    $content = "";
    $content .= "
    <div class='row schedule-item'>
        <div class='col-12 col-md-2 mt-1'>" . $time . "</div>
        <div class='col-12 col-md-10'>
            <p class='title'>" . $title . "</p>";

    if (sizeof($desc) > 0 && empty($topic)) {
        foreach ($desc as $v) {
            $content .= " <p class='desc'> - " . $v . "</p>";
        }
    }

    if ($presencial === true) {
        $content .= "<p class='flag presencial'>Presencial</p>";
    }

    if ($online === true) {
        $content .= "<p class='flag online'>On-line</p>";
    }

    if (!empty($topic)) {
        $content .= "<h3 class='topic mt-2'>" . $topic . "</h3>";
    }

    if (sizeof($desc) > 0 && !empty($topic)) {
        $content .= "<div class='topic-container py-2'>";
        foreach ($desc as $v) {
            $content .= "<p class='desc'> - " . $v . "</p>";
        }
        $content .= "</div>";
    }

    $content .= "
        </div>
    </div>";

    return $content;
}
