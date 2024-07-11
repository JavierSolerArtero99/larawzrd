@extends('WzrdTheme::layouts.' . $layout)

@section('title', $title)

@section('content')

    <!-- CARROUSEL -->
    <script>
        const CarrouselComponent = () => {
            return {
                currentSlideIndex: 1,
                slides: [
                    {
                        imgSrc: 'https://www.calandratex.es/wp-content/uploads/2016/01/Calandra.jpg',
                        imgAlt: 'New collection - ride the wave of excitement.',
                    },
                    {
                        imgSrc: 'http://www.calandratex.es/wp-content/themes/wallstreet/images/page-header-bg.jpg',
                        imgAlt: 'Up to 30% discount, gear up for adventure.',
                    },
                    {
                        imgSrc: 'https://www.calandratex.es/wp-content/uploads/2016/01/rollos.jpg',
                        imgAlt: 'Up to 30% discount, gear up for adventure.',
                    },
                ],
                previous() {
                    if (this.currentSlideIndex > 1) {
                        this.currentSlideIndex = this.currentSlideIndex - 1
                    } else {
                        // If it's the first slide, go to the last slide
                        this.currentSlideIndex = this.slides.length
                    }
                },
                next() {
                    if (this.currentSlideIndex < this.slides.length) {
                        this.currentSlideIndex = this.currentSlideIndex + 1
                    } else {
                        // If it's the last slide, go to the first slide
                        this.currentSlideIndex = 1
                    }
                },
            }
        }
    </script>

    <div x-data="CarrouselComponent()" class="relative w-full overflow-hidden">

        <!-- previous button -->
        <button type="button"
                class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                aria-label="previous slide" x-on:click="previous()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                 stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
            </svg>
        </button>

        <!-- next button -->
        <button type="button"
                class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                aria-label="next slide" x-on:click="next()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                 stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
        </button>

        <!-- slides -->
        <!-- Change aspect-[3/1] to match your images aspect ratio -->
        <div class="relative aspect-[3/1] w-full">
            <template x-for="(slide, index) in slides">
                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                     x-transition.opacity.duration.700ms>
                    <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                         x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt"/>
                </div>
            </template>
        </div>

        <!-- indicators -->
        <div
            class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-slate-900/75"
            role="group" aria-label="slides">
            <template x-for="(slide, index) in slides">
                <button class="size-2 cursor-pointer rounded-full transition bg-slate-700 dark:bg-slate-300"
                        x-on:click="currentSlideIndex = index + 1"
                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-700 dark:bg-slate-300' : 'bg-slate-700/50 dark:bg-slate-300/50']"
                        x-bind:aria-label="'slide ' + (index + 1)"></button>
            </template>
        </div>
    </div>
    <!-- END COMPONENT CARROUSEL -->


    <!-- CONTAINER WITH PILLS -->
    <div class="mt-10 flex flex-col items-center">
        <p class="font-medium text-2xl lg:text-4xl">Nuestros Servicios</p>
        <div class="w-full md:max-w-5xl flex flex-wrap text-black font-semibold justify-center gap-10 mt-8">
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>APRESTOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>SUAVIZADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>CALANDRADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>TUMBLEADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>TERMOFIJADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>VAPORIZADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>CALANDRADOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>HIDROFUGOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>INNIFUGOS</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>ANTIPILING</p></div>
            <div class="w-max h-max p-5 bg-gray-100 rounded-md"><p>ETC</p></div>
        </div>
    </div>
    <!-- END CONTAINER WITH PILLS -->




    <!-- CONTAINER SERVICES -->
    <div class="mt-10 py-16 bg-gray-100">
        <div class="container m-auto px-6 md:px-12 xl:px-0">
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold">Acabados Textiles</h3>
                        <p class="mb-6">Desde nuestros inicios en el año 1988, nuestra política a sido ofrecer la máxima calidad. La experiencia y la profesionalidad del personal altamente cualificado nos permiten ofrecer la máxima calidad al mejor precio.</p>
                        <a href="#" class="block font-medium">Know more</a>
                    </div>
                    <img src="http://www.calandratex.es/wp-content/uploads/2016/01/rollos.jpg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold">I+D+I</h3>
                        <p class="mb-6">Estamos en constante desarrollo e ivestigación de nuevos procesos productivos, materiales y medioambientales.</p>
                        <a href="#" class="block font-medium">Know more</a>
                    </div>
                    <img src="http://www.calandratex.es/wp-content/uploads/2016/01/laboratorio.jpg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold">Responsables con el Medio Ambiente</h3>
                        <p class="mb-6">Realizamos un uso racional de los recursos naturales y un mejoramiento ambiental de nuestros procesos gracias al uso de productos químicos lo menos nocivos para el Medio Ambiente</p>
                        <a href="#" class="block font-medium">Know more</a>
                    </div>
                    <img src="http://www.calandratex.es/wp-content/uploads/2016/01/Medio-ambiente.jpg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER WHO ARE WE -->




    <!-- CONTAINER WHO ARE WE -->
    <div class="flex mt-10">
        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <!-- service block -->
            <div class="py-8 px-12 mb-12 bg-gray-100 rounded-md border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                <x-heroicon-o-building-library class="w-8 h-8 inline-block mb-4"/>
                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Desde 1988</h3>
                <p class="text-gray-500">Especialidados en Acabados Textiles.</p>
            </div>
            <!-- end service block -->
        </div>
        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
            <!-- service block -->
            <div class="py-8 px-12 mb-12 bg-gray-100 rounded-md border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                <x-heroicon-o-chat-bubble-bottom-center-text class="w-8 h-8 inline-block mb-4"/>
                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Nuestra política</h3>
                <p class="text-gray-500">Ofrecer la máxima calidad y el mejor servicio.</p>
            </div>
            <!-- end service block -->
        </div>
        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
            <!-- service block -->
            <div class="py-8 px-12 mb-12 bg-gray-100 rounded-md border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                <x-heroicon-o-globe-europe-africa class="w-8 h-8 inline-block mb-4"/>
                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Autorización Ambiental Integrada</h3>
                <p class="text-gray-500">361-08/AAI/CV</p>
            </div>
            <!-- end service block -->
        </div>
    </div>
    <!-- END CONTAINER WHO ARE WE -->

    <!-- BLOG CARDS -->
    <div class="mt-10 py-16 bg-gray-100 flex justify-around">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
            <a href="#">
                <img class="rounded-t-lg" src="http://www.calandratex.es/wp-content/uploads/2019/09/image-1.png" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Ayuda Generalitat 2023</h5>
                </a>
                <p class="font-normal text-gray-700 mb-3">CALANDRADOS TEXTILES, S.L. ha recibido una ayuda por importe de 53.816 euros con número de expediente INPYME/2023/614 para el desarrollo del proyecto consistente en implementar una nueva DEPURADORA PARA AGUAS RESIDUALES GENERADAS EN EL PROCESO TEXTIL.</p>
                <a class="text-white bg-[#00c2a9] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                    Read more
                </a>
            </div>
        </div>
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
            <a href="#">
                <img class="rounded-t-lg" src="http://www.calandratex.es/wp-content/uploads/2019/09/image-1.png" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Ayuda Generalitat 2022</h5>
                </a>
                <p class="font-normal text-gray-700 mb-3">CALANDRADOS TEXTILES, S.L. ha recibido una ayuda por importe de 19.653,20 €, con número de expediente INPYME/2022/87 para el desarrollo del proyectotitulado “MODERNIZACIÓN DEL PROCESO TEXTIL CON TECNOLOGÍA EFICIENTE PARA LA FABRICACIÓN DE NUEVOS PRODUCTOS.”</p>
                <a class="text-white bg-[#00c2a9] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                    Read more
                </a>
            </div>
        </div>
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
            <a href="#">
                <img class="rounded-t-lg" src="http://www.calandratex.es/wp-content/uploads/2019/09/image-1.png" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Ayuda Generalitat 2024</h5>
                </a>
                <p class="font-normal text-gray-700 mb-3">...</p>
                <a class="text-white bg-[#00c2a9] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                    Read more
                </a>
            </div>
        </div>
    </div>
    <!-- END BLOG CARDS -->


@endsection
