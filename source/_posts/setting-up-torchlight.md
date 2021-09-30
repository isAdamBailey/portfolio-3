---
extends: _layouts.post
section: content
title: Setting Up Torchlight
date: 2021-09-16
description: How I set up torchlight.dev to style code blocks in my portfolio.
categories: [configuration]
featured: true
excerpt: How I set up torchlight.dev to style code blocks in my portfolio.
---

When I built my new portfolio, I used [Jigsaw](https://jigsaw.tighten.co/) version 1.3, which has been amazing.
However, it came pre-built with a JavaScript based syntax highlighting package which did not seem to 
correctly style certain blocks of PHP code. Then I heard about [Torchlight.dev](https://torchlight.dev/)!

# Torchlight to the rescue!

According to [the official documentation for Torchlight](https://torchlight.dev/docs):

"Torchlight is a VS Code-compatible syntax highlighter that requires no JavaScript, supports every language, 
every VS Code theme, line highlighting, git diffing, and more."

I had watched several other PHP devs start to use Torchlight for their personal sites, and it just looks beautiful.
I decided it was time to make the switch, but I had no idea how easy it was going to be.

Follow along as I describe the process of swapping out the syntax highlighting packages in my portfolio site.

## Installation

First, at this time Torchlight (version 0.2.1) requires you to sigh up for "early access", so you can get your 
API token(Torchlight is completely free for personal and open source projects.). I signed up through a link on 
their home page.

After I received the early access and my API token, I got started installing the Jigsaw Client. [Torchlight's full 
documentation for this installation](https://torchlight.dev/docs/clients/jigsaw) is fully sufficient.
You can really stop reading this now and just use that doc, but I'm still going to describe the process I took.

1. Install the composer package:
 
```bash
composer require torchlight/torchlight-jigsaw
```       

2. Add the following line to the very bottom of `bootstrap.php` at the root of your Jigsaw project, following the 
`afterBuild()` methods:

```php
\Torchlight\Jigsaw\TorchlightExtension::make($container, $events)->boot();
```

3. Publish the Torchlight configuration file with the following command:

```bash
./vendor/bin/jigsaw torchlight:install
```

4. Add an `.env` file in the root of your Jigsaw project, and add the file to `.gitignore` so it isn't in your 
repository. in `.env`, add this line including your token:

```php
TORCHLIGHT_API_TOKEN=
```

5. Your API token will be referenced in the `'token'` section of the `torchlight.php` config file.

```php
'token' => getenv('TORCHLIGHT_API_TOKEN'),
```

6. Replace the tailwind styles that come with Jigsaw for `code` and `pre` (found in `source/_assets/sass/_base.scss`), 
with the following basic styles which they recommend:

```scss
pre {
    @apply my-4 rounded overflow-x-auto;
}

pre code.torchlight {
    @apply block py-4 min-w-max;
}

pre code.torchlight .line {
    @apply px-4;
}

pre code.torchlight .line-number,
pre code.torchlight .summary-caret {
    @apply mr-4;
}
```

Follow the [options documentation](https://torchlight.dev/docs/options) for info on configuring themes and much more. 
For me, the configuration that it shipped with was absolutely perfect for my needs.

7. Rebuild your Jigsaw site locally, and you should see the magic appear! You do not need to make any changes to the 
markdown files, Torchlight uses the same backtick/language syntax that highlight.js uses.

## Clean Up!

We still need to remove the highlight.js dependency and all its configuration.

1. Remove `"highlight.js"` from `package.json`.
2. Remove all the `hljs` items from `source/_assets/js/main.js`.
3. Remove the `highlight.js` import from `source/_assets/sass/main.scss`.
4. And finally, remove the `/hljs/` item from the `options.safeList` array in `tailwind.config.js`

All done!

## Reflection

You just made an amazing improvement to the code styling in your portfolio (and reduced the number of JavaScript
dependencies, which to me is always a win)! There are so many other cool features in Torchlight, such as code highlighting, 
diffing, collapsing, and more!

I hope this short tutorial was an easy switch from the built-in code block styling that comes with Jigsaw. I know 
I like it and will use it for the foreseeable future.
