<template>
  <span id="type-text"></span>
</template>

<script>
export default {
  name: 'TypingText',

  props: {
    words: {
      type: Array,
      default: () => { return ['Typing...'] }
    }
  },

  data () {
    return {
      current: 1,
      typingSpeed: 100,
      waitingTime: 1000
    }
  },

  mounted () {
    this.trigger()
  },

  computed: {
    element () {
      return document.getElementById('type-text')
    },
  },

  methods: {
    async trigger () {
      while (true) {
        await this.wait(this.waitingTime)

        await this.clear()

        await this.type(this.nextWord())
      }
    },

    async clear () {
      while (this.element.innerHTML.length) {
        await this.backspace()
      }
    },

    increment () {
      this.current++

      if (this.current > this.words.length) {
        this.current = 1
      }
    },

    async wait (milliseconds) {
      return new Promise(resolve => {
        setTimeout(resolve, milliseconds)
      })
    },

    async type (text) {
      while (text.length) {
        await this.append(text[0])

        text = text.substring(1)
      }
    },

    nextWord () {
      let word = this.words[this.current - 1]

      this.increment()

      return word
    },

    backspace () {
      this.element.innerHTML = this.element.innerHTML.slice(0, -1)

      return this.wait(this.typingSpeed)
    },

    append (text) {
      this.element.innerHTML += text

      return this.wait(this.typingSpeed)
    }
  }
}
</script>
