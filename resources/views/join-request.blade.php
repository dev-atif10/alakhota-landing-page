@extends('layouts.app')

@section('content') 


<body style="background-image: url(assets/images/hero-section.png); ">  
      <div class="py-8"></div>
    <section class="py-20 w-full flex justify-center relative">
        <div class="form-container p-6 md:p-8">
            <h1 class="text-2xl md:text-3xl font-bold text-center mb-0">
                قدّم طلبك الآن
            </h1>

            <p class="text-gray-600 text-center">
                املأ النموذج أدناه ليتم مراجعة طلبك والانضمام إلى فريقنا لخدمة ضيوف
                الرحمن.
            </p>

            <form id="applicationForm"
             action="{{ route('join-request.store') }}"
             method="POST" enctype="multipart/form-data" class="space-y-8 w-full">
                @csrf

                <!-- الاسم الثلاثي -->
                <div>
                    <label for="name">الاسم الأول<span>*</span></label>
                    <input type="text" id="name" name="name" placeholder="أدخل الاسم الأول"
                           class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent" />
                </div>

                <!--  -->
                <div>
                    <label for="personal_id">رقم الهوية الوطنية أو الإقامة<span>*</span></label>
                    <input type="text" id="personal_id" name="personal_id" placeholder="أدخل رقم الهوية الوطنية أو الإقامة"
                           class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent" />
                </div>

                <!--  -->
                <div>
                    <label for="mobile">رقم الجوال<span>*</span></label>
                    <input type="tel" id="mobile" name="mobile" placeholder=""
                           class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent" />
                </div>

                <!-- البريد الإلكتروني -->
                <div>
                    <label for="email">البريد الإلكتروني<span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني"
                           class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent" />
                </div>

                <!--  -->
                <div>
                    <label for="gender">الجنس</label>
                    <select id="gender" name="gender"
                            class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                        <option value="">اختر الجنس</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>

                <div class="grid md:grid-cols-2 gap-x-4 gap-y-8">
                    <!-- تاريخ الميلاد -->
                    <div>
                        <label for="birth">تاريخ الميلاد</label>
                        <input type="date" id="birth" name="birth" placeholder="اختر تاريخ الميلاد"
                               class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent" />
                    </div>
                    <!-- فصيلة الدم -->
                    <div>
                        <label for="blood_type">فصيلة الدم</label>
                        <select id="blood_type" name="blood_type"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="">اختر فصيلة الدم</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <!-- اختر المدينة  -->
                    <div>
                        <label for="city">مدينة الإقامة</label>
                        <select id="city" name="city"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="" class="text-gray-200">
                                اختر مدينة الإقامة
                            </option>
                            <option value="الرياض">الرياض</option>
                            <option value="جدة">جدة</option>
                            <option value="مكة المكرمة">مكة المكرمة</option>
                            <option value="المدينة المنورة">المدينة المنورة</option>
                            <option value="الدمام">الدمام</option>
                            <option value="الخبر">الخبر</option>
                            <option value="الطائف">الطائف</option>
                            <option value="القصيم">القصيم</option>
                            <option value="تبوك">تبوك</option>
                            <option value="حائل">حائل</option>
                            <option value="أبها">أبها</option>
                            <option value="جازان">جازان</option>
                            <option value="الباحة">الباحة</option>
                            <option value="نجران">نجران</option>
                            <option value="الحدود الشمالية">الحدود الشمالية</option>
                            <option value="الجوف">الجوف</option>
                            <option value="الخرج">الخرج</option>
                            <option value="ينبع">ينبع</option>
                            <option value="القطيف">القطيف</option>
                            <option value="الظهران">الظهران</option>
                            <option value="المدينة الصناعية">المدينة الصناعية</option>
                            <option value="الجبيل">الجبيل</option>
                        </select>
                    </div>

                    <!-- اختر مقاس  -->
                    <div>
                        <label for="uniform_size">مقاس الزي الرسمي</label>
                        <select id="uniform_size" name="uniform_size"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="" class="text-gray-200">
                                اختر مقاس الزى الرسمى
                            </option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="X-Large">X-Large</option>
                            <option value="2X-Large">2X-Large</option>
                            <option value="3X-Large">3X-Large</option>
                        </select>
                    </div>

                    <!-- المؤهل العلمي -->
                    <div>
                        <label for="education">المؤهل التعليمي <span>*</span></label>
                        <select id="education" name="education"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="">اختر المؤهل التعليمى</option>
                            <option value="high_school">ثانوية عامة</option>
                            <option value="diploma">دبلوم</option>
                            <option value="bachelor">بكالوريوس</option>
                            <option value="master">ماجستير</option>
                            <option value="phd">دكتوراه</option>
                        </select>
                    </div>

                    <!-- اللغات  -->
                    <div>
                        <label for="specialization">التخصص الدراسي<span>*</span></label>
                        <select id="specialization" name="specialization"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="">اختر التخصص الدراسي</option>
                            <option value="علوم الحاسب">علوم الحاسب</option>
                            <option value="الهندسة">الهندسة</option>
                            <option value="إدارة الأعمال">إدارة الأعمال</option>
                            <option value="الطب">الطب</option>
                            <option value="الصيدلة">الصيدلة</option>
                            <option value="التربية">التربية</option>
                            <option value="العلوم الاجتماعية">العلوم الاجتماعية</option>
                            <option value="العلوم الإنسانية">العلوم الإنسانية</option>
                            <option value="العلوم الطبيعية">العلوم الطبيعية</option>
                            <option value="العلوم التطبيقية">العلوم التطبيقية</option>
                            <option value="العلوم الصحية">العلوم الصحية</option>
                            <option value="العلوم البيئية">العلوم البيئية</option>
                            <option value="العلوم الشرعية">العلوم الشرعية</option>
                            <option value="العلوم السياسية">العلوم السياسية</option>
                            <option value="العلوم الاقتصادية">العلوم الاقتصادية</option>
                            <option value="العلوم الرياضية">العلوم الرياضية</option>
                            <option value="العلوم اللغوية">العلوم اللغوية</option>
                            <option value="العلوم الفنية">العلوم الفنية</option>
                            <option value="العلوم التربوية">العلوم التربوية</option>
                            <option value="العلوم الإعلامية">العلوم الإعلامية</option>
                            <option value="العلوم القانونية">العلوم القانونية</option>
                            <option value="العلوم العسكرية">العلوم العسكرية</option>
                            <option value="العلوم البحرية">العلوم البحرية</option>
                            <option value="العلوم الجوية">العلوم الجوية</option>
                            <option value="العلوم الزراعية">العلوم الزراعية</option>
                            <option value="العلوم البيطرية">العلوم البيطرية</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                    </div>

                    <!-- اللغات  -->
                    <div>
                        <label for="languages">اللغات</label>
                        <select id="languages" name="languages[]"
                                multiple
                                style="height: 150px;"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option disabled>-- اختر اللغات --</option>
                            <option value="العربية">العربية</option>
                            <option value="الإنجليزية">الإنجليزية</option>
                            <option value="الفرنسية">الفرنسية</option>
                            <option value="الإسبانية">الإسبانية</option>
                            <option value="الألمانية">الألمانية</option>
                            <option value="الصينية">الصينية</option>
                            <option value="الروسية">الروسية</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                    </div>

                    <!-- اللغات  -->
                    <div>
                        <label for="diseases">هل لديك امراض مزمنة او تعاني من مشاكل صحية؟</label>
                        <select id="diseases" name="diseases"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent">
                            <option value="">اختر</option>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>
                </div>

                <!-- صورة الهوية -->
                <div>
                    <label>
                        صورة الهوية الوطنية/الإقامة <span>*</span>
                    </label>
                    <label for="personal_id_image" class="file-upload relative overflow-hidden">
                        <input type="file" id="personal_id_image" name="personal_id_image" accept="image/*,.pdf" class="absolute h-full left-0 top-0" />
                        <div class="flex flex-col gap-2 items-center">
                            <span class="block">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M10.6252 11.6673C10.6252 12.0125 10.3454 12.2923 10.0002 12.2923C9.65503 12.2923 9.3752 12.0125 9.3752 11.6673V4.61571L9.37015 4.62167C9.19458 4.82887 9.02267 5.04784 8.86191 5.25261L8.82465 5.30007C8.66446 5.50402 8.49593 5.71828 8.36505 5.85294C8.12446 6.10046 7.72877 6.10608 7.48125 5.86549C7.23373 5.62491 7.22811 5.22922 7.46869 4.9817C7.54261 4.90565 7.66397 4.75414 7.84163 4.52795L7.88082 4.47803C8.03921 4.27625 8.22504 4.0395 8.41648 3.81357C8.62165 3.57144 8.8513 3.31995 9.08086 3.12443C9.1959 3.02645 9.32556 2.92981 9.46506 2.85516C9.59959 2.78317 9.78497 2.70898 10.0002 2.70898C10.2154 2.70898 10.4008 2.78317 10.5354 2.85516C10.6748 2.92981 10.8045 3.02645 10.9195 3.12443C11.1491 3.31995 11.3788 3.57144 11.5839 3.81357C11.7754 4.03949 11.9611 4.27618 12.1195 4.47796L12.1588 4.52795C12.3364 4.75414 12.4578 4.90565 12.5317 4.9817C12.7723 5.22922 12.7667 5.62491 12.5192 5.86549C12.2716 6.10608 11.8759 6.10046 11.6354 5.85294C11.5045 5.71828 11.3359 5.50402 11.1758 5.30007L11.1385 5.2526C10.9777 5.04784 10.8058 4.82886 10.6303 4.62167L10.6252 4.61571V11.6673Z"
                                            fill="#75797C" />
                                    <path
                                            d="M18.0895 11.8753C18.2044 11.5498 18.0337 11.1928 17.7082 11.0779C17.3827 10.9631 17.0257 11.1338 16.9108 11.4593L16.7159 12.0114C16.332 13.0993 16.0604 13.866 15.7816 14.4408C15.5097 15.0012 15.2568 15.3217 14.9413 15.5449C14.6259 15.7681 14.2395 15.8999 13.6205 15.9697C12.9857 16.0414 12.1723 16.0423 11.0187 16.0423H8.98164C7.82799 16.0423 7.0146 16.0414 6.37984 15.9697C5.76086 15.8999 5.37447 15.7681 5.059 15.5449C4.74353 15.3217 4.49069 15.0012 4.21879 14.4408C3.93995 13.866 3.66837 13.0993 3.28441 12.0114L3.08954 11.4593C2.97466 11.1338 2.61766 10.9631 2.29216 11.0779C1.96666 11.1928 1.79592 11.5498 1.9108 11.8753L2.11812 12.4627C2.48678 13.5073 2.78096 14.3408 3.09416 14.9864C3.41781 15.6535 3.78722 16.1763 4.33704 16.5653C4.88685 16.9543 5.50283 17.1287 6.23962 17.2118C6.95261 17.2923 7.83652 17.2923 8.94422 17.2923H11.0561C12.1638 17.2923 13.0477 17.2923 13.7607 17.2118C14.4975 17.1287 15.1135 16.9543 15.6633 16.5653C16.2131 16.1763 16.5825 15.6535 16.9062 14.9864C17.2194 14.3408 17.5136 13.5073 17.8822 12.4627L18.0895 11.8753Z"
                                            fill="#75797C" />
                                </svg>
                            </span>
                            <p class="font-bold mt-2">
                                اسحب وأفلِت أو اختر الملف الذي تريد تحميله
                            </p>
                            <p class="text-gray-400">الحد الأقصى للحجم 5 ميجا بايت</p>
                        </div>
                    </label>
                </div>

                <!-- السيرة الذاتية -->
                <div>
                    <label>
                        السيرة الذاتية (اختياري)
                    </label>
                    <label for="cv_file" class="file-upload relative overflow-hidden">
                        <input type="file" id="cv_file" name="cv_file" accept=".pdf,.doc,.docx"
                               class="absolute h-full left-0 top-0" />
                        <div class="flex flex-col gap-2 items-center">
                            <span class="block">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M10.6252 11.6673C10.6252 12.0125 10.3454 12.2923 10.0002 12.2923C9.65503 12.2923 9.3752 12.0125 9.3752 11.6673V4.61571L9.37015 4.62167C9.19458 4.82887 9.02267 5.04784 8.86191 5.25261L8.82465 5.30007C8.66446 5.50402 8.49593 5.71828 8.36505 5.85294C8.12446 6.10046 7.72877 6.10608 7.48125 5.86549C7.23373 5.62491 7.22811 5.22922 7.46869 4.9817C7.54261 4.90565 7.66397 4.75414 7.84163 4.52795L7.88082 4.47803C8.03921 4.27625 8.22504 4.0395 8.41648 3.81357C8.62165 3.57144 8.8513 3.31995 9.08086 3.12443C9.1959 3.02645 9.32556 2.92981 9.46506 2.85516C9.59959 2.78317 9.78497 2.70898 10.0002 2.70898C10.2154 2.70898 10.4008 2.78317 10.5354 2.85516C10.6748 2.92981 10.8045 3.02645 10.9195 3.12443C11.1491 3.31995 11.3788 3.57144 11.5839 3.81357C11.7754 4.03949 11.9611 4.27618 12.1195 4.47796L12.1588 4.52795C12.3364 4.75414 12.4578 4.90565 12.5317 4.9817C12.7723 5.22922 12.7667 5.62491 12.5192 5.86549C12.2716 6.10608 11.8759 6.10046 11.6354 5.85294C11.5045 5.71828 11.3359 5.50402 11.1758 5.30007L11.1385 5.2526C10.9777 5.04784 10.8058 4.82886 10.6303 4.62167L10.6252 4.61571V11.6673Z"
                                            fill="#75797C" />
                                    <path
                                            d="M18.0895 11.8753C18.2044 11.5498 18.0337 11.1928 17.7082 11.0779C17.3827 10.9631 17.0257 11.1338 16.9108 11.4593L16.7159 12.0114C16.332 13.0993 16.0604 13.866 15.7816 14.4408C15.5097 15.0012 15.2568 15.3217 14.9413 15.5449C14.6259 15.7681 14.2395 15.8999 13.6205 15.9697C12.9857 16.0414 12.1723 16.0423 11.0187 16.0423H8.98164C7.82799 16.0423 7.0146 16.0414 6.37984 15.9697C5.76086 15.8999 5.37447 15.7681 5.059 15.5449C4.74353 15.3217 4.49069 15.0012 4.21879 14.4408C3.93995 13.866 3.66837 13.0993 3.28441 12.0114L3.08954 11.4593C2.97466 11.1338 2.61766 10.9631 2.29216 11.0779C1.96666 11.1928 1.79592 11.5498 1.9108 11.8753L2.11812 12.4627C2.48678 13.5073 2.78096 14.3408 3.09416 14.9864C3.41781 15.6535 3.78722 16.1763 4.33704 16.5653C4.88685 16.9543 5.50283 17.1287 6.23962 17.2118C6.95261 17.2923 7.83652 17.2923 8.94422 17.2923H11.0561C12.1638 17.2923 13.0477 17.2923 13.7607 17.2118C14.4975 17.1287 15.1135 16.9543 15.6633 16.5653C16.2131 16.1763 16.5825 15.6535 16.9062 14.9864C17.2194 14.3408 17.5136 13.5073 17.8822 12.4627L18.0895 11.8753Z"
                                            fill="#75797C" />
                                </svg>
                            </span>
                            <p class="font-bold mt-2">
                                اسحب وأفلِت أو اختر الملف الذي تريد تحميله
                            </p>
                            <p class="text-sm text-gray-400">الحجم الأقصى 5MB</p>
                        </div>
                    </label>
                </div>

                <!-- التأكيد -->
                <div class="pb-4">
                    <div class="flex items-center checkbox relative">
                        <input type="checkbox" name="confirmation" id="confirmation"
                               class="mt h-4 w-4 text-green-600 rounded border-gray-300 focus:ring-[#c8bd99]" />
                        <span class="mr-2 text-sm font-bold text-gray">
                            أقر بأن جميع البيانات أعلاه صحيحة ومكتملة وأتحمل كافة
                            المسؤوليات في حال تبين خلاف ذلك.
                        </span>
                    </div>
                </div>

                <!-- زر التقديم -->
                <button type="submit"
                        class="w-full btn-primary inverted text-white font-medium py-3 px-4 rounded-full transition duration-200">
                    تقديم طلب الانضمام
                </button>
            </form>
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
</body>


@endsection