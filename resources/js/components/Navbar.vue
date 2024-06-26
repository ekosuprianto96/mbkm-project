<template>
  <header class="w-full sticky top-0 z-50 bg-white shadow-lg">
    <Container>
        <nav class="flex h-[80px] items-center">
            <div class="w-1/2 h-full flex items-center gap-4">
                <h1 class="font-bold text-[1.3em]">MBKM Makassar</h1>
                <ul class="flex items-center h-full">
                    <li>
                        <router-link to="/" class="me-3 p-2 font-semibold text-lg">Beranda</router-link>
                    </li>
                    <li>
                        <router-link to="/" class="me-3 p-2 font-semibold text-lg">Program</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'bantuan'}" class="me-3 p-2 font-semibold text-lg">Butuh Bantuan?</router-link>
                    </li>

                </ul>
            </div>
            <div class="w-1/2 h-full flex items-center justify-end">
                <ul class="flex items-center h-full">
                    <li>
                        <a
                            href="/login" 
                            class="me-3 p-2 font-semibold text-lg hover:text-blue-500"
                        >
                            Masuk Akun <i class="ri-arrow-right-line"></i>
                        </a>
                    </li>
                    <li>
                        <router-link 
                            to="/" 
                            class="font-semibold text-lg px-3 py-2 rounded-lg text-white bg-blue-500"
                        >
                            Daftar Akun
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </Container>
  </header>
</template>

<script setup>
    import Container from './Container.vue'
</script>