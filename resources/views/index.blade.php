<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VFF - Voies Ferrées de France</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
        @vite('resources/css/general.css')
        @vite('resources/css/index/index.css')
        @vite('resources/js/index/indexImport.js')
    </head>
    <body>
        <header>
            <div class="header-background">
                <nav>
                    <div class="nav-title">
                        <figure>
                            <img src="{{ Vite::image('vff.png') }}" alt="Logo de VFF">
                        </figure>
                        <h2>Voies Ferrées de France</h2>
                    </div>
                    <ul class="links">
                        <li class="whoarewe">
                            <a href="/whoarewe"><i class="bi bi-people"></i> Notre histoire</a>
                        </li>
                        <li class="maps">
                            <a href="/maps"><i class="bi bi-map"></i> Nos cartes</a>
                        </li>
                        <li class="contribute">
                            <a href="/contribute"><i class="bi bi-geo"></i> Votre contribution</a>
                        </li>
                        <li class="donate">
                            <a href="/donate"><i class="bi bi-balloon-heart"></i> Faites un don</a>
                        </li>
                        <ul class="user">
                            <li class="theme">
                                <button class="theme-change">
                                    <i class="bi bi-sun light-theme-icon fs-5" title="Thème clair"></i>
                                    <i class="bi bi-moon-stars dark-theme-icon fs-5 hidden-button" title="Thème sombre"></i>
                                </button>
                            </li>
                            <li class="lang">
                                <i class="bi bi-translate"></i>
                                <i class="bi bi-chevron-down"></i>
                            </li>
                            <li class="account">
                                <i class="bi bi-person-square"></i>
                                <i class="bi bi-chevron-down"></i>
                            </li>
                        </ul>
                    </ul>
                </nav>
                <div class="header-images">
                    <figure class="left-tgv">
                        <img src="{{ Vite::image('tgv - left.png') }}" alt="Queue du TGV">
                    </figure>
                    <figure>
                        <img src="{{ Vite::image('vff.png') }}" alt="Logo de VFF">
                    </figure>
                    <figure class="right-tgv">
                        <img src="{{ Vite::image('tgv - right.png') }}" alt="Tête du TGV">
                    </figure>
                </div>
                <div class="bottom-container" style="position: relative;">
                    <div class="scroll-button">
                        <span><i class="bi bi-chevron-double-down"></i></span>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section id="whoarewe">
                <div class="vff-title">
                    <img src="{{ Vite::image('vff.png') }}" alt="Logo de VFF">
                    <h1>VFF - À la croisée des rails</h1>
                </div>
                <p>Nous sommes VFF, une plateforme en ligne créée par deux passionnés du rail. Notre mission est de documenter
                    et de partager des informations sur les lignes ferroviaires, qu'elles soient en service ou fermées. Grâce à
                    nos cartes collaboratives basées sur des données d'archives et sur le travail de nombreux collaborateurs,
                    nous pouvons vous proposer l'une des plus grandes base de données concernant le chemin de fer amateur en
                    France. Vous pouvez contribuer, vous aussi, à enrichir cette base de données en complétant les infos des voies
                    ferrées que vous connaissez. De plus, notre API publique permet aux développeurs d'explorer et d'utiliser
                    nos données pour créer des applications innovantes dans le domaine ferroviaire. Rejoignez notre communauté
                    pour explorer le monde fascinant des chemins de fer et partager vos connaissances avec d'autres
                    passionnés.</p>
                <div class="whoarewe-buttons">
                    <a href="/whoarewe"><i class="bi bi-people"></i> Notre histoire</a>
                    <a href="/donate"><i class="bi bi-balloon-heart"></i> Faites un don</a>
                </div>
            </section>
            <section id="maps">
                <div class="maps-background"></div>
                <div class="maps-container">
                    <div class="maps-box">
                        <div>
                            <figure>
                                <img src="{{ Vite::image('vff.png') }}">
                            </figure>
                            <h2>Titre 1</h2>
                            <p>Chez HertzHeberg, les offres web sont géniales. En effet, elles ont un uptime de 100% avec aucun down depuis la création de HertzHeberg. Avec leurs disques SSD, leur panel plesk, leur serveur apache et nginx optimisés, nos offres web ont tout pour plaire !</p>
                        </div>
                    </div>
                    <div class="maps-box">
                        <div>
                            <figure>
                                <img src="{{ Vite::image('vff.png') }}">
                            </figure>
                            <h2>Titre 2</h2>
                            <p>Chez HertzHeberg, les offres web sont géniales. En effet, elles ont un uptime de 100% avec aucun down depuis la création de HertzHeberg. Avec leurs disques SSD, leur panel plesk, leur serveur apache et nginx optimisés, nos offres web ont tout pour plaire !</p>
                        </div>
                    </div>
                    <div class="maps-box">
                        <div>
                            <figure>
                                <img src="{{ Vite::image('vff.png') }}">
                            </figure>
                            <h2>Titre 3</h2>
                            <p>Chez HertzHeberg, les offres web sont géniales. En effet, elles ont un uptime de 100% avec aucun down depuis la création de HertzHeberg. Avec leurs disques SSD, leur panel plesk, leur serveur apache et nginx optimisés, nos offres web ont tout pour plaire !</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
