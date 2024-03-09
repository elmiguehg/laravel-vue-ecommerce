import { createRouter, createWebHistory} from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/LoginView.vue'
import RegisterView from '../views/RegisterView.vue'
import ProductsView from '../views/ProductsView.vue'
import CartView from '../views/CartView.vue'
import StripeView from '../views/StripeView.vue'
import OrderView from '../views/OrderView.vue'
import { useAuthStore } from '../stores/auth'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView,
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterView,
    },
    {
      path: '/products',
      name: 'products',
      component: ProductsView,
    },
    {
      path: '/cart',
      name: 'cart',
      component: CartView,
    },
    {
      path: '/order',
      name: 'order',
      component: OrderView,
    },
    {
      path: '/stripe',
      name: 'stripe',
      component: StripeView,
    },
  ]
})

router.beforeEach( async(to) => {
  const publicPages = ['/login', '/register','/']
  const authRequired = !publicPages.includes(to.path)
  const auth = useAuthStore()
  if(authRequired && !auth.user){
    auth.returnUrl = to.fullPath
    return '/login'
  }
})

export default router
