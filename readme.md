<img src="http://rocssti.nicolas-hoffmann.net/style/rocssti_logo.png" alt="RÖCSSTI" />

# RÖCSSTI : pour démarrer vos CSS avec la patate !

RÖCSSTI – prononcez Rochti – est ma petite base de départ en matière de CSS. Le nom – volontairement ridicule – est un clin d'oeil amical à KNACSS, un excellent micro-framework CSS de Raphaël Goetter, dont RÖCSSTI reprend des éléments, réaccomodés à ma façon pour répondre à mes besoins et mes habitudes au boulot.

L'idée est la suivante :

- Avoir une organisation de travail (via une méthode de rangement et une convention de nommage) ;
- Penser une bonne base de départ, incluant quelques éléments d'accessibilité, comme les liens d'évitement, afin d'être sûr de ne pas les oublier ;
- Avoir de petites astuces pratiques et sympathiques qui améliorent la conception et l'utilisation d'un site ;
- Bref, avoir un socle robuste et éprouvé par des réalisations en milieu professionnel qui l'utilisent et le nourrissent.

Si vous doutez du côté pratique, cette base CSS sera enrichie au fil des projets réels que je réaliserai avec. Pour information, mon job actuel m'a permis de faire 10 réalisations dans des styles très différents avec RÖCSSTI, cela va de sites relativement simples à des sites plus complexes en responsive. Le gain de temps au démarrage du projet ainsi que la réutilisabilité du code sont réelles et perceptibles.

## Conventions de nommage

- Indentation : 2 espaces pour les propriétés
- Interdiction d'utiliser `!important`, ç'ai mal !
- Utilisation des pourcentages autant que possible
- Écriture des propriétés ainsi :

Sur une ligne (1 ou 2 propriétés max) : `p { margin: 0 0 1em; }`

Sur plusieurs lignes :
```css
h1,
.h1 {
  font-size: 1.8571em;
  /* etc. */
}
```

- Utilisation des minuscules pour les valeurs hexadécimales, exemple : `#efe`
- Utilisation des notations compactes, exemple : `margin: .5em;`
- Pour toute valeur nulle, pas d'unité quand c'est autorisé, exemple : `margin: 0;`

http://rocssti.nicolas-hoffmann.net/
