<img src="http://rocssti.nicolas-hoffmann.net/Rocssti_logo.png" alt="RÖCSSTI" />

# RÖCSSTI: to start CSS easily!

RÖCSSTI – pronounce "Roshti" – is my CSS starting base.

The name – absolutely ridiculous – is a friendly reference to KNACSS, a great CSS micro-framework CSS made by Raphaël Goetter, from which RÖCSSTI uses some elements, arranged by myself to answer to my work needs.

The goals are:

- Having a workflow (including order and naming convention);
- Having a structure that allows to go from global to particular;
- Thinking of a good CSS startbase, including accessibility elements, as skip links, to avoid forgetting them;
- Having a reusable class system (DRY: Don't Repeat Yourself);
- Having some nice and practical tips that enhance integration and use of a website;
 
To sum up, having a strong CSS base, used for and built from professional realisations.

**RÖCSSTI has also LESS ans Sass versions**, see in "less" ans "Sass" folders. **All versions are maintained in french and english**.

Information: to my knowledge, **RÖCSSTI has been used for about 37 websites**, starting from simple ones to more complex responsive ones. The time gained at the beginning of the projects and the reusability of classes are perceptible.

## Naming conventions

- Indent: 2 spaces for properties
- No use of `!important`, that's bad!
- Use percents when it is possible
- Properties are written like this:

On a line (1 or 2 max): `p { margin: 0 0 1em; }`

On several lines:
```css
h1,
.h1 {
  font-size: 1.8571em;
  /* etc. */
}
```

- Use of low-case characters for hex values, e.g. `#efe`
- Use of compact notations, e.g. `margin: .5em;`
- No unit for null values, when it is allowed, e.g. `margin: 0;`
- CSS Properties are displayed in alphabetical order, when it is possible.

http://rocssti.nicolas-hoffmann.net/
