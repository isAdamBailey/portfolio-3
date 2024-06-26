---

extends: _layouts.post
section: content
title: Simple Vue.js and Tailwind.css Scroll To Top Button 
date: 2022-01-06
description: A simple scroll to top button made with Vue.js and Tailwind.css.
keywords: vue.js,tailwind.css,scroll to top,web development,software development
categories: [laravel, vue]
featured: true
excerpt: A simple scroll to top button made with Vue.js and Tailwind.css.
---

A simple scroll to top button made with Vue.js and Tailwind.css.

## Introduction

I recently built an app that ended up having some pretty long scrolls, and even just working on the app, 
I had a constant need to just jump to the top. The top of the page is usually where the navigation lives,
and I just want to jump back quickly.

I realize I can just use the `command + up arrow` on a keyboard, but over half my traffic is mobile,
and that's a lot of thumbing for people trying to use these apps.

I used [Vue.js](https://vuejs.org/) and [Tailwind.css](https://tailwindcss.com/) because I really enjoy working with them. 
Most of my projects use this front end stack, so it's really easy to just copy these components
from project to project and have them "just work".

You may be looking for a solution that does the same, so I thought I'd share how I built my scroll to top button. 
Let's get started.

## Template Code

I'm starting with this button in the vue template:

```vue
<template>
    <div
        ref="scrollTopButton"
        class="sticky w-full flex justify-end bottom-0 pb-3 pr-5 transition"
    >
        <div
            class="text-gray-400 hover:text-blue-400 transition"
        >
            <button>
                Scroll to top
            </button>
        </div>
    </div>
</template>
```
This adds a button with a `ref` of `scrollTopButton` in the bottom right side of the screen and makes it sticky, so it stays there
on scroll.
Go ahead and take some time to style this how you want it to look for your app.

## Add Scroll Listener

Let's add the script and some code for listening to the scroll event.

```vue
<script setup>
  import { onMounted, onUnmounted, ref } from "vue";

  let scrollTopButton = ref(null);

  const handleScroll = () => {
    if (window.scrollY > 0) {
      scrollTopButton.value.classList.remove("invisible");
    } else {
      scrollTopButton.value.classList.add("invisible");
    }
  };

  onMounted(() => {
    window.addEventListener("scroll", handleScroll);
  });

  onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
  });
</script>
```

As you can see, we've added and removed an `eventListener`, with vue's `mounted()` and `beforeUnmount()`
lifecycle hooks.

Then, we get that button by its `ref`, and check to see if `window.scrollY` is more than 0, which means that you
are at the top of the page. You may adjust this value if you only want to see the button after you've scrolled down 
a little.

When your value is reached, we are removing the tailwind class `invisible`, else we are adding it. Let's also 
add `invisible` to this component, so its invisible initially.

```vue
<div
    ref="scrollTopButton"
    class="sticky w-full flex justify-end bottom-0 pb-3 pr-5 lg:pr-16 transition" <!-- [tl! remove] -->
    class="invisible sticky w-full flex justify-end bottom-0 pb-3 pr-5 lg:pr-16 transition" <!-- [tl! add] -->
>
```

At this point your button should show if you start to scroll down, and disappear if you're
at the top of the page.

## Scroll Click Event
Now, we need to make the button actually scroll to the top when you click it!

Add this function to your script. It smoothly rolls the screen
back up to `window.scrollY = 0`, which would also make your button disappear.
```javascript
scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
},
```

Let's add the click event to the `button` itself.

```vue
<button> <!-- [tl! remove] -->
<button @click="scrollToTop"> <!-- [tl! add] -->
```

And with this, you should have a basic, functional scroll to top button
which you should be able to tweak style as needed for your own Vue.js/Tailwind.css
project.

## Further Improvements
### Lodash debounce
If you have [Lodash](https://lodash.com/) in your project, we could make use of the 
`debounce` function to make the button appear after a timeout.

```vue
<script setup>
  import { onMounted, onUnmounted } from 'vue';
  // Import debounce: [tl! add]
  import debounce from "lodash/debounce"; // [tl! add]

  // Set a data property to hold the method we will call in the listeners: [tl! add]
  let handleDebouncedScroll = ref(null); // [tl! add]
  
  onMounted(() => {
    window.addEventListener("scroll", handleScroll); // [tl! remove]
    // Apply the debounce method and listener to this data property: [tl! add]
    handleDebouncedScroll = debounce(handleScroll, 100); // [tl! add]
    window.addEventListener('scroll', handleDebouncedScroll); // [tl! add]
  });

  onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll); // [tl! remove]
    // Remove listener from the debounced method instead: [tl! add]
    window.removeEventListener('scroll', handleDebouncedScroll); // [tl! add]
  });
</script>
```

And now, your button will appear 100 milliseconds after the `window.scrollY` limit 
is reached.

### Accessible icon button
It is best to have the button display text that helps everyone understand what
the purpose of the button is. But, if you are like me and just want an icon in 
the button, it would be a good idea to make sure assistive technology can still
process it.

To add an icon, grab one from your favorite library. I use [Remix Icon](https://remixicon.com/). 
```vue
<button @click="scrollToTop">
    Scroll to top <!-- [tl! remove] -->
    <i class="text-5xl ri-arrow-up-circle-line"></i> <!-- [tl! add] -->
</button>
```

However, we've now removed any text describing this element. Let's fix that 
with some `aria` attributes.

```vue
<button @click="scrollToTop"
    role="button" <!-- [tl! add] -->
    aria-label="scroll to top of the page" <!-- [tl! add] -->
>
```
## Conclusion

I hope this article was helpful to anyone googling around looking for a quick
solution for scrolling back up the page. I also hope I did a good enough job 
of breaking it down into pieces to help you understand.

Happy coding!