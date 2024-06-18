import { createRouter, createWebHistory } from 'vue-router';
import store from '@/store';
import UserList from '@/components/User/UserList.vue';
import AdminListView from '@/views/Admin/AdminListView.vue';
import RoleList from '@/components/Role/RoleList.vue';
import PermissionList from '@/components/Permission/PermissionList.vue';
import UserCategoryList from '@/components/UserCategory/UserCategoryList.vue';
import BadgeList from '@/components/Badge/BadgeList.vue';
import MealMenuList from '@/components/Meal/Menu/MealMenuList.vue';
import MealNameList from '@/components/Meal/Name/MealNameList.vue';
import MealScheduleList from '@/components/Meal/Schedule/MealScheduleList.vue';
import MealRecordList from '@/components/Meal/Record/MealRecordList.vue';
import Login from '@/views/Auth/Login.vue';
 
const routes = [
  { path: '/', component: AdminListView },
  {path: '/login', component: Login},
  { path: '/users', component: UserList },
  { path: '/roles', component: RoleList },
  { path: '/permissions', component: PermissionList },
  { path: '/user-categories', component: UserCategoryList },
  { path: '/badges', component: BadgeList },
  { path: '/meal-menus', component: MealMenuList },
  { path: '/meal-names', component: MealNameList },
  { path: '/meal-schedules', component: MealScheduleList },
  { path: '/meal-records', component: MealRecordList },
];


const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const isLoggedIn = store.getters['auth/isLoggedIn'];
  if (to.meta.requiresAuth && !isLoggedIn) {
      next({ path: '/login' });
  } else {
      next();
  }
});

export default router;