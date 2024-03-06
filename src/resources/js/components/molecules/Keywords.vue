<script setup lang="ts">
import H3SideBarText from '@/components/atoms/texts/H3SideBarText.vue'
import SideBarLink from '@/components/atoms/links/SideBarLink.vue'

const aToJ: string[] = []
for (let i = 'A'.charCodeAt(0); i <= 'J'.charCodeAt(0); i++) {
  aToJ.push(String.fromCharCode(i))
}
const kToT: string[] = []
for (let i = 'K'.charCodeAt(0); i <= 'T'.charCodeAt(0); i++) {
  kToT.push(String.fromCharCode(i))
}
const uToZ: string[] = []
for (let i = 'U'.charCodeAt(0); i <= 'Z'.charCodeAt(0); i++) {
  uToZ.push(String.fromCharCode(i))
}
const hiraAToKo = ['あ', 'い', 'う', 'え', 'お', 'か', 'き', 'く', 'け', 'こ']
const hiraSaToTo = ['さ', 'し', 'す', 'せ', 'そ', 'た', 'ち', 'つ', 'て', 'と']
const hiraNaToHo = ['な', 'に', 'ぬ', 'ね', 'の', 'は', 'ひ', 'ふ', 'へ', 'ほ']
const hiraMaToRo = ['ま', 'み', 'む', 'め', 'も', 'ら', 'り', 'る', 'れ', 'ろ']
const hiraYaToWo = ['や', 'ゆ', 'よ', 'わ', 'を']

const zenkakuToHankaku = (str: string) => {
  return str.replace(/[A-Za-z0-9]/g, (s) => {
    return String.fromCharCode(s.charCodeAt(0) + 0xfee0)
  })
}
</script>

<template>
  <section class="sidebar-keywords">
    <H3SideBarText text="キーワード集" />
    <ul class="sidebar-keywords__links">
      <li>
        <template v-for="(prefix, index) in aToJ" :key="index">
          <SideBarLink :href="prefix" :text="zenkakuToHankaku(prefix)" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in kToT" :key="index">
          <SideBarLink :href="prefix" :text="zenkakuToHankaku(prefix)" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in uToZ" :key="index">
          <SideBarLink :href="prefix" :text="zenkakuToHankaku(prefix)" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in hiraAToKo" :key="index">
          <SideBarLink :href="prefix" :text="prefix" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in hiraSaToTo" :key="index">
          <SideBarLink :href="prefix" :text="prefix" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in hiraNaToHo" :key="index">
          <SideBarLink :href="prefix" :text="prefix" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in hiraMaToRo" :key="index">
          <SideBarLink :href="prefix" :text="prefix" />
        </template>
      </li>
      <li>
        <template v-for="(prefix, index) in hiraYaToWo" :key="index">
          <SideBarLink :href="prefix" :text="prefix" />
        </template>
      </li>
    </ul>
  </section>
</template>

<style lang="scss" scoped>
.sidebar {
  &-keywords {
    margin-top: 10px;
    border: solid #c2cbd3;
    background: $white;

    &__links {
      li {
        list-style: none;
        margin-left: -35px;
        padding-top: 10px;

        @include sp {
          display: flex;
          flex-wrap: wrap;
        }

        a {
          margin-left: 19px;
        }
      }
    }
  }
}
</style>
