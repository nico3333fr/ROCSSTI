<img src="https://rocssti.net/layout/images/rocssti_logo.png" alt="RÖCSSTI" />

# RÖCSSTI : le micro-framework CSS pour démarrer vos CSS avec la patate !

RÖCSSTI – prononcez Rochti – est mon micro-framework CSS. 

Le nom – volontairement ridicule – est un clin d'oeil amical à KNACSS, un excellent micro-framework CSS de Raphaël Goetter, dont RÖCSSTI reprend des éléments, réaccomodés à ma façon pour répondre à mes besoins et mes habitudes au boulot.

L'idée est la suivante :

- Avoir une organisation de travail (via une méthode de rangement et une convention de nommage) ;
- Permettre une approche allant toujours du plus global au plus particulier, ce qui permet de tirer un avantage maximal de la cascade CSS ;
- Penser une bonne base de départ, incluant quelques éléments d'accessibilité, comme les liens d'évitement, afin d'être sûr de ne pas les oublier ;
- Avoir un système de classes réutilisables et favorisant une approche DRY ;
- Avoir de petites astuces pratiques et sympathiques qui améliorent la conception et l'utilisation d'un site ;

Bref, avoir un socle robuste et éprouvé par des réalisations en milieu professionnel qui l'utilisent et le nourrissent.

**RÖCSSTI a aussi des versions LESS et Sass**, jetez un oeil dans le répertoire "less" et "Sass". **Toutes les versions sont maintenues en anglais et en français**.

Si vous doutez du côté pratique, cette base CSS sera enrichie au fil des projets réels que je réaliserai avec. Pour information, à ma connaissance, **80 réalisations dans des styles très différents ont déjà été faites avec RÖCSSTI**, cela va de sites relativement simples à des sites plus complexes en responsive. Le gain de temps au démarrage du projet ainsi que la réutilisabilité du code sont réelles et perceptibles.

## Röcssti builder

Si vous n’avez pas l’envie ou la possibilité d’utiliser les versions avec pré-processeur, vous pouvez utiliser cet outil : https://rocssti.net/en/builder-css

## Röcssti est dispo sur NPM

Vous pouvez faire ```npm install rocssti``` à la ligne de commande.

## Conventions de nommage

- Indentation : 2 espaces pour les propriétés
- Interdiction d'utiliser `!important`, ç'ai mal !
- Utilisation des pourcentages autant que possible
- Écriture des propriétés ainsi :

Sur une ligne (1 ou 2 propriétés max) : `p { margin: 0 0 1em; }`

Sur plusieurs lignes :
```css
h1,
.h1 {
  font-size: 1.8571em;
  /* etc. */
}
```

- Utilisation des minuscules pour les valeurs hexadécimales, exemple : `#efe`
- Utilisation des notations compactes, exemple : `margin: .5em;`
- Pour toute valeur nulle, pas d'unité quand c'est autorisé, exemple : `margin: 0;`
- Nommage des propriétés CSS par ordre alphabétique, quand c'est possible.

Voir la doc et des exemples : https://rocssti.net/
