import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/components/pages/Home.vue'
import Login from '@/components/pages/Login.vue'
import Quiz from '@/components/pages/Quiz.vue'
import Register from '@/components/pages/Register.vue'
import Mypage from '@/components/pages/Mypage.vue'
import Keyword from '@/components/pages/Keyword.vue'

const routes = [
  {
    path: '/',
    component: Home,
  },
  {
    path: '/quiz',
    component: Quiz
  },
  {
    path: '/register',
    component: Register
  },
  {
    path: '/login',
    component: Login
  },
  {
    path: '/mypage',
    component: Mypage,
  },
  {
    path: '/keyword',
    component: Keyword
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})


export default router
