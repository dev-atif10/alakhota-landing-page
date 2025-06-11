@extends('layouts.app')

@section('content')
<section class="hero-section relative z-10" style="background-image: url('assets/images/hero-section.png');">
    <div class="container">
        <div class="flex flex-col items-center space-y-16 pb-20">
            <div class="w-full lg:w-2/3 text-content flex flex-col items-center text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 hero-title">
                    <strong class="part1"></strong>
                    <strong class="highlighted text-main"></strong>
                    <strong class="part2"></strong>
                </h2>
                <p class="text-sm mb-8 leading-relaxed text-gray hero-richText"></p>
                <div class="py-4"></div>
                <div class="flex justify-center">
                    <a href="{{ route('join-request') }}" class="block btn-primary rounded-full font-bold py-3 px-6 transition duration-300">
                        تقديم طلب الإنضمام
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/3 flex justify-center lg:justify-end left-images">
                <div class="w-full h-full flex items-center justify-between hero-partners">
                    <img src="assets/images/logo.svg" alt="شعار شريك" loading="lazy">
                    <img src="assets/images/sela-logo.svg" alt="شعار شريك" loading="lazy">
                    <img src="assets/images/khotah-logo.png" alt="شعار شريك" loading="lazy">
                    <img src="assets/images/roaia-logo.png" alt="شعار شريك" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-v-e834c0fc="" id="about-section" class="about-section py-20">
    <div class="container flex items-center gap-16 flex-col lg:flex-row">
        <div data-v-e834c0fc="" class="content">
            <div data-v-e834c0fc="">
                <div data-v-e834c0fc="" class="relative">
                    <div data-v-e834c0fc="">
                        <h1 data-v-e834c0fc="" class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 about-title">
                        </h1>
                    </div>
                </div>
                <div data-v-e834c0fc="" class="relative space-y-8">
                    <p data-v-e834c0fc="" class="text-lg text-gray leading-relaxed about-richText">
                    </p>
                    <br data-v-e834c0fc="" />
                    <div data-v-e834c0fc="" class="flex">
                        <a href="{{ route('join-request') }}" class="block btn-primary inverted rounded-full font-bold py-3 px-6 transition duration-300">
                            <span data-v-e834c0fc="">تقديم طلب الإنضمام</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-e834c0fc="" class="about-banner relative">
            <img src="assets/images/about-banner.png" alt="صورة عن المشروع" loading="eager">
            <div class="data-box l-box bg-white rounded-2xl shadow-md flex justify-center items-center gap-x-3 gap-y-3">
                <div class="logo-circle p-10 rounded-full flex justify-center items-center">
                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M7 21.2949H15H15C17.8284 21.2949 19.2426 21.2949 20.1213 20.343C21 19.3911 21 17.8591 21 14.7949C21 11.7308 21 10.1987 20.1213 9.24683C19.3529 8.41442 18.175 8.30993 16 8.29681H6C3.82497 8.30993 2.64706 8.41442 1.87868 9.24683C1 10.1987 1 11.7308 1 14.7949C1 17.8591 1 19.3911 1.87868 20.343C2.75736 21.2949 4.17157 21.2949 6.99999 21.2949H7Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 0.544983C9.20507 0.544983 7.75 2.00006 7.75 3.79498C7.75 5.33177 8.81665 6.61943 10.25 6.95802V10.295C10.25 10.7092 10.5858 11.045 11 11.045C11.4142 11.045 11.75 10.7092 11.75 10.295V6.95802C13.1833 6.61943 14.25 5.33177 14.25 3.79498C14.25 2.00006 12.7949 0.544983 11 0.544983ZM9.25 3.79498C9.25 2.82848 10.0335 2.04498 11 2.04498C11.9665 2.04498 12.75 2.82848 12.75 3.79498C12.75 4.76148 11.9665 5.54498 11 5.54498C10.0335 5.54498 9.25 4.76148 9.25 3.79498Z" fill="white"/>
                        <path d="M6.74999 8.29229C6.75249 8.7065 6.41873 9.0443 6.00452 9.0468C4.91065 9.0534 4.14069 9.08426 3.55822 9.20016C3.00213 9.31082 2.67679 9.48795 2.42978 9.75554C2.142 10.0673 1.95493 10.5089 1.85413 11.3212C1.75136 12.1492 1.75 13.2433 1.75 14.7949C1.75 16.3466 1.75136 17.4406 1.85413 18.2687C1.95493 19.0809 2.142 19.5226 2.42978 19.8343C2.70968 20.1375 3.09404 20.3286 3.81628 20.4338C4.56667 20.5431 5.56287 20.5449 7 20.5449H15C16.4371 20.5449 17.4333 20.5431 18.1837 20.4338C18.906 20.3286 19.2903 20.1375 19.5702 19.8343C19.858 19.5226 20.0451 19.0809 20.1459 18.2687C20.2486 17.4406 20.25 16.3466 20.25 14.7949C20.25 13.2433 20.2486 12.1492 20.1459 11.3212C20.0451 10.5089 19.858 10.0673 19.5702 9.75554C19.3232 9.48795 18.9979 9.31082 18.4418 9.20016C17.8593 9.08426 17.0894 9.0534 15.9955 9.0468C15.5813 9.0443 15.2475 8.7065 15.25 8.29229C15.2525 7.87809 15.5903 7.54433 16.0045 7.54683C17.0857 7.55335 17.9922 7.58129 18.7345 7.72901C19.5032 7.88198 20.151 8.1733 20.6724 8.73812C21.2633 9.37826 21.5156 10.1786 21.6345 11.1364C21.75 12.0677 21.75 13.255 21.75 14.7432V14.8466C21.75 16.3348 21.75 17.5222 21.6345 18.4534C21.5156 19.4113 21.2633 20.2116 20.6724 20.8517C20.0736 21.5004 19.3115 21.7853 18.3999 21.9181C17.5289 22.045 16.423 22.045 15.0587 22.0449H6.94126C5.577 22.045 4.47112 22.045 3.60009 21.9181C2.68845 21.7853 1.92636 21.5004 1.32758 20.8517C0.736681 20.2116 0.484416 19.4113 0.365546 18.4534C0.249974 17.5222 0.249985 16.3348 0.25 14.8466V14.7433C0.249985 13.2551 0.249974 12.0677 0.365546 11.1364C0.484416 10.1786 0.736681 9.37826 1.32758 8.73812C1.84896 8.1733 2.49676 7.88198 3.26548 7.72901C4.00781 7.58129 4.91433 7.55335 5.99548 7.54683C6.40968 7.54433 6.74749 7.87809 6.74999 8.29229Z" fill="white"/>
                        <path d="M4.35229 10.9171C4.561 10.5593 5.02024 10.4384 5.37803 10.6471L12.7736 14.9613L16.5841 12.4209C16.9287 12.1912 17.3944 12.2843 17.6242 12.629C17.8539 12.9736 17.7608 13.4393 17.4161 13.669L14.2159 15.8025L17.378 17.6471C17.7358 17.8559 17.8567 18.3151 17.648 18.6729C17.4392 19.0307 16.98 19.1515 16.6222 18.9428L9.52488 14.8027L5.41374 17.5206C5.06821 17.7491 4.60292 17.6541 4.37449 17.3086C4.14605 16.9631 4.24098 16.4978 4.58651 16.2693L8.07992 13.9598L4.62222 11.9428C4.26443 11.7341 4.14358 11.2749 4.35229 10.9171Z" fill="white"/>
                    </svg>
                </div>
                <div class="text-center">
                    <p class="text-light-gray">معلم تاريخي</p>
                    <strong class="text-gray text-2xl text-center">41</strong>
                </div>
            </div>
            <div class="data-box r-box bg-white rounded-2xl shadow-md flex flex justify-center items-center gap-x-3 gap-y-3">
                <div class="logo-circle p-10 rounded-full flex justify-center items-center">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 9.88188C19.5 5.72301 16.0588 2.29498 12 2.29498C7.9412 2.29498 4.5 5.72301 4.5 9.88188C4.5 14.1216 8.00325 17.0523 11.2275 19.0882C11.4629 19.2237 11.7291 19.295 12 19.295C12.2709 19.295 12.5371 19.2237 12.7725 19.0882C16.0028 17.072 19.5 14.107 19.5 9.88188ZM12 12.795C13.6569 12.795 15 11.4518 15 9.79498C15 8.13813 13.6569 6.79498 12 6.79498C10.3431 6.79498 9 8.13813 9 9.79498C9 11.4518 10.3431 12.795 12 12.795Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.04498C9.92893 6.04498 8.25 7.72392 8.25 9.79498C8.25 11.8661 9.92893 13.545 12 13.545C14.0711 13.545 15.75 11.8661 15.75 9.79498C15.75 7.72392 14.0711 6.04498 12 6.04498ZM9.75 9.79498C9.75 8.55234 10.7574 7.54498 12 7.54498C13.2426 7.54498 14.25 8.55234 14.25 9.79498C14.25 11.0376 13.2426 12.045 12 12.045C10.7574 12.045 9.75 11.0376 9.75 9.79498Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 9.88188C3.75 5.31356 7.52225 1.54498 12 1.54498C16.4778 1.54498 20.25 5.31356 20.25 9.88188C20.25 14.5463 16.4018 17.7071 13.1696 19.7244L13.1583 19.7315L13.1467 19.7381C12.7978 19.939 12.4026 20.045 12 20.045C11.5974 20.045 11.2022 19.939 10.8533 19.7381L10.84 19.7305L10.8271 19.7223C7.60753 17.6894 3.75 14.5621 3.75 9.88188ZM12 3.04498C8.36016 3.04498 5.25 6.13247 5.25 9.88188C5.25 13.6752 8.38924 16.4067 11.6129 18.4445C11.732 18.5106 11.8651 18.545 12 18.545C12.1354 18.545 12.269 18.5103 12.3885 18.4437C15.6123 16.4294 18.75 13.6626 18.75 9.88188C18.75 6.13247 15.6398 3.04498 12 3.04498Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74991 20.2833C6.74369 19.8745 6.41032 19.545 6 19.545C5.58579 19.545 5.25 19.8808 5.25 20.295C5.25 20.8994 5.61818 21.3559 6.00728 21.6625C6.40483 21.9758 6.93362 22.2252 7.52019 22.4207C8.70117 22.8144 10.285 23.045 12 23.045C13.715 23.045 15.2988 22.8144 16.4798 22.4207C17.0664 22.2252 17.5952 21.9758 17.9927 21.6625C18.3818 21.3559 18.75 20.8994 18.75 20.295C18.75 19.8808 18.4142 19.545 18 19.545C17.5897 19.545 17.2563 19.8745 17.2501 20.2833C17.243 20.3022 17.2081 20.3711 17.0643 20.4844C16.8546 20.6497 16.5047 20.8313 16.0055 20.9977C15.0149 21.3279 13.5987 21.545 12 21.545C10.4013 21.545 8.98512 21.3279 7.99453 20.9977C7.49531 20.8313 7.14542 20.6497 6.93574 20.4844C6.79195 20.3711 6.75702 20.3022 6.74991 20.2833ZM17.2517 20.278L17.2511 20.2806C17.2514 20.2789 17.2516 20.278 17.2517 20.278Z" fill="white"/>
                    </svg>
                </div>
                <div class="text-center">
                    <p class="text-light-gray">محطة تاريخية واثرائية</p>
                    <strong class="text-gray text-2xl text-center">59</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-v-145cd6b5="" id="goals-section" class="goals-section py-20">
    <div class="container" data-v-inspector="src/components/home/our-goals.vue:3:5" data-v-145cd6b5="">
        <div class="grid lg:grid-cols-2 gap-16 items-start" data-v-inspector="src/components/home/our-goals.vue:4:7" data-v-145cd6b5="">
            <div class="relative" data-v-inspector="src/components/home/our-goals.vue:6:9" data-v-145cd6b5="">
                <div data-v-inspector="src/components/home/our-goals.vue:7:11" data-v-145cd6b5="">
                    <h1 class="goals-title text-3xl md:text-4xl lg:text-5xl font-bold mb-6" data-v-inspector="src/components/home/our-goals.vue:8:13" data-v-145cd6b5=""></h1>
                    <p class="goals-richText text-lg text-gray leading-relaxed" data-v-inspector="src/components/home/our-goals.vue:13:13" data-v-145cd6b5=""></p>
                </div>
            </div>
            <div class="goals-container d-flex flex-col space-y-8">
                <div class="goal-card rounded-2xl bg-[#fff] p-6 sm:p-10 flex flex-col gap-y-6">
                    <div class="icon flex"></div>
                    <h3 class="title font-semibold"></h3>
                    <p class="text-lg text-gray description"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-v-111c6fc3="" id="faqs-section" class="faqs-section py-20">
    <div data-v-111c6fc3="" class="container">
        <div data-v-111c6fc3="" class="grid lg:grid-cols-2 gap-16 items-start">
            <div data-v-111c6fc3="" class="relative">
                <div data-v-111c6fc3="">
                    <h1 class="faqs-title text-3xl md:text-4xl lg:text-5xl font-bold mb-6"></h1>
                    <p class="faqs-richText text-lg text-gray leading-relaxed"></p>
                </div>
            </div>
            <div data-v-111c6fc3="" class="d-flex flex-col space-y-8">
                <div class="space-y-4 mb-12 faqs-container">
                    <div class="faq-card rounded-xl overflow-hidden shadow-md">
                        <button class="w-full p-4 sm:p-6 text-right flex justify-between items-center focus:outline-none">
                            <div class="flex items-center gap-2">
                                <span class="iterator w-8 h-8 flex justify-center items-center bg-[#F8F8F8]/70 rounded-lg"></span>
                                <h3 class="question text-lg font-bold text-dark"></h3>
                            </div>
                            <span class="w-8 h-8 bg-[#F8F8F8]/70 rounded-md p-1 indecator flex items-center justify-center"></span>
                        </button>
                        <div class="accordionContent mr-[40px] px-6 overflow-hidden">
                            <p class="answer text-gray leading-relaxed pb-5"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-v-e834c0fc="" id="join-section" class="join-section pt-16">
    <div data-v-e834c0fc="" class="container flex justify-center space-y-16 pb-20">
        <div data-v-e834c0fc="" class="w-full lg:w-2/3 text-content flex flex-col items-center text-center">
            <div data-v-e834c0fc="" class="relative">
                <div data-v-e834c0fc="">
                    <h1 data-v-e834c0fc="" class="join-title text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        منصة تدريب العاملين في مشروع
                        <strong class="text-main">على خطاه</strong>
                        في مسار الهجرة النبوية
                    </h1>
                </div>
            </div>
            <div data-v-e834c0fc="" class="relative space-y-8">
                <p data-v-e834c0fc="" class="join-richText text-sm mb-8 text-gray leading-relaxed">
                    منصة إلكترونية متكاملة تهدف إلى تأهيل العاملين في مشروع "على خُطاه"، من مرشدين، ومقدّمي خدمات، وموظفين إداريين
                </p>
                <br data-v-e834c0fc="" />
                <div data-v-e834c0fc="" class="flex justify-center">
                    <a href="{{ route('join-request') }}" class="block btn-primary inverted rounded-full font-bold py-3 px-6 transition duration-300">
                        <span data-v-e834c0fc="">تقديم طلب الإنضمام</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection