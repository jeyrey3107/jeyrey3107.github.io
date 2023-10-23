<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Sofia+Sans:wght@500&display=swap" rel="stylesheet">

    <meta charset="UTF-8" />
</head>

<body>
    <div class="bandeau">
        <p class="name">Rémi vaillant
        <p>
        <p><a href="#apropos">A propos</a></p>
        <p><a href="#competences">Mes compétences</a></p>
        <p><a href="#diplome">Diplomes</a></p>
        <p><a href="#projets">Mes projets</a></p>
        <!--<p><a href="#CV">CV</a></p>-->
    </div>
    <div class="accueil">
        <p class="title">VAILLANT Rémi</p>
        <p class="subtitle">Etudiant en informatique</p>
        <p class="subtitle2">Mobile et web</p>
    </div>
    <div class="apropos" id="apropos">
        <img src="usedfiles/Remi.jpg" class="remi" />
        <div style="width: 60%;margin-left:5%;">
            <h1>A propos</h1>
            <p>Je suis un étudiant en 5ème année à l'ENSIM ( Ecole Nationale Supérieur des Ingénieur du Mans) en filière informatique spécialité IPS ( Intéraction Personne-Système ). Je suis actuellement au Canada dans le cadre d'un semestre à l'étranger que j'effectue à l'UQAC ( Université du Quebec A Chicoutimi ) pour le trimestre d'automne qui dure de septembre à décembre. Je cherche à travailler dans les domaines du mobile que ce soit de la création d'application classiques ou en réalité augmentée ou dans le web.
            </p>
        </div>
    </div>
    <div class="competences" id="competences">
        <h1>Compétences</h1>
        <h2>HardSkills</h2>
        <div class="souscom">
            <div >
                <h3>Web : </h3>
                <img src="usedfiles/logo web.png" alt="">
                <p>HTML</p><p>CSS</p><p>PHP</p><p>Frameworks(DJango,Angular,Spring)</p>
            </div>
            <div style="margin:0.8%;">
                <h3>Mobile :</h3>
                <img src="usedfiles/logo mobile.png" alt="">
                <p>Kotlin</p><p>AndroidStudio</p><p>Unity(Réalitée augementée)</p>
            </div>
            <div style="margin:1%;">
                <h3>UI/UX :</h3>
                <img src="usedfiles/figmalogo.png" alt="">
                <p>Figma</p>
            </div>
            <div style="margin:0.8%;">
                <h3>Autre :</h3>
                <img src="usedfiles/autre.png" alt="">
                <p>Java</p><p>Python</p><p>C#(Unity)</p><p>C++(UnrealEngine)</p>
            </div>
        </div>
        <h2>SoftSkills</h2>
        <div class="souscom">
            <div class="espace">
                <h3>Communication :</h3>
                <img src="usedfiles/communication.png" alt="">
                <p>Très à l'aise à l'oral, j'aime interagir avec mon auditoire. Tout au long de mes études, j'ai su rattraper les faiblesses qu'on pu avoir certains travaux par mon aisance à l'oral.</p>
            </div>
            <div class="espace">
                <h3>Travail d'équipe :</h3>
                <img src="usedfiles/teamwork.png" alt="">
                <p>J'aime le travail d'équipe et j'aime y apporter la bonne humeur puisque d'après moi un environnement agréable améliore la qualité du travail. Aussi, je suis habitué au travail d'équipe ainsi, je suis familier avec des outils tels que git/github ou perforce</p>
            </div>
            <div class="espace">
                <h3>Créativité :</h3>
                <img src="usedfiles/creativité.png" alt="">
                <p>Bien que cette dernière ne soit pas forcément toujours requise, j'aime rechercher comment innover et trouver des idées originales dans tout ce que je fais.</p>
            </div>
        </div>
    </div>

    <div class="diplome" id="diplome">
        <h1>Diplomes</h1>
        <div>
            <h2>Baccaloréat</h2>
            <p>Obtenu au lycée Paul Scarron à Sillé le guillaume en 2019</p>
        </div>
        <div>
            <h2>Diplome d'ingénieur:</h2>
            <p>En cours</p>
        </div>
    </div>
    <div class="projets" id="projets">
        <h1>Mes projets</h1>
        <div>
            <h2  style="padding-top: 5%;">Réalitée Augementée :</h2>
            <p>Ceci est la carte de visite d'une entreprise fictive de bras robots avec au recto une présentation d'un des produits de la boite et au dos la présentation de l'employé à qui appartiens la carte lui permettant à la fois de présenter son entreprise et de se présenter lui-même.</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OOmf3ikk1nI?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/W5LXKI8YGrs?    " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div>
            <h2 style="padding-top: 5%;">Figma :</h2>
            <p>Premier exemple tous les logos de ce site ont été fait à la main sur figma (hormis les logos figma,python et java)</p>
            <img src="UX.png" alt="">
            <p>Voici ici un exemple de projet figma respectant des contraintes de couleurs et les règles d'utilisation de figma en milieu professionnel</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/90Zc3-xudDQ?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <img src="usedfiles/Composant.png" alt="Image à agrandir" id="image-zoom" class="compopetit">
            <div class="lightbox" id="image-lightbox">
                <img src="usedfiles/Composant.png" alt="Image agrandie">
            </div>
        </div>
        <script src="script.js"></script>
        <div>
            <h2  style="padding-top: 5%;">UnrealEngine :</h2>
            <p>Jeu PACMAN avec travail sur l'ia des fantomes donc les comportements sont les mêmes que le jeu original ainsi que le one-pager réalisé sur figma</p>
           <div style="display: flex;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yUxwzh7noZc?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="padding: 5%;"></iframe>
            <img src="usedfiles/OnePager.png" alt="">
            </div> 
        </div>

    </div>
    <!--
    <div class="CV" id="CV">
    <h1>Télécharger mon cv</h1>
    <a href="c:\Users\rem31\Documents\cv\CV_Rémi_VAILLANT.pdf" download="CV_Rémi_VAILLANT.pdf">Télécharger le PDF</a>
    
    </div>-->
</body>

</html>