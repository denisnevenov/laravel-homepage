@extends('layouts.app') 

@section('title', 'LabForty | About Us')

@section('content')  
  <div class="bg-linear-to-b from-white to-[#f9f9f9]">
    <section class="py-6 lg:py-10 overflow-hidden">
        <div class="container m-auto max-w-[1014px] px-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="lg:w-[530px]"> 
                    <h2 class="text-4xl lg:text-[46px] xl:text-[55px] leading-[1.25] font-bold mb-4 lg:mb-6 mt-2">We prioritize <br> <span class="text-transparent bg-clip-text bg-gradient-to-b from-blue-grad-from to-blue-grad-to">customer requests.</span></h2>

                    <div class="lg:w-96">
                        <p class="mb-8 lg:mb-16 lg:w-80 text-light-gray font-bold">Ensuring swift and top-priority support for your needs.</p>

                        <div class="flex gap-4 lg:gap-8 mb-6 lg:mb-16 lg:w-87">
                            <i class="ico-priority inline-block w-[50px] h-[50px] shrink-0"></i>

                            <p class="text-sm font-semibold text-light-gray"><strong class="text-dark">Priority service.</strong> Your service requests are treated with the highest priority. Customers will always receive a response to requests within two hours.</p>
                        </div>

                        <div class="flex gap-4 lg:gap-8 mb-6 lg:mb-16 lg:w-86">
                            <i class="ico-monitoring inline-block w-[50px] h-[50px] shrink-0"></i>

                            <p class="text-sm font-semibold text-light-gray"><strong class="text-dark">Monitoring & optimization.</strong>  Live monitoring ensures always-on web tapps and seamless user experiences by quickly identifying and analyzing performance issues.</p>
                        </div>

                        <div class="flex gap-4 lg:gap-8 mb-10 lg:mb-16 lg:w-90">
                            <i class="ico-updates inline-block w-[50px] h-[50px] shrink-0"></i>

                            <p class="text-sm font-semibold text-light-gray"><strong class="text-dark">Software updates.</strong> Updates keep your software secure and fast. Our support contracts ensure your business is always up to date and ready to grow.</p>
                        </div>

                        <a href="#" class="inline-block bg-blue hover:bg-blue-700 text-white px-9 py-3 rounded-full text-sm font-extrabold " >Let's talk  ></a>
                    </div>
                </div>

                <picture class="xl:translate-x-[125px] mix-blend-darken">
                    <source srcset="{{ asset('images/customer-request.webp') }}" type="image/webp">
                    <img src="{{ asset('images/customer-request.jpg') }}" loading="lazy" width="594" height="797" class="xl:max-w-none" alt="We prioritize customer requests">
                </picture>
            </div>
        </div>
    </section>

    <section class="py-6 lg:py-10">
        <div class="container m-auto max-w-[1014px] px-3">
            <div class="flex justify-between items-center mb-4 lg:mb-8">
                <h2 class="font-bold text-2xl lg:text-[32px]">Benefits</h2>

                <a href="#" class="font-medium text-blue hover:text-dark">Speak with an expert ></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="bg-light-indigo p-4 lg:p-8 flex flex-col justify-center lg:justify-end text-center text-light-gray text-lg lg:text-xl font-bold gap-4 rounded-3xl min-h-[230px] lg:min-h-[330px] ">
                    <p>Expert</p>

                    <i class="ico-heart inline-block w-[60px] h-[60px] mx-auto"></i>

                    <p class="leading-[1.2]">technical <br> assistance</p>
                </div>

                <div class="bg-light-indigo p-4 lg:p-8 flex flex-col justify-center lg:justify-end text-center text-light-gray text-lg lg:text-xl font-bold gap-4 rounded-3xl min-h-[230px] lg:min-h-[330px]">
                    <p>Available</p>

                    <p class="text-dark text-[50px] lg:text-[70px] leading-none lg:mt-2">24/7</p>

                    <p class="leading-[1.2]">customer <br> support</p>
                </div>

                <div class="bg-light-indigo p-4 lg:p-8 flex flex-col justify-center text-center text-light-gray text-lg lg:text-xl font-bold rounded-3xl relative min-h-[230px] lg:min-h-[330px]">
                    <i class="ico-angle absolute top-0 right-0 m-5 lg:m-10 block w-[33px] h-[31px]"></i>

                    <p>High customer <br> satisfation</p>

                    <i class="ico-angle absolute bottom-0 left-0 m-5 lg:m-10 rotate-180 block w-[33px] h-[31px]"></i>
                </div>
            </div>
        </div> 
    </section>

    <section class="py-6 lg:py-10">
        <div class="container m-auto max-w-[1014px] px-3">
            <h2 class="text-4xl lg:text-[46px] xl:text-[55px] leading-[1.25] font-bold mb-2 mt-2 text-center">Types of <br> <span class="text-transparent bg-clip-text bg-gradient-to-b from-blue-grad-from to-blue-grad-to">maintenance</span></h2>

            <p class="mb-8 lg:mb-16 text-center font-semibold">Our support service guarantees that requests <br> <span class="text-light-gray">are treated with the highest priority.</span></p>

            <div class="flex items-center justify-between bg-light-indigo pt-10 lg:pt-15 ps-10 lg:ps-15 pb-9 lg:pb-13 pe-0 rounded-3xl overflow-hidden">
                <div class="accordion max-w-[325px]">
                    <div class="accordion-item border-b border-neutral-300 lg:pb-4">
                        <h3 class="text-lg lg:text-2xl font-bold">
                            <button class="accordion-toggle flex justify-between items-center w-full gap-4 pt-2 pb-5 cursor-pointer">
                                Corrective maintenance
                                <i class="accordion-arrow inline-block w-[20px] h-[16px] transition-transform duration-300 [.rotate-180]:mt-[6px]"></i>
                            </button>
                        </h3>
                        <div class="accordion-collapse overflow-hidden transition-[max-height] duration-300 ease-in-out">
                            <div class="w-64">
                                <p class="pb-4">"Bug" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-b border-neutral-300 lg:pb-4">
                        <h3 class="text-lg lg:text-2xl font-bold">
                            <button class="accordion-toggle flex justify-between items-center w-full gap-4 pt-2 pb-5 cursor-pointer">
                                Preventive maintenance
                                <i class="accordion-arrow inline-block w-[20px] h-[16px] transition-transform duration-300 [.rotate-180]:mt-[6px]"></i>
                            </button>
                        </h3>
                        <div class="accordion-collapse overflow-hidden max-h-0 transition-[max-height] duration-300 ease-in-out">
                            <div class="w-64">
                                <p class="pb-4">"Bug" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="text-lg lg:text-2xl font-bold">
                            <button class="accordion-toggle flex justify-between items-center w-full gap-4 pt-2 pb-5 cursor-pointer">
                                Perfective maintenance
                                <i class="accordion-arrow inline-block w-[20px] h-[20px] transition-transform duration-300"></i>
                            </button>
                        </h3>
                        <div class="accordion-collapse overflow-hidden max-h-0 transition-[max-height] duration-300 ease-in-out">
                            <div class="w-64">
                                <p class="pb-4">"Bug" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <picture>
                    <source srcset="{{ asset('images/maintenance.webp') }}" type="image/webp">
                    <img src="{{ asset('images/maintenance.png') }}" loading="lazy" width="520" height="352" class="block mt-6" alt="Types of maintenance">
                </picture>
            </div>
        </div>
    </section>

    <section class="py-6 lg:py-10">
        <div class="container m-auto max-w-[986px] px-3">
            <h2 class="text-4xl lg:text-[46px] xl:text-[55px] leading-[1.25] font-bold mb-10 lg:mb-16">Our process</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-15 lg:gap-x-27 gap-y-12 mb-17">
                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">1.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">Formal request.</span> After receiving your request, we aim to quickly implement the correct solution. We'll schedule a meeting to discuss your software's current state and potential factors.</p>
                </div>

                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">2.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">System analysis.</span> Once we understand the impacts, we assess your systems to identify the root cause, reviewing code and checking for outdated subscriptions and malware.</p>
                </div>

                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">3.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">Solution evaluation.</span> Our engineers identify solutions, scope affected features, and review options with you to determine the best resolution.</p>
                </div>

                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">4.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">Implementation.</span>  Our Technical Support Lead creates bug tickets for immediate action. Using debugging tools and reviewing logs, our team resolves each error.
                    </p>
                </div>

                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">5.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">Testing. </span>  After verifying stability in our test environment, we deploy bug fixes to production. We then request your sign-off before closing the request.
                    </p>
                </div>

                <div>
                    <div class="w-[40px] h-[40px] rounded-md bg-light-blue flex justify-center items-center text-blue font-bold mb-6">6.</div>

                    <p class="text-sm font-bold text-light-gray leading-[1.5]"><span class="text-dark">Final steps.</span>   Once you approve the changes, we monitor the live environment to ensure smooth operation and remain available for further support.
                    </p>
                </div>
            </div>

            <div class="text-center pb-10">
                <a href="#" class="inline-block bg-blue hover:bg-blue-700 text-white px-9 py-3 rounded-full text-sm font-extrabold " >Let's talk  ></a>
            </div>
        </div>
    </section>
  </div>
@endsection