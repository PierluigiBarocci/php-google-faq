<?php
// Riscrivere questa pagina del sito google: https://policies.google.com/faq
// Ci sono diverse domande con relative risposte: la cosa a cui vorrei prestaste più attenzione è la gestione del “database” di faq e la visualizzazione di queste domande e risposte utilizzando PHP.
// Una volta che la lista di faq è popolata in maniera dinamica (con php), aggiungete l'header e il footer e stilate tutto con sass :laptop_parrot:
// Nome repo: php-google-faq


//creo un array che contenga le coppie domande risposte, me la cavo con l'accoppiata key=>value
$array = [
    "Comment appliquez-vous la récente décision de la Cour de justice de l'Union européenne (CJUE) concernant le droit à l'oubli ?" => "<p>Le récent <span>arrêt de la Cour de justice de l'Union européenne</span> a de profondes répercussions pour les moteurs de recherche en Europe. La Cour a estimé que certains utilisateurs ont le droit de demander aux moteurs de recherche tels que Google de supprimer les résultats de recherche qui incluent leur nom. Pour que cette décision soit applicable, les résultats affichés doivent être inadéquats, pas ou plus pertinents ou excessifs.</p>

    <p>Depuis la publication de cette décision le 13 mai 2014, nous avons mis tout en œuvre pour nous y conformer. Il s'agit d'un processus complexe, car nous devons évaluer chaque demande individuelle et trouver un juste équilibre entre les droits d'un individu à contrôler ses données personnelles et le droit du public à accéder à ces informations et à les diffuser.</p>

    <p>Si vous souhaitez soumettre une demande de suppression, veuillez remplir ce <span>formulaire en ligne</span>. Vous recevrez une réponse automatique confirmant que nous avons reçu votre demande. Celle-ci sera ensuite examinée. Notez que cette procédure peut prendre un certain temps en raison du volume de demandes du même type que nous recevons. Lors de l'évaluation de votre demande, nous vérifierons si les résultats comprennent des informations obsolètes sur votre vie privée. Nous chercherons également à déterminer si la conservation de ces informations dans nos résultats de recherche présente un intérêt public, par exemple, si elles concernent des escroqueries financières, une négligence professionnelle, des condamnations pénales ou votre conduite publique en tant que fonctionnaire (élu ou non élu). Ces cas sont complexes, d'autant que, en tant qu'entreprise privée, nous ne sommes pas les mieux placés pour statuer. Si vous n'êtes pas d'accord avec notre décision, vous pouvez contacter votre autorité locale de protection des données.</p>

    <p>Nous sommes impatients de collaborer étroitement avec les autorités de protection des données et d'autres organismes compétents en la matière au cours des prochains mois afin de perfectionner notre approche. La décision de la CJUE implique un changement de taille pour les moteurs de recherche. Bien que son impact nous préoccupe, nous pensons également qu'il est important de respecter l'arrêt de la Cour et mettons tout en œuvre pour élaborer une procédure conforme à la loi.</p>

    <p>Lorsque vous recherchez un nom, une notification peut indiquer que les résultats sont susceptibles d'avoir été modifiés conformément à la législation européenne en matière de protection des données. Nous affichons cette notification en Europe quand un utilisateur recherche des noms, et non simplement des pages concernées par une suppression.</p>",

    "Quelles mesures Google met-elle en œuvre pour protéger ma vie privée et mes informations ?" => "<p>Nous savons que vous accordez une grande importance à la sécurité et à la confidentialité, et c'est également notre cas. C'est la raison pour laquelle Google fait de la protection de vos données et de leur accessibilité quand vous en avez besoin une priorité.</p>

    <p>Nous veillons en permanence à assurer une sécurité maximale, à protéger votre vie privée, et à rendre les produits et services Google encore plus pratiques et plus utiles pour vous. À cette fin, nous consacrons chaque année plusieurs centaines de millions de dollars à la sécurité, et nous faisons appel à des spécialistes de la sécurité des données mondialement reconnus. Nous avons par ailleurs développé des outils de sécurité et de confidentialité simples à utiliser, tels que Google Dashboard, la validation en deux étapes et les paramètres des annonces. Vous conservez ainsi la maîtrise des informations que vous partagez avec Google.</p>

    <p>Pour en savoir plus sur les méthodes qui vous permettent de garantir votre sécurité et celle de vos proches en ligne, consultez le <span>Centre de sécurité Google</span>.</p>

    <p><span>En savoir plus</span> sur la manière dont nous assurons la confidentialité et la sécurité de vos informations personnelles, et dont nous vous en donnons le contrôle.</p>",
    "Comment puis-je supprimer mes données personnelles des résultats de recherche Google ?" => "<p>Les résultats de recherche Google reflètent le contenu accessible à tous sur le Web. Sachez que les moteurs de recherche n'ont pas la faculté d'effacer directement le contenu des sites Web. De ce fait, supprimer des résultats de la recherche Google n'entraînera pas la suppression des contenus correspondants. Pour que des données n'apparaissent plus sur le Web, vous devez <span>contacter le webmaster</span> du site publiant les informations en question. En outre, si, au titre de la législation européenne en matière de protection des données, vous souhaitez demander la suppression de certaines informations vous concernant qui s'affichent dans les résultats de recherche Google, veuillez <span>cliquer ici</span>. Une fois qu'il aura été supprimé du site et que Google aura pris en compte la mise à jour, le contenu incriminé ne figurera plus dans les résultats de recherche Google. En cas de demande urgente de suppression de contenu, vous pouvez également <span>consulter notre Centre d'aide pour plus d'informations</span>.</p>",
    "Mes requêtes de recherche sont-elles transmises aux sites Web lorsque je clique sur des résultats de recherche Google ?" => "<p>Dans certains cas, oui. Lorsque vous cliquez sur un résultat de recherche Google, votre navigateur Web peut également envoyer l'<span>URL de provenance</span>, c'est-à-dire l'adresse Internet (ou URL) de la page de résultats de recherche, à la page de destination. L'URL de la page de résultats de recherche peut parfois contenir votre requête de recherche. Si vous avez recours à la recherche SSL (la fonctionnalité de recherche chiffrée de Google), dans la plupart des cas, vos termes de recherche ne figureront pas dans l'URL de provenance. Il existe toutefois certaines exceptions, notamment si vous utilisez des navigateurs moins connus. Des informations supplémentaires sur la recherche SSL sont disponibles ici. Les requêtes de recherche ou les informations contenues dans l'URL de provenance peuvent être disponibles via Google Analytics ou une interface de programmation d'application (API). En outre, les annonceurs peuvent recevoir des informations concernant les mots clés exacts ayant entraîné un clic sur une annonce.</p>"
];

// foreach ($array as $key => $value) {
//     echo '<br>';
//     echo $key;
//     echo '<br>';
//     echo $value;
//     echo '<br>';
// };

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <title>Google FAQ</title>
    </head>
    <body>
        <header>
            <div class="header top">
                <a href="#">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo">
                </a>
                <a href="#">Règles de confidentialité et conditions d’utilisation</a>
            </div>
            <div class="header bottom">
                <div class="left">
                    <ul>
                        <li>
                            <a href="#">Présentation</a>
                        </li>
                        <li>
                            <a href="#">Règles de confidentialité</a>
                        </li>
                        <li>
                            <a href="#">Conditions d’utilisation</a>
                        </li>
                        <li>
                            <a href="#">Technologies</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <a href="#">Compte Google</a>
                </div>
            </div>
        </header>
        <main>
            <?php foreach ($array as $key => $value) {?>
                <div class="quest-answ container">
                    <h2 class="question"><?php echo $key; ?></h2>
                    <div class="answer"><?php echo $value; ?></div>
                </div>
            <?php } ?>
        </main>
        <footer>
            <div class="container">
                <div class="footer-left">
                    <ul>
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">À propos de Google</a>
                        </li>
                        <li>
                            <a href="#">Confidentialité</a>
                        </li>
                        <li>
                            <a href="#">Conditions d'utilisation</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-right">
                    <i class="fas fa-flag"></i>
                    <select id="barra" name="">
                        <option value="">Français</option>
                        <option value="">English</option>
                        <option value="">Italiano</option>
                        <option value="">Español</option>
                        <option value="">Portugais</option>
                        <option value="">Deutch</option>
                    </select>
                </div>
            </div>
        </footer>
    </body>
</html>
