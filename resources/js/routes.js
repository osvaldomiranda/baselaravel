import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/Home.vue'
import Hello from './views/Hello.vue'
import Equipment from './views/Equipment.vue'



  const router = new VueRouter({
      mode: 'history',
      routes: [
          {
              path: '/',
              name: 'home',
              component: Home,
          },
          {
              path: '/hello',
              name: 'hello',
              component: Hello,
          },
          {
              path: '/equipment',
              name: 'equipment',
              component: Equipment,
          },
      ],
  });

export default router;
