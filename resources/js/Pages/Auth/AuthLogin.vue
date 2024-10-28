<script setup>
import { useForm } from '@inertiajs/vue3';
import { getLocal } from '@/Composables/useStorage';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/Backend/Button/PrimaryButton.vue';
import InputError from '@/Components/Backend/InputTool/InputError.vue';
import TextInput from '@/Components/Backend/InputTool/TextInput.vue';
import Checkbox from '@/Components/Backend/InputTool/Checkbox.vue';

defineProps({
  canResetPassword: {
    type: Boolean,
  },
});

/**
 * 獲取localStorage中的資料並設置至表單
 */
const setLocalStorage = () => {
  const [email = '', password = ''] = getLocal(['nchu-edu-email', 'nchu-edu-password']);
  const remember = !!email && !!password;
  form.email = email;
  form.password = password;
  form.remember = remember;
};

const form = useForm({
  email: '',
  password: '',
  remember: false,
});

/**
 * 當記住密碼被勾選且送出時，將密碼儲存至 localStorage
 */
const rememberPassword = () => {
  const { remember, email, password } = form;
  const handler = remember ? 'setItem' : 'removeItem';
  localStorage[handler]('nchu-edu-email', email);
  localStorage[handler]('nchu-edu-password', password);
};

/**
 * 登入
 */
const submit = () => {
  rememberPassword();
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};

onMounted(() => {
  setLocalStorage();
});
</script>

<template>
  <GuestLayout>
    <div class="flex justify-center items-center px-4">
      <section class="w-96">
        <form class="py-8 px-4" @submit.prevent="submit">
          <label>
            <TextInput
              v-model="form.email"
              id="email"
              type="email"
              class="mt-1 block w-full"
              placeholder="請輸入電子信箱"
              required
              autocomplete="username"
            />
  
            <InputError class="mt-2" :message="form.errors.email" />
          </label>
  
          <label class="block mt-4">
            <TextInput
              v-model="form.password"
              id="password"
              type="password"
              class="mt-1 block w-full"
              placeholder="請輸入密碼"
              autocomplete="current-password"
              required
            />
  
            <InputError class="mt-2" :message="form.errors.password" />
          </label>
  
          <div class="block mt-4">
            <label class="flex items-center cursor-pointer">
              <Checkbox v-model:checked="form.remember" class="cursor-pointer text-main-swamp-green/80" />
              <span class="ml-2 text-sm">記住我</span>
            </label>
          </div>
  
          <div class="mt-14">
            <div class="flex justify-center">
              <PrimaryButton
                color="gray"
                class="py-2 !px-20"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                登入
              </PrimaryButton>
            </div>
          </div>
        </form>
      </section>
    </div>
  </GuestLayout>
</template>
