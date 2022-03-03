/*
 * Copyright (c) laraplay 2022.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// Routes
import apps from './routes/app'


const router = new VueRouter({
    mode: 'history',
    base: 'http://127.0.0.1:8000/',
    scrollBehavior() {
        return { x: 0, y: 0 }
    },
    routes: [
        {
            path: '/',
            name: 'Index',
            component: () => import('../views/Index'),
        },
        apps,
        {
            path: '*',
            redirect: 'error-404',
        },
    ],
});

/*
router.beforeEach((to, _, next) => {
  const isLoggedIn = isUserLoggedIn()

  if (!canNavigate(to)) {
    // Redirect to login if not logged in
    if (!isLoggedIn) return next({ name: 'auth-login' })

    // If logged in => not authorized
    return next({ name: 'misc-not-authorized' })
  }

  // Redirect if logged in
  if (to.meta.redirectIfLoggedIn && isLoggedIn) {
    const userData = getUserData()
    next(getHomeRouteForLoggedInUser(userData ? userData.role : null))
  }

  return next()
});
 */

export default router
