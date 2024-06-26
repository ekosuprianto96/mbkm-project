<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- Flowbet --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- css --}}
    @vite(['resources/css/app.css'])

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <section class="bg-white min-h-screen h-screen">
        <div class="flex items-center h-full w-full">
            <div class="w-1/2 h-full bg-cover bg-center relative"
                style="background-image: url({{ asset('assets/front/images/image-banner.jpg') }})"
            >
                <div class="absolute top-0 bottom-0 left-0 right-0 bg-black bg-opacity-30"></div>
            </div>
            <div class="w-1/2 h-full">
                <div class="w-full h-full flex flex-col justify-center relative">
                    <div class="flex items-center mt-4 absolute top-8 left-14">
                        <a href="{{ url('/') }}" class="text-blue-500"><i class="ri-arrow-left-line"></i> Kembali Ke Beranda</a>
                    </div>
                    <form action="{{ route('mitra.auth.check') }}" class="w-[80%] px-14" method="POST">
                        @csrf
                        <div class="mb-6">
                            <h1 class="font-bold text-[1.5em] mb-6">Login Akun</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt corporis culpa blanditiis dolore officiis sequi tenetur consequatur porro atque voluptates harum repudiandae commodi, accusamus, amet ducimus hic earum sapiente optio!</p>
                        </div>
                        @if($errors->any())
                            @foreach ($errors->all() as $err)
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        {{ $err }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                            @error('email')
                                <span class="text-red-500 text-sm block mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input
                                type="password" 
                                name="password"
                                id="password" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                required 
                            />
                            @error('password')
                                <span class="text-red-500 text-sm block mt-2">{{ $message }}</span>
                            @enderror
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
</body>
</html>