---
extends: _layouts.post
section: content
title: On Getting Lost
date: 2021-10-06
description: How to avoid getting lost in life and code.
keywords: git, learning, learning code, newbie, lost, anxiety, impostor syndrome, junior
categories: [learning]
featured: true
excerpt: How to avoid getting lost in life and code.
---

Sometimes when we're working hard at code, we get into a state where nothing is working. You are trying all kinds of 
different things to fix the bug or to move forward, and it's been so long since the code *actually* worked, that
you've forgotten how to get back to solid ground.

The same can also be true in life! We get lost in ourselves and our progress (or lack of). Here's how I try to manage 
them both.

## Preparation
The best way to avoid getting lost is to prepare for possible outcomes before initiating the journey.

Here are some questions you might ask yourself: 

 - What tools do you suspect you'll need? Is it worth reading more about the tooling before you begin? 
 - Are you familiar with the codebase in the area you will be working in?

Take some time to read through the code, and take note of any areas you may need to clarify beforehand. Ask questions,
refer to documentation, and get at least a small grasp on what lies ahead.

 - In life - are you prepared for the environment you are about to step into?

Before you enter that supermarket, make sure you have your shopping list. Take note of where you parked. Be prepared
to pay, and adjust your mentality in case you run into someone you know. Be positive, and even have some examples
of "small talk" in case the need arises.

## Tracking
In addition to "preparation", which for a mountain climber might include having the right pack, rope, and 
knowledge of the weather, you are going to need to make calculated and careful progress as you go. Sometimes the 
progress is lateral, sometimes it means taking a few steps back. But the idea is to climb to the top 
eventually, by whatever safe means necessary.

When a climber reaches a new high point, or point of progress, they need to set the carabiner so that in case they
fall, they can return to the point they last made progress to. It also means they don't fall and die, but you get my 
point. Is there something locking you in to that last "working" point in your code?

For software, we use [Git](https://git-scm.com/). Git helps with, among many other things, keeping track of your
progress. A good rule of thumb is to commit regularly at points in your work where you are sure things are working,
no matter how small the progress. This allows you to revert to that point at any time should you get lost.

In life, we use our memory, which is much more fallible. We avoid getting lost by remembering where we were previously.
When you remembered where you parked, that was the first step in not getting lost in the mall. When you enter the store,
remember which store. When you spend an hour in the mall, remember at all times, where you entered from. While this
seems quite extreme, there have been many times I've forgotten where I parked or started.

When our memory cannot be trusted, the camera on our smartphones can. Take a picture of the parking lot, of the store.
Commit the picture to your phone's memory, and you don't need your human one anymore.

## Committing
Each point of progress in git is called a `commit`. This is where your carabiner is locked into the rock.

For instance, you simply add some text, and the code breaks. Are you sure you only added text since your last `commit`?
let's find out.

```bash
# typing this
$ git diff

# returns this
@@ -133,6 +133,7 @@

+       new line of text

@@ -142,7 +143,7 @@
-       toggle()"
+       toggl()"
```
And then we know that it was not just the line of text, we also accidentally deleted a letter from a method, which
broke the code. We can easily put all of this back to where it was when it was working, with `git reset`. Typing:
```bash
$ git reset --hard HEAD
```
Takes you right back to before you added the text at all, right to the previous working state.

Now this only really works if you trust that you have ONLY made commits with working code, so always run tests to make
sure each commit is good before you move forward. In other words, make sure you set your carabiner to a solid spot in
the cliff side, so that if you fall, it will catch you, and you can climb back to the last safe place.

But what if you did accidentally commit some broken code? Git has the ability to reset back to different points, so you
can figure out which commit broke something.

```bash
$ git log --oneline

# returns
b764644 Text change
7c709f0 Some other commit
9ef9173 An even older commit
```
```bash
# this takes you right back to the state of the code from that older commit
$ git reset 9ef9173
```

You can basically go back to three carabiner positions ago and not fall from there.

Wouldn't it be great to have that for life? We could say "Go back to before I screwed that thing up".

## Conclusion
While this article is an extremely simple example of how to use Git, It can also be a simple framework for progress 
in life, whether it be finding your way, or returning to different ways of thinking - A useful analogy for not 
getting lost, and remembering incremental steps.

A carabiner can keep a climber alive and not lose progress, good use of your memory (or a smartphone) can get you
back home or to your starting point, Git can return you to a working state in software. Simple solutions can let our
brains freely focus on other things.

Let structure be your way-finder!
