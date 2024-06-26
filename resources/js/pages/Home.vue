<template>
    <Navbar />
    <section class="mt-4">
        <Banner>
            <template #items>
                <div 
                    class="min-w-full flex relative bg-cover bg-center h-full rounded-lg"
                >
                    <div class="w-1/2 h-full relative z-40 flex flex-col justify-center items-start">
                        <div class="w-[90%] mb-4">
                            <h3 class="font-bold text-[3em] mb-4">Tentukan Langkah Masa Depanmu Sekarang</h3>
                            <p class="font-semibold text-lg text-gray-800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti voluptatibus veniam maiores earum, hic architecto vel. Accusantium facilis debitis omnis.</p>
                        </div>
                        <div class="mt-6 flex items-center gap-4">
                            <button class="px-6 py-3 font-semibold bg-blue-500 rounded-full text-white">Daftar Sekarang</button>
                            <button class="px-6 py-3 font-semibold border-2 border-blue-500 rounded-full text-black">Telusuri Program <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                    <div class="w-1/2 h-full relative z-40 flex justify-center items-center">
                        <div class="w-full border rounded-lg flex justify-center items-center overflow-hidden">
                            <img :src="imageBanner" alt="">
                        </div>
                    </div>
                </div>
            </template>
        </Banner>
    </section>
    <section class="mt-4 bg-slate-100 lg:py-14">
        <Container>
            <h3 class="mb-4 font-bold text-[2em]">Program Dan Kegiatan</h3>
            <div class="w-full flex justify-start items-center gap-4 mt-6">
                <div class="w-[25%] bg-white min-h-[400px] shadow-lg max-h-max flex-col flex justify-between rounded-lg p-4">
                    <h4 class="font-bold text-[1.6em] w-full text-start mb-4">Kampus Mengajar</h4>
                    <p class="text-md mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In alias vitae quis doloremque et quaerat, vel laborum explicabo molestiae voluptate nisi, quo officiis tempora eligendi facilis? Omnis dolorem earum cupiditate optio tenetur eos in explicabo provident et, a accusamus autem!</p>
                    <button class="px-4 py-2 bg-blue-500 rounded-lg text-white font-semibold">Selengkapnya <i class="ri-arrow-right-line"></i></button>
                </div>
                <div class="w-[25%] bg-white min-h-[400px] shadow-lg max-h-max flex-col flex justify-between rounded-lg p-4">
                    <h4 class="font-bold text-[1.6em] w-full text-start mb-4">Pertukaran Mahasiswa</h4>
                    <p class="text-md mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In alias vitae quis doloremque et quaerat, vel laborum explicabo molestiae voluptate nisi, quo officiis tempora eligendi facilis? Omnis dolorem earum cupiditate optio tenetur eos in explicabo provident et, a accusamus autem!</p>
                    <button class="px-4 py-2 bg-blue-500 rounded-lg text-white font-semibold">Selengkapnya <i class="ri-arrow-right-line"></i></button>
                </div>
                <div class="w-[25%] bg-white min-h-[400px] shadow-lg max-h-max flex-col flex justify-between rounded-lg p-4">
                    <h4 class="font-bold text-[1.6em] w-full text-start mb-4">Magang Mahasiswa</h4>
                    <p class="text-md mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In alias vitae quis doloremque et quaerat, vel laborum explicabo molestiae voluptate nisi, quo officiis tempora eligendi facilis? Omnis dolorem earum cupiditate optio tenetur eos in explicabo provident et, a accusamus autem!</p>
                    <button class="px-4 py-2 bg-blue-500 rounded-lg text-white font-semibold">Selengkapnya <i class="ri-arrow-right-line"></i></button>
                </div>
                <div class="w-[25%] bg-white min-h-[400px] shadow-lg max-h-max flex-col flex justify-between rounded-lg p-4">
                    <h4 class="font-bold text-[1.6em] w-full text-start mb-4">Praktisi Mengajar</h4>
                    <p class="text-md mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In alias vitae quis doloremque et quaerat, vel laborum explicabo molestiae voluptate nisi, quo officiis tempora eligendi facilis? Omnis dolorem earum cupiditate optio tenetur eos in explicabo provident et, a accusamus autem!</p>
                    <button class="px-4 py-2 bg-blue-500 rounded-lg text-white font-semibold">Selengkapnya <i class="ri-arrow-right-line"></i></button>
                </div>
            </div>
        </Container>
    </section>
    <section class="mt-4 lg:py-14">
        <Container>
            <h3 class="mb-4 font-bold text-[2em]">Ketentuan Dan Syarat</h3>
            <div class="w-full mt-8">
                <div class="w-full h-max rounded-lg flex mt-4">
                    <ul class="flex-column w-[30%] space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0">
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-lg text-white bg-blue-500 rounded-lg active w-full" aria-current="page">
                                Kampus Mengajar
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-lg rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                                Pertukaran Mahasiswa
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-lg rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                                Magang Mahasiswa
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-lg rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                                Praktisi Mengajar
                            </a>
                        </li>
                    </ul>
                    <div class="p-6 bg-gray-50 text-medium text-gray-500 rounded-lg w-full">
                        <h4 class="font-bold text-[1.3em] mb-4">Kampus Mengajar</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis quo aliquid nesciunt ducimus labore! Porro architecto alias voluptatum vero nesciunt?</p>
                        <ul class="space-y-4 text-gray-500 list-disc list-inside">
                            <li>
                                List item one
                                <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                    <li>You might feel like you are being really "organized" o</li>
                                    <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
                                    <li>Nesting tons of folders in your source code is also not helpful.</li>
                                </ol>
                            </li>
                            <li>
                                List item two
                                <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                    <li>I'm not sure if we'll bother styling more than two levels deep.</li>
                                    <li>Two is already too much, three is guaranteed to be a bad idea.</li>
                                    <li>If you nest four levels deep you belong in prison.</li>
                                </ul>
                            </li>
                            <li>
                                List item three
                                <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                    <li>Again please don't nest lists if you want</li>
                                    <li>Nobody wants to look at this.</li>
                                    <li>I'm upset that we even have to bother styling this.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-start flex-col items-start mt-8">
                <span class="block font-bold text-lg mb-3">Catatan Lain :</span>
                <ol class="list-decimal list-inside">
                    <li class="text-lg mb-3 font-semibold">
                        Perguruan Tinggi harus merupakan Perguruan Tinggi Negeri atau Swasta dan berada di bawah Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. Cek panduannya di sini.
                    </li>
                    <li class="text-lg mb-3 font-semibold">
                        Mahasiswa hanya dapat mengikuti 1 (satu) program per periode.
                    </li>
                    <li class="text-lg mb-3 font-semibold">
                        Harus berstatus mahasiswa aktif. Jika mahasiswa lulus/mengikuti yudisium sebelum program berakhir maka dianggap mengundurkan diri dari program Kampus Merdeka.
                    </li>
                </ol>
            </div>
            <div class="w-full flex justify-center items-center mt-4 py-8">
                <router-link to="/" class="font-semibold text-lg px-3 py-2 rounded-lg text-white bg-blue-500">Lihat Program Lainya <i class="ri-arrow-right-line"></i></router-link>
            </div>
        </Container>
    </section>
    <section class="mt-4 lg:py-14 bg-white border-t-2">
        <Container>
            <h3 class="mb-4 font-bold text-[2em]">Pertanyaan Umum</h3>
            <div class="w-full mt-8">
                <ul class="grid grid-cols-2 grid-flow-row gap-4">
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                    <li class="p-6 border rounded-lg font-semibold text-[1.3em] flex items-center relative">
                        Bagaimana cara registrasi akun Merdeka Belajar Kampus Merdeka?
                        <span class="absolute right-3">
                            <i class="ri-arrow-right-line text-[1.3em]"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </Container>
    </section>
    <Footer>

    </Footer>
</template>

<script setup>
import Navbar from "../components/Navbar.vue";
import Banner from "../components/Banner.vue";
import Container from '../components/Container.vue';
import Footer from "../components/Footer.vue";
import imageBanner from '@/assets/images/image-banner.jpg';
import { ref } from "vue";


</script>
