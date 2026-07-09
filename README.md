raivard_tw
==========

Custom WordPress theme for [raivard.com](https://raivard.com), by Nina Presotto.

Built on [_tw](https://underscoretw.com/) (Tailwind CSS v4 + esbuild starter theme).

## Requirements

* WordPress 6.9+
* PHP 7.4+
* Node.js (for the build tooling)

## Local setup (ddev)

The site runs locally via [ddev](https://ddev.com). From the project root:

```
ddev start
```

Then, from this theme folder (`wp-content/themes/raivard_tw`):

```
npm install
npm run dev
```

Activate **raivard_tw** in the WordPress admin (Appearance → Themes) if it isn't already active.

## Development

```
npm run watch
```

Watches and rebuilds Tailwind CSS (frontend + editor) and the JS bundles (`javascript/script.js`, `javascript/block-editor.js`) on change.

```
npm run lint       # eslint + prettier check
npm run lint-fix    # eslint + prettier autofix
```

Tailwind utility classes are used directly in the templates — see [Tailwind docs](https://tailwindcss.com/docs/utility-first).

## Production build

```
npm run bundle
```

Runs the production build (minified CSS/JS) and packages the theme into `raivard_tw.zip`, ready to upload via the WordPress "Upload Theme" screen or your deployment tool of choice.

## Theme structure

* `theme/` — PHP templates (loaded as the actual WordPress theme)
  * `page-templates/` — one template per site section: `home`, `about`, `atelier`, `oeuvres`, `parcours`, `actus`, `contact`, `liveGluing`, `splashing`
  * `template-parts/content/` — reusable blocks (hero, multi-hero, cards, quotes...)
  * `fonts/` — self-hosted Catavalo and Raleway font families
* `tailwind/` — Tailwind config split into `custom/` (base, forms, fonts, utilities...) and generated theme/editor/typography layers
* `javascript/` — frontend and block-editor JS, bundled with esbuild
* `node_scripts/zip.js` — packages the theme for release

## Reference

This theme started from the _tw boilerplate; its docs are still relevant for the underlying build tooling:

* [Development](https://underscoretw.com/docs/development/)
* [Deployment](https://underscoretw.com/docs/deployment/)
* [JavaScript bundling with esbuild](https://underscoretw.com/docs/esbuild/)
* [Custom fonts](https://underscoretw.com/docs/custom-fonts/)
* [Troubleshooting](https://underscoretw.com/docs/troubleshooting/)
