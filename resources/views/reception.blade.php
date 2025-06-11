@extends('layouts.app')

@section('content') 


<body style="background-image: url(assets/images/hero-section.png);">
  
  <main class="relative w-100">
    <div class="py-8"></div>
    <section class="py-20 w-full flex justify-center items-center relative">
      <div class="reception-container p-6 md:p-8">
        <div class="gray-box bg-light-gray rounded-xl w-50">
          
        </div>

        <h1 class="text-2xl md:text-3xl font-bold text-center mb-0">
            تم استلام طلبك بنجاح
        </h1>

        <p class="text-gray-600 mb-8 text-center">
            شكراً لتسجيلك. جاري مراجعة بياناتك، وسيتم إشعارك بنتيجة الفرز خلال أيام قليلة.
        </p>

        <hr class="w-full">

        <a type="button" href="{{url('/')}}"
            class="w-full block btn-primary inverted text-white text-center font-medium py-3 px-4 rounded-full transition duration-200">
            عودة الي الرئيسية
        </a>
      </div>
    </section>
    <section class="pb-20 w-full flex justify-center items-center relative">
      <!-- Image placeholder -->
      <div class="w-full lg:w-1/3 flex justify-center lg:justify-end left-images">
        <!-- Replace this div with your actual image -->
        <div class="w-full h-full flex items-center justify-center gap-16 hero-partners">
          <img src="assets/images/sela-logo.svg" alt="شعار شريك" loading="lazy">
          <img src="assets/images/khotah-logo.png" alt="شعار شريك" loading="lazy">
          <img src="assets/images/roaia-logo.png" alt="شعار شريك" loading="lazy">
        </div>
      </div>
    </section>
  </main>
 
</body>


@endsection