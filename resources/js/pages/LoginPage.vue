<template>
    <section class="bg-white min-h-screen h-screen">
        <div class="flex items-center h-full w-full">
            <div class="w-1/2 h-full bg-cover bg-center relative"
                :style="{backgroundImage: `url(${imageBanner})`}"
            >
                <div class="absolute top-0 bottom-0 left-0 right-0 bg-black bg-opacity-30"></div>
            </div>
            <div class="w-1/2 h-full">
                <div class="w-full h-full flex flex-col justify-center relative">
                    <div class="flex items-center mt-4 absolute top-8 left-14">
                        <router-link :to="{name: 'home'}" class="text-blue-500"><i class="ri-arrow-left-line"></i> Kembali Ke Beranda</router-link>
                    </div>
                    <form action="mitra/auth/check" class="w-[80%] px-14" method="POST">
                        <div class="mb-6">
                            <h1 class="font-bold text-[1.5em] mb-6">Login Akun</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt corporis culpa blanditiis dolore officiis sequi tenetur consequatur porro atque voluptates harum repudiandae commodi, accusamus, amet ducimus hic earum sapiente optio!</p>
                        </div>
                        <div class="mb-5">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masuk Sebagai</label>
                            <select 
                                name="programs"
                                id="programs" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            >
                                <option value="">-- Pilih Program --</option>
                                <option value="mitra">Mitra</option>
                                <option value="mentor">Mentor</option>
                                <option value="mahasiswa">Mahasiswa</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input
                                type="email" 
                                id="email" 
                                name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                placeholder="name@email.com" 
                                required 
                            />
                            <span v-if="errors['email']" class="text-red-500 text-sm block mt-2">{{ errors['email'] }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input 
                                v-model="formLogin.password"
                                type="password" 
                                name="password"
                                id="password" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                required 
                            />
                            <span v-if="errors['password']" class="text-red-500 text-sm block mt-2">{{ errors['password'] }}</span>
                        </div>
                        <div class="flex items-start mb-5">
                            <div class="flex items-center h-5">
                                <a href="" class="text-sm text-blue-500">Lupa Password?</a> 
                            </div>
                        </div>
                        <button 
                            type="submit" 
                            class="text-white w-full bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center"
                        >Masuk</button>
                        <div class="flex items-center mt-4">
                            <span class="text-sm">Belum memiliki Akun? <a href="" class="text-blue-500">Daftar Disni</a></span> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <Toast 
        :is_show="showToast"
        :on-hide="handleClose"
        :message="messageToast"
    />
</template>

<script setup>
import Toast from '../components/Toast.vue';
import imageBanner from '@/assets/images/image-banner.jpg';
import { useApi } from '@/utils/api.js';
import { reactive, ref } from "vue";

const props = defineProps({
    errors: {
        type: Object,
        default: {}
    }
})

const formLogin = reactive({
    email: null,
    password: null,
    programs: ''
});

const errors = reactive(props.errors);
const showToast = ref(false);
const messageToast = ref('');
const handleClose = ref(function handleClose() {
    toast().hide();
})
console.log(errors)
const {post, get} = useApi();

function handleSubmit() {
    post('mitra/auth/check', {...formLogin})
    .then(response => {
        window.location.href = 'mitra/dashboard';
    }).catch(error => {
        toast().show().setMessage(error.message);
        formLogin.password = null;
        pushError('email', error.message)
    })
}

function pushError(to, message = '') {
    errors[to] = message;
}

function toast() {
    return {
        show() {
            showToast.value = true;
            return this;
        },
        hide() {
            showToast.value = false;
        },
        setMessage(message) {
            messageToast.value = message;
        }
    }
}

</script>
