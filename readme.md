
**discontinued June 2024**

This is my personal web portfolio, which contains all open source projects and a blog.
This site was made with:
- [Jigsaw](http://jigsaw.tighten.co/), a framework for rapidly building static sites.
- [Tailwind CSS](https://tailwindcss.com/), a utility CSS framework.
- Syntax highlighting using [Torchlight](hhttps://torchlight.dev/).

### Development


```bash
# Make sure you have the required composer packages
composer install
```
```bash
# Make sure you have npm install the required packages
npm install
```
```bash
# To run this site locally and let mix watch changes and recompile
npm run watch
```
```bash
# To manually compile assets
npm run dev
```

### Building This Site On Production

```bash
# Make sure you have the required composer packages
composer install
```
```bash
# Make sure you have npm install the required packages
npm install
```
```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile minified assets with Laravel Mix
npm run prod
```
