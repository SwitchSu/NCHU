<!-- 後台修改密碼頁 -->

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  current_password: '',
  password: '',
  password_confirmation: '',
});

/**
 * 發送請求
 */
const submit = () => {
  form.put(route('password.update'), {
    preserveScroll: true,
    onSuccess: () => {
      form.reset();
    },
  });
};
</script>

<template>
  <div class="backend-container">
    <div class="backend-card-container">
      <form @submit.prevent="submit" class="space-y-6">
        <!-- 舊密碼欄位 -->
        <div>
          <InputLabel for="current-password" value="舊密碼" required />
          <TextInput
            id="current-password"
            v-model="form.current_password"
            type="password"
            class="mt-1 block w-full"
            minlength="8"
            maxlength="255"
            placeholder="請輸入舊密碼"
            required
          />
          <InputError :message="form.errors.current_password" class="mt-2" />
        </div>

        <!-- 新密碼欄位 -->
        <div>
          <InputLabel for="password" value="新密碼(最少8碼)" required />
          <TextInput
            id="password"
            v-model="form.password"
            type="password"
            class="mt-1 block w-full"
            minlength="8"
            maxlength="255"
            placeholder="請輸入新密碼"
            required
          />
          <InputError :message="form.errors.password" class="mt-2" />
        </div>

        <!-- 再次確認密碼欄位 -->
        <div>
          <InputLabel for="password_confirmation" value="再次確認密碼(最少8碼)" required />
          <TextInput
            id="password_confirmation"
            v-model="form.password_confirmation"
            type="password"
            class="mt-1 block w-full"
            minlength="8"
            maxlength="255"
            placeholder="請再次輸入密碼"
            required
          />
          <InputError :message="form.errors.password_confirmation" class="mt-2" />
        </div>

        <!-- 執行按鈕區塊 -->
        <div class="flex items-center justify-center gap-4">
          <PrimaryButton type="submit" :disabled="form.processing">儲存</PrimaryButton>
        </div>
      </form>
    </div>
  </div>
</template>
