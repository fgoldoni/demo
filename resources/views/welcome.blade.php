<x-app-layout>
    <!-- Section 1 -->
    <section class="relative" style="background-image: url('https://cdn.devdojo.com/images/february2021/directory-bg.jpg')">
        <div class="absolute inset-0 bg-gradient-to-b from-{{ config('setting.color') }}-900 to-transparent opacity-50"></div>

        <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
            <div class="flex flex-wrap text-white">
                <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">

                    <h1 class="mt-0 mb-2 text-3xl font-bold text-white sm:text-5xl lg:text-7xl">Find  <x-typing-effect></x-typing-effect> </h1>
                    <p class="mt-0 mb-4 text-base text-white sm:text-lg lg:text-xl">
                        Your job search starts and ends with us.
                    </p>

                </div>
            </div>
        </div>

        <div class="relative z-30 h-48 px-10 bg-gray-50 lg:h-32">
            <form onsubmit="return false;" class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
                <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="What Are You Searching For?">
                </div>
                <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
                <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="Location?">
                    <svg class="absolute right-0 w-6 h-6 mr-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="w-full h-full lg:w-auto">
                    <button type="submit" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-{{ config('setting.color') }}-600 border border-transparent rounded-md shadow-lg hover:bg-{{ config('setting.color') }}-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ config('setting.color') }}-600 lg:w-64 transition">SEARCH</button>
                </div>
            </form>
        </div>

    </section>


    <!-- Section 2 -->
    <section class="bg-white pt-7 pb-14">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Trusted by top-leading companies.</h1>
            <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9">
                </div>
            </div>
        </div>
    </section>


    <!-- Section 3 -->
    <section class="py-12 sm:py-16 bg-white">
        <div class="max-w-7xl px-10 mx-auto sm:text-center">
            <p class="text-blue-500 font-medium uppercase">Our Application Integrations</p>
            <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3">Connect with Your Favorite Apps.</h2>
            <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We've built integrations with some of your favorite services.<br class="lg:hidden hidden sm:block"> Check'em out below 👇</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M159.999 128.056a76.55 76.55 0 0 1-4.915 27.024 76.745 76.745 0 0 1-27.032 4.923h-.108c-9.508-.012-18.618-1.75-27.024-4.919A76.557 76.557 0 0 1 96 128.056v-.112a76.598 76.598 0 0 1 4.91-27.02A76.492 76.492 0 0 1 127.945 96h.108a76.475 76.475 0 0 1 27.032 4.923 76.51 76.51 0 0 1 4.915 27.02v.112zm94.223-21.389h-74.716l52.829-52.833a128.518 128.518 0 0 0-13.828-16.349v-.004a129 129 0 0 0-16.345-13.816l-52.833 52.833V1.782A128.606 128.606 0 0 0 128.064 0h-.132c-7.248.004-14.347.62-21.265 1.782v74.716L53.834 23.665A127.82 127.82 0 0 0 37.497 37.49l-.028.02A128.803 128.803 0 0 0 23.66 53.834l52.837 52.833H1.782S0 120.7 0 127.956v.088c0 7.256.615 14.367 1.782 21.289h74.716l-52.837 52.833a128.91 128.91 0 0 0 30.173 30.173l52.833-52.837v74.72a129.3 129.3 0 0 0 21.24 1.778h.181a129.15 129.15 0 0 0 21.24-1.778v-74.72l52.838 52.837a128.994 128.994 0 0 0 16.341-13.82l.012-.012a129.245 129.245 0 0 0 13.816-16.341l-52.837-52.833h74.724c1.163-6.91 1.77-14 1.778-21.24v-.186c-.008-7.24-.615-14.33-1.778-21.24z" fill="#FF4A00"></path></svg>
                    <p class="font-bold mt-4">Zapier</p>
                    <p class="mt-2 text-sm text-gray-500">Connect to 1,000+ apps</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M19.712.133a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386h5.376V5.52A5.381 5.381 0 0 0 19.712.133m0 14.365H5.376A5.381 5.381 0 0 0 0 19.884a5.381 5.381 0 0 0 5.376 5.387h14.336a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386" fill="#36C5F0"></path><path d="M53.76 19.884a5.381 5.381 0 0 0-5.376-5.386 5.381 5.381 0 0 0-5.376 5.386v5.387h5.376a5.381 5.381 0 0 0 5.376-5.387m-14.336 0V5.52A5.381 5.381 0 0 0 34.048.133a5.381 5.381 0 0 0-5.376 5.387v14.364a5.381 5.381 0 0 0 5.376 5.387 5.381 5.381 0 0 0 5.376-5.387" fill="#2EB67D"></path><path d="M34.048 54a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386h-5.376v5.386A5.381 5.381 0 0 0 34.048 54m0-14.365h14.336a5.381 5.381 0 0 0 5.376-5.386 5.381 5.381 0 0 0-5.376-5.387H34.048a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386" fill="#ECB22E"></path><path d="M0 34.249a5.381 5.381 0 0 0 5.376 5.386 5.381 5.381 0 0 0 5.376-5.386v-5.387H5.376A5.381 5.381 0 0 0 0 34.25m14.336-.001v14.364A5.381 5.381 0 0 0 19.712 54a5.381 5.381 0 0 0 5.376-5.387V34.25a5.381 5.381 0 0 0-5.376-5.387 5.381 5.381 0 0 0-5.376 5.387" fill="#E01E5A"></path></g></svg>
                    <p class="font-bold mt-4">Slack</p>
                    <p class="mt-2 text-sm text-gray-500">Messaging Platform</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 262" fill="none"><path d="M192.277 86.567V55.5a23.953 23.953 0 0 0 13.815-21.594v-.727a23.998 23.998 0 0 0-23.934-23.934h-.726a24 24 0 0 0-23.935 23.934v.727A23.949 23.949 0 0 0 171.312 55.5v31.132a67.887 67.887 0 0 0-32.278 14.202l-85.44-66.541A27.259 27.259 0 1 0 40.828 50.9l84.004 65.395a68.079 68.079 0 0 0 1.049 76.757l-25.564 25.565a21.93 21.93 0 0 0-6.343-1.033 22.187 22.187 0 0 0-20.502 13.699 22.19 22.19 0 1 0 42.693 8.492 21.858 21.858 0 0 0-1.033-6.343l25.29-25.29a68.198 68.198 0 0 0 58.778 11.746 68.196 68.196 0 0 0 45.342-39.203 68.198 68.198 0 0 0-3.13-59.858 68.188 68.188 0 0 0-49.183-34.26h.048Zm-10.523 102.354a34.988 34.988 0 0 1-34.225-41.871 34.99 34.99 0 0 1 69.295 6.898 34.99 34.99 0 0 1-34.989 34.989" fill="#FF7A59"></path></svg>
                    <p class="font-bold mt-4">Hubspot</p>
                    <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 190" fill="none"><path d="M115.482 49.956V189.13H0L115.482 49.956ZM115.482 0A57.587 57.587 0 0 1 98.57 40.756a57.793 57.793 0 0 1-40.83 16.882c-15.313 0-30-6.073-40.828-16.882A57.586 57.586 0 0 1 0 0h115.482ZM134.507 189.13a57.586 57.586 0 0 1 16.912-40.757 57.792 57.792 0 0 1 40.829-16.881c15.313 0 30 6.072 40.828 16.881a57.586 57.586 0 0 1 16.912 40.757H134.507ZM134.507 139.174V0h115.494L134.507 139.174Z" fill="#03363D"></path></svg>
                    <p class="font-bold mt-4">Zendesk</p>
                    <p class="mt-2 text-sm text-gray-500">Customer Messaging</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 215" fill="none"><path d="M0 162.02V69.962c0-3.137 3.137-5.378 6.095-4.302l106.849 41.592c3.047 1.165 3.316 5.378.448 6.812L6.633 166.144C3.585 167.668 0 165.427 0 162.02Z" fill="#F82B60"></path><path d="M123.611 94.792 16.942 51.766c-3.406-1.434-3.406-6.275 0-7.709L119.31 1.479c4.661-1.972 9.95-1.972 14.7 0l102.367 42.578c3.406 1.434 3.406 6.275 0 7.709L130.155 94.792a8.3 8.3 0 0 1-6.544 0Z" fill="#FCB400"></path><path d="m139.835 214.369 107.386-41.323c1.703-.628 2.778-2.241 2.778-4.034V69.424c0-3.047-2.958-5.11-5.736-4.033l-107.387 41.323c-1.703.627-2.778 2.241-2.778 4.033v99.588c0 3.048 2.958 5.109 5.737 4.034Z" fill="#18BFFF"></path><path d="M112.944 107.252 6.095 65.66c-1.434-.538-2.868-.269-4.033.448l75.295 65.525 36.035-17.569c2.868-1.523 2.599-5.736-.448-6.812Z" fill="#BA2048"></path></svg>
                    <p class="font-bold mt-4">Airtable</p>
                    <p class="mt-2 text-sm text-gray-500">Data Management</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250" fill="none"><path d="m146.101 236.335-42.529-41.47 91.337-93.269 44.032 43.155-92.84 91.584Z" fill="#8AB4F8"></path><path d="M146.283 52.982 103.907 9.717l-92.659 91.779c-11.944 11.944-11.944 31.308 0 43.265l91.267 91.863 43.156-40.37-69.536-73.125 70.148-70.147Z" fill="#4285F4"></path><path d="M238.329 102.209 146.45 10.332c-11.958-11.957-31.35-11.957-43.308 0-11.959 11.958-11.959 31.35 0 43.308l91.879 91.876c11.958 11.958 31.35 11.958 43.308 0 11.959-11.958 11.959-31.349 0-43.307Z" fill="#8AB4F8"></path><path d="M124.092 246.372c16.53 0 29.93-13.4 29.93-29.93 0-16.529-13.4-29.929-29.93-29.929-16.531 0-29.93 13.4-29.93 29.929 0 16.53 13.399 29.93 29.93 29.93Z" fill="#246FDB"></path></svg>
                    <p class="font-bold mt-4">Google Tag Manager</p>
                    <p class="mt-2 text-sm text-gray-500">Web Tag Manager</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M362.9 243.5c3.1-.4 6.2-.4 9.3 0 1.7-3.8 2-10.5.5-17.6-2.2-10.7-5.3-17.2-11.5-16.2s-6.5 8.8-4.2 19.5c1.1 5.9 3.4 11.1 5.9 14.3zm-53.7 8.5c4.5 2 7.2 3.3 8.3 2.1 1.9-1.9-3.5-9.4-12.1-13.1-10.2-4.2-21.8-2.8-30.7 3.7-3 2.2-5.8 5.2-5.4 7.1.9 3.7 10-2.7 22.7-3.5 6.9-.5 12.7 1.7 17.2 3.7zm-9 5.1c-9.1 1.4-15 6.5-13.5 10.1.9.3 1.2.8 5.2-.8 6-2.3 12.4-2.9 18.8-2 2.9.3 4.3.5 5-.5 1.3-2.1-5.8-7.9-15.5-6.8zm54.2 17.2c3.4-6.9-10.9-14-14.3-7-3.4 6.9 11 13.9 14.3 7zm15.7-20.5c-7.7-.1-8 15.8-.3 16 7.8 0 8.1-15.9.3-16zm-219.2 79c-1.3.3-6 1.5-8.5-2.4-5.2-8 11.1-20.4 3-35.9-9.1-17.5-27.9-13.6-35.1-5.6-8.7 9.6-8.7 23.6-5 24.1 4.3.6 4.1-6.5 7.4-11.7 3.9-6 11.8-7.7 17.8-3.8 0 0 .1 0 .1.1 11.6 7.6 1.4 17.8 2.3 28.7 1.4 16.7 18.5 16.4 21.6 9 .4-.7.3-1.7-.2-2.3 0 1.1.6-1.1-3.4-.2zm300.4-17.1c-3.4-11.8-2.6-9.2-6.8-20.6 2.5-3.7 15.3-24.1-3.1-43.3-10.4-10.9-34-16.6-41.2-18.6-1.5-11.4 4.7-58.8-21.6-83.2 20.8-21.6 33.8-45.4 33.8-65.8-.1-39.2-48.3-51.1-107.7-26.5L292.1 63c-.1-.1-22.8-22.3-23.1-22.6-67.6-59-279.4 176.3-211.7 233.5l14.8 12.5c-4 10.7-5.4 22.2-4.1 33.6 3.4 33.5 36.1 60.6 67.7 60.5 57.9 133.4 268.5 133.6 323 3 1.7-4.5 9.1-24.7 9.1-42.5s-10.1-25.3-16.5-25.3zM134.5 364c-22.9-.6-47.6-21.2-50-45.6-6.2-61.4 74.4-75.4 84.2-12.4 4.6 29.7-4.7 58.6-34.2 58zM116 249.5c-15.2 3-28.6 11.6-36.8 23.5-4.9-4.1-14-12-15.6-15-13-24.9 14.3-73.2 33.4-100.4C144.2 90.2 218.1 39.2 252.4 48.4c5.6 1.6 24 22.9 24 22.9s-34.2 19-65.9 45.5c-42.9 33-75.2 80.8-94.5 132.7zm239.4 101.4s-35.8 5.3-69.7-7.1c6.2-20.2 27.1 6.1 96.6-13.8 15.3-4.4 35.4-13 51.1-25.4 3.4 7.8 5.8 16 7.1 24.3 3.7-.7 14.3-.5 11.5 18.1-3.3 19.9-11.8 36.1-26 51-8.9 9.6-19.5 17.6-31.2 23.4-6.5 3.4-13.4 6.3-20.4 8.6-53.6 17.5-108.5-1.7-126.3-43.1-1.4-3.2-2.6-6.4-3.6-9.8-7.5-27.3-1.1-60 18.9-80.6 1.2-1.3 2.5-2.9 2.5-4.8-.2-1.7-.8-3.3-1.9-4.6-7-10.2-31.3-27.5-26.4-61 3.5-24.1 24.5-41 44.2-40l5 .3c8.5.5 15.9 1.6 22.9 1.9 11.7.5 22.3-1.2 34.7-11.6 4.2-3.5 7.6-6.6 13.3-7.5 4.7-1.2 9.6-.3 13.6 2.2 10 6.7 11.4 22.8 11.9 34.6.3 6.7 1.1 23.1 1.4 27.7.6 10.7 3.4 12.2 9.1 14 3.2 1.1 6.2 1.8 10.5 3.1 13.2 3.7 21 7.5 26.1 12.3 2.6 2.5 4.2 5.8 4.8 9.3 1.6 11.4-8.8 25.5-36.4 38.2-46.8 21.7-93.9 14.5-100.7 13.7-20.2-2.7-31.7 23.4-19.6 41.2 22.7 33.5 122.7 20 151.7-21.4.7-1 .1-1.6-.7-1-41.9 28.6-97.3 38.3-128.8 26.1-4.8-1.9-14.8-6.5-16-16.7 43.7 13.5 71.2.7 71.2.7s2.2-2.6-.4-2.3zM203.2 157.3c16.8-19.4 37.4-36.3 56-45.7.3-.2.8-.1 1 .3.1.2.1.5 0 .7-1.5 2.7-4.3 8.4-5.2 12.7-.1.4.2.8.6.9.2.1.4 0 .6-.1 11.5-7.8 31.6-16.3 49.1-17.3.4 0 .8.3.8.7 0 .3-.1.5-.3.7-2.9 2.2-5.5 4.8-7.7 7.8-.2.3-.2.8.2 1 .1.1.3.1.4.1 12.3.1 29.7 4.4 41.1 10.8.8.4.2 1.9-.6 1.7-69.7-16-123.4 18.6-134.8 26.9-.4.2-.8.1-1.1-.2-.3-.4-.3-.8-.1-1z"></path></svg>
                    <p class="font-bold mt-4">Mailchimp</p>
                    <p class="mt2 text-sm text-gray-500">Email Marketing</p>
                </div>
                <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="h-16 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 343" fill="none"><path d="M163.818 0H23.736C10.59 0 0 10.663 0 23.736v294.771c0 13.146 10.663 23.737 23.736 23.737H226.19c13.147 0 23.737-10.664 23.737-23.737V85.159h-86.109V0Z" fill="#34A853"></path><path d="M250.001 85.16h-86.182V0l86.182 85.16Z" fill="#188038"></path><path d="M46.89 132.194V245.18h156.149V132.194H46.889Zm136.722 19.354v27.388h-49.08v-27.388h49.08Zm-68.507 0v27.388H66.317v-27.388h48.788Zm-48.788 74.131v-27.388h48.788v27.388H66.317Zm68.215 0v-27.388h49.08v27.388h-49.08Z" fill="#fff"></path></svg>
                    <p class="font-bold mt-4">Google Sheets</p>
                    <p class="mt-2 text-sm text-gray-500">Spreadsheet</p>
                </div>
            </div>
            <a href="#_" class="px-8 py-4 sm:w-auto w-full text-center text-base font-medium inline-block rounded text-white hover:bg-blue-600 bg-blue-500">View All Integrations</a>
        </div>
    </section>

    <!-- Section 1 -->
    <section class="w-full flex bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center space-y-5">
                <h2 class="text-base font-semibold text-pink-400 tracking-wide uppercase">Get started today</h2>
                <div class="inline-flex items-end justify-center w-full text-center mx-auto">
                    <img src="https://cdn.devdojo.com/tails/avatars/067.jpg" class="absolute transform translate-x-24 ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/019.jpg" class="absolute transform -translate-x-24 -ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/036.jpg" class="absolute transform -translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/008.jpg" class="absolute transform translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/003.jpg" class="rounded-full w-20 h-20 md:w-24 md:h-24 border-4 border-white relative">
                </div>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Make a Difference with Your Online
                    <span class="px-2 py-1 relative inline-block">
                        <svg class="stroke-current bottom-0 absolute text-{{ config('setting.color') }}-400 -translate-x-2" viewBox="0 0 410 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6.4c16.8 16.8 380.8-11.2 397.6 5.602" stroke-width="11.2" fill="none" fill-rule="evenodd" stroke-linecap="round"></path>
                        </svg>
                        <span class="relative">Resume!</span>
                    </span>
                </p>
                <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-500">Your resume in minutes with JobHunt resume assistant is ready!</p>
                <a href="#_" class="text-white px-8 py-4 inline-block mt-5 font-medium text-lg hover:bg-{{ config('setting.color') }}-600 bg-{{ config('setting.color') }}-500 rounded">Create an Account</a>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="pt-16 pb-20 sm:pt-24 sm:pb-32 bg-gray-50">
        <div class="items-center max-w-6xl px-12 mx-auto sm:px-20 md:px-5">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full max-w-md xl:max-w-xl">
                        <h2 class="relative mb-6 text-3xl font-semibold leading-tight tracking-tight xl:font-bold lg:text-6xl xl:text-7xl">
                            Beautiful designs that help you look pretty.
                        </h2>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Automated Workflows</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Drag'n Drop Interface</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Unlimited API Calls</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">24/7 Customer Support</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">99.9% Uptime</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Analytics Dashboard</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Fully Customizable</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Seamless Integrations</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">So Much More!</span>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="relative w-full px-3 mb-12 lg:-ml-20 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <img class="absolute top-0 right-0 z-10 hidden mx-auto -mt-32 rounded-lg shadow-2xl opacity-100 xl:-mr-12 sm:max-w-xs lg:max-w-sm lg:block" src="https://cdn.devdojo.com/images/february2021/sky-bg.jpg">
                    <img class="relative z-20 w-full mx-auto mt-3 rounded-lg shadow-2xl sm:max-w-none lg:-ml-10 lg:max-w-sm" src="https://cdn.devdojo.com/images/february2021/tesla-img.jpg" alt="feature image">
                    <img class="absolute bottom-0 right-0 z-10 hidden mx-auto -mb-48 rounded-lg shadow-2xl xl:-mr-12 sm:max-w-xs lg:max-w-sm lg:block" src="https://cdn.devdojo.com/images/february2021/bg-colorful1.jpg">
                </div>
            </div>
        </div>
    </section>


    <!-- Section 1 -->
    <section class="w-full py-12 sm:py-20" x-data="{ page: 1, total_pages: 3 }">
        <div class="flex flex-col items-center justify-center mx-auto xl:flex-row max-w-7xl">
            <div class="relative flex flex-col items-start justify-center w-full h-full max-w-2xl px-6 mx-auto xl:max-w-none xl:w-2/5">

                <h2 class="text-3xl font-normal leading-none text-gray-900 sm:w-4/5 sm:text-6xl text-3">New stories from the team.</h2>
                <div class="w-20 h-1 mt-3 ml-1 bg-{{ config(('setting.color')) }}-600 rounded-full"></div>
                <div class="relative flex mt-6 space-x-2">
                    <div @click="if(page > 1){ page-=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </div>
                    <div @click="if(page < total_pages){ page+=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
                <svg class="absolute top-0 right-0 hidden w-auto h-24 mt-20 text-indigo-600 fill-current sm:block xl:mr-5 xl:-mt-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 74"><defs></defs><g fill-rule="nonzero"><path d="M43.13 71.58c.29-.025.58-.025.87 0 .3 0 .71-.14 1-.17.54 0 1.08-.19 1.62-.23l2.3-.17 4.65-.25 6.47-.26h.68c3-.15 6-.3 9-.53 1.68-.14 5.83-.49 6.21-.52.63 0 4.36-.53 5-.63.25 0 1.95-.35 3.35-.58-.09-1-.55-1.77-.62-2.71-4.33.66-8.7 1.18-13 1.51-5.34.4-10.71.66-16.08 1l-7 .39c-1.4 0-2.82-.31-4.17-.26a2 2 0 00-1 .31c-.3.21-.4.16-.5.3a1.18 1.18 0 00-.12.81c.06.84.66 2.11 1.34 1.99zM106.33 62.04l.5-.23c.31-.13.72-.33 1.16-.56.88-.46 1.94-1 2.59-1.38l.56-.31a31.87 31.87 0 002.81-1.74 48.77 48.77 0 0014-13.59 38.22 38.22 0 004.34-8.87 28.9 28.9 0 001.51-9.86 31.56 31.56 0 00-3.3-13.46 23.9 23.9 0 00-3.62-5.22 20.47 20.47 0 00-2.38-2.22c-.42-.34-.89-.63-1.33-.94a10.88 10.88 0 00-1.38-.85A18.21 18.21 0 00109.16.92c-.5.11-1 .22-1.45.33-.45.11-.88.31-1.3.47-.42.16-.86.3-1.27.49-.41.19-.8.41-1.21.61A27.71 27.71 0 0098.5 6.5l-1.51 1.42-1.59 1.84c-.51.66-1 1.36-1.44 2-.44.64-.75 1.28-1 1.78a22.66 22.66 0 00-2 5 23.44 23.44 0 00-.82 5.31 26.71 26.71 0 00.72 7c.22 1.16.65 2.26 1 3.38a33.94 33.94 0 001.41 3.21 36.93 36.93 0 008.44 10.95 47.5 47.5 0 005.77 4.43 35.5 35.5 0 0010.02 4.59 86.41 86.41 0 0010 2.09 84.59 84.59 0 0018.2.51c4.8-.31 9.33-.8 13.8-1.39 2.25-.3 4.49-.63 6.76-1l3.43-.59.83-.11a15.59 15.59 0 001.98-.25 46 46 0 014.66-.82c.69-.12 2.24-.87 2.34-1.35.06-.28-.19-.56-.15-.85.09-.65-1.16-1.47-2.06-1.25-.9.22-1.89.51-2.84.73-.95.22-2 .37-3 .62a9.82 9.82 0 00-1.16.38c-.19.06-.39.13-.58.18l-.29.08-.69.12c-3.55.62-7 1.3-10.81 1.68-5.54.53-11.42 1.31-17.15 1.37a73.61 73.61 0 01-18.84-1.81 41.54 41.54 0 01-16.81-8.06 37.32 37.32 0 01-7.9-8.78 27.1 27.1 0 01-4.12-10.8C91.25 17.6 98.76 6.5 108.89 3.76a15.83 15.83 0 0114.56 3.4 23.24 23.24 0 017.36 13.74 28.32 28.32 0 01.29 8 28.05 28.05 0 01-2.06 7.7 37.16 37.16 0 01-5 8.63 39.08 39.08 0 01-7 7l-.87.66-.14.11c-1.69 1.29-3.61 2.56-5.55 3.75a54.34 54.34 0 01-12 5.4c-.42 1-1 2.35-.6 3.17 1.18-.35 2.25-.69 3.52-1.19.8-.28 1.61-.63 2.44-1 .83-.37 1.66-.72 2.49-1.09z"></path><path d="M46.93 71a8.72 8.72 0 011.16 0c.51 0 1.48.05 2 0l8.52-.5c8.84-.54 17.78-1 26.66-2.45 2.33-.38 4.67-.8 7-1.29a56.65 56.65 0 0010.45-3.26 85.2 85.2 0 009.11-4.57 48.44 48.44 0 0014-12c.86-1 1.57-2.14 2.33-3.2s1.34-2.12 1.89-3.23a35.91 35.91 0 002.81-7.11 31.08 31.08 0 00.4-12.78 6.21 6.21 0 01-1.89 2.64 25.44 25.44 0 01-1 9.32l-.09.26a21.31 21.31 0 01-.69 2 41.94 41.94 0 01-3.72 7.43 41.78 41.78 0 01-5.3 6.63 52.72 52.72 0 01-15.45 10.61 73.71 73.71 0 01-18.17 5.41 207.23 207.23 0 01-24.09 2.59l-15.92.87a4.07 4.07 0 01-.01 2.63zM21.1 71.79a1.43 1.43 0 01-.27-1.49 2.72 2.72 0 011.81-1.54c1-.14 2.13.44 3.2.44 1.47 0 2.94-.27 4.42-.39 1-.08 1.92 0 2.86-.15a17 17 0 012.57-.11 5.7 5.7 0 001.17 0 3 3 0 011.12-.16c1 .18 1.3 2.22.71 2.91-.45.53-1.56.36-2.18.36h-2.67c-2.13.13-4.28 0-6.41.1-.91 0-1.8.24-2.7.35-.9.11-1.7.15-2.56.2a1.31 1.31 0 01-1.07-.52zM7.5 71.7a3.09 3.09 0 010-1 1.26 1.26 0 01.4-.74 2.18 2.18 0 012.16-.49 9.2 9.2 0 002.87 0 9.22 9.22 0 013.1 0 2 2 0 011.17.72c.46.6.61 1.35-.14 1.8a5.18 5.18 0 01-2.91.44c-1.34-.13-2.75.53-4.15.76a2 2 0 01-1.34-.22A2.49 2.49 0 017.5 71.7zM.01 71.57c.082-.29.2-.569.35-.83a1.91 1.91 0 013.27-.25c.54.63.61 2.26-.16 2.72a4.27 4.27 0 01-1.32.44c-1.12.1-2.05-.23-2.14-2.08z"></path></g></svg>

            </div>
            <div class="box-content relative flex items-center w-full h-auto max-w-2xl py-5 mx-auto overflow-hidden xl:w-3/5 rounded-xl bg-gradient-to-r from-transparent via-transparent to-gray-100">

                <!-- Slide Page 1 -->
                <div class="flex px-6 space-x-6 transition duration-500 ease-out transform xl:pl-6 h-94" :class="{ '-translate-x-full pr-10' : page > 1, 'relative': page == 1, 'absolute': page != 1 }">

                    <!-- story 1 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 2 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Page 2 -->
                <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ '-translate-x-full pr-10' : page > 2, 'translate-x-full' : page < 2, 'translate-x-0 ml-5' : page == 2, 'relative': page == 2, 'absolute': page != 2 }" x-cloak="">

                    <!-- story 3 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 4 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slide page 2 -->

                <!-- Slide Page 3 -->
                <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ 'translate-x-full' : page < 3, 'translate-x-0 ml-5' : page == 3, 'relative': page == 3, 'absolute': page != 3 }" x-cloak="">

                    <!-- story 5 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 6 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-6.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slide page 3 -->

            </div>
        </div>
    </section>

    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Solutions</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Marketing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Analytics </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Commerce </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Insights </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Documentation </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Guides </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> API Status </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> About </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Blog </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Jobs </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Press </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Partners </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Claim </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Privacy </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Terms </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 xl:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Language &amp; Currency</h3>
                    <form class="mt-4 sm:max-w-xs">
                        <fieldset class="w-full">
                            <label for="language" class="sr-only">Language</label>
                            <div class="relative">
                                <select id="language" name="language" class="appearance-none block w-full bg-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option selected>English</option>
                                    <option>French</option>
                                    <option>German</option>
                                    <option>Japanese</option>
                                    <option>Spanish</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="mt-4 w-full">
                            <label for="currency" class="sr-only">Currency</label>
                            <div class="relative">
                                <select id="currency" name="currency" class="appearance-none block w-full bg-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>ARS</option>
                                    <option selected>AUD</option>
                                    <option>CAD</option>
                                    <option>CHF</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                    <option>JPY</option>
                                    <option>USD</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-8 lg:flex lg:items-center lg:justify-between xl:mt-0">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Subscribe to our newsletter</h3>
                    <p class="mt-2 text-base text-gray-500">The latest news, articles, and resources, sent to your inbox weekly.</p>
                </div>
                <form class="mt-4 sm:flex sm:max-w-md lg:mt-0">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 py-2 px-4 text-base rounded-md text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400 sm:max-w-xs" placeholder="Enter your email">
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2020 Workflow, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>


</x-app-layout>
