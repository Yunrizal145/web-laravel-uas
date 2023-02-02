<x-app-layout>
    

    <!-- Thumbnail Start -->
    <section id="#home" class="w-full mt-[50px] lg:mt-[150px]">
        <div class="container mx-auto px-5 lg:flex ">
            <div class="w-full lg:w-1/2 lg:pl-[30px] relative">
                <div class="absolute top-0 right-10">
                    <img src={{ asset('image/golden-star.png') }} alt="star-golden" class="w-[35px]">
                </div>
                <div class="text-yellow-300 text-sm pb-4 lg:text-lg">
                    Dashboard User Manager
                </div>
                <div class="text-4xl font-bold tracking-widest leading-normal lg:text-5xl lg:leading-normal">
                    <span class="text-sky-400">Managing Finances</span>
                    Well will make you Live rich
                </div>
                <div class="py-5 text-xs text-slate-500">
                    Seduiten will help to manage your finances, starting for your monthly expenses and income, ensuring that your account and money are safe with our professional system. 
                </div>
                <div class="w-full flex gap-8 mx-auto lg:mt-4">
                    <a href="#started" class="w-1/3 px-5 py-3 text-sm bg-sky-500 rounded-full text-white flex hover:bg-sky-600  hover:border-2 hover:border-sky-500 items-center justify-center gap-2 lg:font-normal" id="started">
                        Get Started
                        <img src={{ asset('image/arrow-right-top.png') }} alt="Link" class="w-[12px] h-[12px]">
                    </a>
                    <a href="#download" class="w-1/3 px-5 py-3 text-sm bg-white border-2 border-sky-500 rounded-full text-sky-500
                    hover:bg-sky-600 hover:text-white flex items-center justify-center gap-2 lg:font-normal">
                        Download
                        <img src={{ asset('image/download.png') }} alt="Link" class="w-[20px] h-[20px] hover:bg-sky-500">
                    </a>
                </div>
            </div>

            <div class="w-full relative mt-[200px] lg:w-1/2 lg:mt-[75px]">
                <div class="w-full absolute top-0 lg:w-[550px] ">
                    <img src={{ asset('image/blue-stats.png') }} alt="statistic">
                </div>
                <div class="w-full absolute top-0 lg:w-[550px] ">
                    <img src={{ asset('image/yellow-stats.png') }} alt="statistic">
                </div>
                <div class="absolute -top-24 -left-10 lg:-top-[100px]">
                    <img src={{ asset('image/thumbnail.png') }} alt="Thumbnail">
                </div>
                <div class="text-thumbnail absolute -top-[130px] left-[150px] lg:left-[180px]">
                    Manage your expenditure
                </div>
                <div class="text-thumbnail absolute top-[20px] left-[45px] lg:top-[30px]">
                    Make you rich
                </div>
                <div class="text-thumbnail absolute top-[135px] right-[120px] lg:top-[185px] lg:right-[140px]">
                    Awesome experience
                </div>
                <div class="absolute -top-[150px] right-[100px] lg:right-[170px]">
                    <img src={{ asset('image/blue-star.png') }} alt="star-blue" class="w-[20px]">
                </div>
            </div>
        </div>
    </section>
    <!-- Thumbnail End -->

    <!-- Content 1 Start -->
    <div class="w-full mb-2 lg:flex lg:items-center">
        <div class="w-full mt-[500px] lg:mt-[50px]">
            <div class="w-full  px-16 py-5 bg-amber-300 lg:pl-[85px]">
                <div class="container mx-auto flex items-center justify-between ">
                    <div class="w-[100px] text-3xl text-white">
                        500 + 
                        <span class="text-base text-right">Partner Word Wide</span>
                    </div>
                    <div class="w-[100px] text-3xl text-white">
                        100k + 
                        <span class="text-base text-right">User World Wide</span>
                    </div>
                    <div class="w-[100px] text-3xl text-white">
                        3,2m + 
                        <span class="text-base text-right">Download Total</span>
                    </div>
                </div>
            </div>
            
            <div class="w-full lg:pl-[20px]">
                <div class="container mx-auto px-16 py-10">
                    <div class="text-xl">Partner : </div>
                </div>
                <div class="px-16 grid grid-cols-3 gap-5">
                    <img src={{ asset('image/microsoft.png') }} alt="partner" class="w-[200px]">
                    <img src={{ asset('image/google.png') }} alt="partner" class="w-[200px]">
                    <img src={{ asset('image/tesla.png') }} alt="partner" class="w-[200px]">
                    <img src={{ asset('image/payoneer.png') }} alt="partner" class="w-[200px]">
                    <img src={{ asset('image/paypal.png') }} alt="partner" class="w-[200px]">
                </div>
            </div>
        </div>

        <div class="w-full mt-14 shadow-xl ">
            <img src={{ asset('image/thumbnail2.svg') }} alt="">
        </div>
    </div>
    <!-- Content 1 End -->


    <!-- Content 2 Start -->
    <div class="container mx-auto px-5 my-[150px] lg:flex relative">
        <div class="w-full lg:w-1/2 lg:pl-[30px] relative">
            <div class="absolute top-0 right-10">
                <img src={{ asset('image/golden-star.png') }} alt="star-golden" class="w-[35px]">
            </div>
            <div class="text-yellow-300 text-sm pb-4 lg:text-base">
                Dashboard Admin Manager
            </div>
            <div class="text-3xl font-bold tracking-widest leading-normal lg:text-3xl lg:leading-normal">
                Very Professional
                <span class="text-sky-400">Protection</span>
            </div>
            <div class="py-5 text-xs text-slate-500 lg:text-sm">
                Seduiten will help to manage your finances, starting for your monthly expenses and income, ensuring that your account and money are safe with our professional system. 
            </div>
            <div class="text-base font-semibold py-3 lg:py-1">
                For Protect your date:
            </div>
            <div class="w-full flex gap-4 lg:mt-4">
                <a href="#started" class="w-1/3 text-sm flex items-center justify-center gap-2 lg:font-normal">
                    <img src={{ asset('image/defender.png') }} alt="Link" class="w-[30px] ">
                    Security Date
                </a>
                <a href="#download" class="w-1/3">
                    <img src={{ asset('image/wordpress.png') }} alt="Link" class="w-[170px]">
                </a>
            </div>
        </div>

        <div class="w-full mt-[50px] lg:w-1/2 ">
            <img src={{ asset('image/thumbnail3.svg') }} alt="">
        </div>
    </div>
    <!-- Content 2 End -->


    <!-- Content 3 Start -->
    <div class="w-full py-[90px] bg-sky-100 lg:flex lg:items-center lg:justify-center">
        <div class="max-w-sm px-7 py-6 mx-auto rounded-xl bg-white shadow-lg lg:max-w-xl">
            <div class="w-full px-6 py-4 text-sky-500 ">
                <div class="font-normal text-xl mb-2 lg:text-3xl lg:mb-4">You can get up to</div>
                <p class="text-sky-500 text-3xl mb-2 lg:text-4xl lg:mb-4">$ 212,2122,12231</p>
                <span class="w-full h-[2px] block bg-sky-500 mb-2 lg:mb-4"></span>
                <p class="text-xs ">100% of the money will go into your account</p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <a href="#started" class="w-full px-5 py-3 text-sm bg-amber-300 rounded-full text-white flex  items-center justify-center gap-2 hover:bg-amber-500 lg:font-normal" id="started">
                    Get Started
                    <img src={{ asset('image/arrow-right-top.png') }} alt="Link" class="w-[12px] h-[12px]">
                </a>
            </div>
        </div>

        <div class="w-full mt-[150px] lg:w-1/2 lg:mt-0">
            <div class="w-full container mx-auto px-5 lg:flex ">
                <div class="w-full px-4">
                    <div class="text-yellow-300 text-sm pb-4 lg:text-lg">
                        Money Saved
                    </div>
                    <div class="text-2xl font-bold tracking-widest leading-normal lg:text-4xl lg:leading-normal">
                        Want to know how much You can 
                        <span class="text-sky-400">save money</span>
                        on $eduiten? 
                    </div>
                    <div class="w-full pt-10">
                        <input type="range" name="dollar" id="dollar" class="w-full">
                    </div>
                    <div class="py-5 text-xs text-slate-500 lg:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, dolore. Hic eaque corporis perferendis accusantium.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content 3 End -->


    <!-- Content 4 Start -->
    <section class="w-full mx-auto mt-[200px] lg:mt-[250px]">
        <div class="container mx-auto px-5 lg:flex relative">
            <div class="w-full lg:w-1/2 lg:pl-[30px] relative">
                <div class="absolute top-0 right-10">
                    <img src={{ asset('image/golden-star.png') }} alt="star-golden" class="w-[35px]">
                </div>
                <div class="text-yellow-300 text-sm pb-4 lg:text-lg">
                    Available Features
                </div>
                <div class="text-4xl font-bold leading-normal lg:leading-tight lg:text-5xl">
                    We come with some 
                    <span class="text-sky-400">Amazing Features</span>
                </div>
                <div class="py-5 text-xs text-slate-500">
                    Seduiten will help to manage your finances, starting for your monthly expenses and income, ensuring that your account and money are safe with our professional system. 
                </div>
                <div class="w-full flex gap-8 mx-auto lg:mt-4">
                    <a href="#started" class="w-1/2 px-8 py-3 text-sm bg-sky-500 rounded-full text-white flex hover:bg-sky-600 items-center justify-center gap-2 lg:font-normal lg:block lg:relative">
                        Browse Features
                        <img src={{ asset('image/arrow-right-top.png') }} alt="Link" class="w-[12px] h-[12px] lg:absolute lg:right-5 lg:top-4">
                    </a>
                </div>
            </div> 

            <div class="w-full mt-[100px] px-20 grid grid-cols-1 gap-6 md:grid-cols-2 lg:mt-0 lg:w-1/2 lg:absolute lg:-top-28 lg:right-14">
                <div class="bg-slate-100 ">
                    <img src={{ asset('image/wind.png') }} alt="Wind" class="w-[80px]">
                    <div class="p-4 ">
                        <h1 class="text-2xl font-bold py-2">Fast Transfer</h1>
                        <p class="text-sm text-slate-400 leading-relaxed py-2">We work with providers who are very fast in currency transfer</p>
                        <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
                    </div>
                </div>
                <div class="bg-slate-100 ">
                    <img src={{ asset('image/emot.png') }} alt="Emot" class="w-[80px]">
                    <div class="p-4 ">
                        <h1 class="text-2xl font-bold py-2">User Experience</h1>
                        <p class="text-sm text-slate-400 leading-relaxed py-2">We provide a very impressive user experience</p>
                        <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
                    </div>
                </div>
                <div class="bg-slate-100 ">
                    <img src={{ asset('image/dollar.png') }} alt="dollar" class="w-[80px] bg-white">
                    <div class="p-4 ">
                        <h1 class="text-2xl font-bold py-2">Easy Transfer</h1>
                        <p class="text-sm text-slate-400 leading-relaxed py-2">Easy to send money to other E-Wallet Bank</p>
                        <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
                    </div>
                </div>
                <div class="bg-slate-100 ">
                    <img src={{ asset('image/kunci-pas.png') }} alt="kunci-pas" class="w-[80px]">
                    <div class="p-4 ">
                        <h1 class="text-2xl font-bold py-2">Maintenance</h1>
                        <p class="text-sm text-slate-400 leading-relaxed py-2">Monthly maintenance for our users</p>
                        <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Content 4 End -->

    <!-- Content 5 Start -->
    <div id="#about" class="w-full mt-[200px] py-[40px] bg-sky-100 lg:mt-[250px]">
        <div class="w-full mx-auto text-center relative">
            <div class="pb-5">
                <span class="text-yellow-300 text-sm lg:text-base ">View from our dashboard</span>
            </div>
            <div class="py-5">
                <h1 class="text-sky-400 mx-auto text-3xl font-bold lg:text-5xl lg:w-[750px]">Dashboard Professional for Your E-Wallet</h1>
            </div>
            <img src={{ asset('image/laptop.png') }} alt="Laptop" class="w-[450px] mx-auto lg:w-[650px]">
            <span class="py-5 text-xs text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor enim, quis ullam iure ea corrupti!</span>
            <div class="w-full flex gap-8 items-center justify-center py-5 lg:mt-4">
                <a href="#started" class="w-1/3 px-5 py-3 text-sm bg-sky-500 rounded-full text-white flex hover:bg-sky-600  hover:border-2 hover:border-sky-500 items-center justify-center gap-2 lg:font-normal lg:w-1/6" id="started">
                    Get Started
                    <img src={{ asset('image/arrow-right-top.png') }} alt="Link" class="w-[12px] h-[12px]">
                </a>
                <a href="#download" class="w-1/3 px-5 py-3 text-sm bg-white border-2 border-sky-500 rounded-full text-sky-500
                hover:bg-sky-600 hover:text-white flex items-center justify-center gap-2 lg:font-normal lg:w-1/6">
                    Download
                    <img src={{ asset('image/download.png') }} alt="Link" class="w-[20px] h-[20px] hover:bg-sky-500">
                </a>
            </div>
            <a href="#left">
                <img src={{ asset('image/left.svg') }} alt="Left-arrow" class="w-[30px] absolute top-40 left-2 lg:w-[50px] lg:top-56 lg:left-[85px]">
            </a>
            <a href="#right">
                <img src={{ asset('image/right.svg') }} alt="Left-arrow" class="w-[30px] absolute top-40 right-2 lg:w-[50px] lg:top-56 lg:right-[85px]">
            </a>
        </div>
    </div>
    <!-- Content 5 End -->


    <!-- Content 6 Start -->
    <div class="w-full my-20 ">
        <div class="w-full px-5 lg:w-1/2 lg:pl-[80px]">
            <div class="py-2 text-yellow-300 text-sm lg:text-base ">
                Testimonial
            </div>
            <div class="py-2 text-3xl font-bold lg:text-5xl">
                Our clients say
            </div>
            <div class="py-2 text-xs text-slate-500 lg:text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias officia facilis fugiat nesciunt tempore illum.
            </div>
        </div>
        <div class="w-full mt-[50px] px-7 lg:flex lg:gap-6 lg:px-[80px]">
            <div class="w-full bg-slate-100 lg:w-1/2">
                <img src={{ asset('image/microsoft2.png') }} alt="kunci-pas" class="w-[150px] px-4 py-4 bg-white">
                <div class="p-4 ">
                    <div class="py-5">
                        <p class="text-sm text-slate-400 leading-relaxed">Great experience with seduten, with easy-to-understand features and guaranted safety</p>
                    </div>
                    <div class="flex gap-4 mt-5">
                        <img src={{ asset('image/bill-gates.png') }} alt="Bill-Gates" class="w-[50px]">
                        <div class="w-full">
                            <div class="text-lg font-black">Bill Gates</div>
                            <div class="text-xs text-slate-400">Owner</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-slate-100 lg:w-1/2 mt-2">
                <img src={{ asset('image/tesla2.png') }} alt="Tesla" class="w-[150px] bg-white">
                <div class="p-4 ">
                    <div class="py-5">
                        <p class="text-sm text-slate-400 leading-relaxed">Great money storage with very large limits for saving money, safe and very reliable</p>
                    </div>
                    <div class="flex gap-4 mt-5">
                        <img src={{ asset('image/ellon-musk.png') }} alt="Ellon-Musk" class="w-[50px]">
                        <div class="w-full mb-2">
                            <div class="text-lg font-black">Ellon Reeve Musk FRS</div>
                            <div class="text-xs text-slate-400">Owner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content 6 End -->

    <!-- Footer Start -->
    <footer class="w-full bg-teal-900 lg:pr-[80px]">
        <div class="w-full lg:flex">
            <div class="w-full px-[30px] lg:w-1/3 lg:pl-[80px]">
                <div class="w-full pb-5 ">
                    <img src={{ asset('image/logo2.svg') }} alt="Logo" class="w-[100px] py-10 lg:py-16">
                    <div class="font-light text-slate-100 text-base lg:text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eius cum non alias omnis sint.</div>
                    <div class="flex gap-6 py-4 lg:py-8 ">
                        <img src={{ asset('image/fb.png') }} alt="FaceBook" class="hover:bg-slate-500 hover:rounded-full hover:border hover:border-teal-700 ">
                        <img src={{ asset('image/tw.png') }} alt="Twitter" class="hover:bg-slate-500 hover:rounded-full hover:border hover:border-teal-700 ">
                        <img src={{ asset('image/in.png') }} alt="LinkedIn" class="hover:bg-slate-500 hover:rounded-full hover:border hover:border-teal-700 ">
                        <img src={{ asset('image/ig.png') }} alt="Instagram" class="hover:bg-slate-500 hover:rounded-full hover:border hover:border-teal-700 ">
                    </div>
                    <a href="#download" class="w-1/2 px-5 py-3 text-sm bg-white  rounded-full text-sky-500  hover:bg-sky-600 hover:text-white flex items-center justify-center gap-2 lg:font-normal lg:w-full">
                        Download App 
                        <img src={{ asset('image/download.png') }} alt="Link" class="w-[20px] h-[20px] hover:bg-sky-500">
                    </a>
                </div>
            </div>
            <div class="w-full pb-4 lg:flex lg:pt-[150px] lg:2/3"> 
                <div class="w-full px-[30px] mt-6 flex lg:w-1/2 lg:px-10">
                    <div class="w-1/2 text-white ">
                        Navigation
                        <ul class="pt-5 text-slate-300 text-sm ">
                            <li class="py-1 hover:text-slate-500"><a href="#">Home</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Aboout Us</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Shop</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Our Client</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Login</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Register</a></li>
                        </ul>
                    </div>
                    <div class="w-1/2 text-white">
                        Featured
                        <ul class="pt-5 text-slate-300 text-sm ">
                            <li class="py-1 hover:text-slate-500"><a href="#">Dashboard</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Message</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">investment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-[30px] mt-6 flex lg:w-1/2 lg:pl-0">
                    <div class="w-1/2 text-white"> 
                        Form Member
                        <ul class="pt-5 text-slate-300 text-sm ">
                            <li class="py-1 hover:text-slate-500"><a href="#">Privacy Policy</a></li>
                            <li class="py-1 hover:text-slate-500"><a href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="w-1/2 text-white ">
                        Contact
                        <ul class="pt-5 text-slate-300 text-sm ">
                            <li class="py-1 flex items-center gap-2">
                                <img src={{ asset('image/pesan.png') }} alt="Message" class="w-[30px] ">
                                <a href="#">hallo@seduitenID.com </a>
                            </li>
                            <li class="py-1 flex items-center gap-2">
                                <img src={{ asset('image/pesan.png') }} alt="Message" class="w-[30px] "> 
                                <a href="#">(702) 555-0122</a>
                            </li>
                        </ul>
                    </div>
                </div>
    
            </div> 
        </div>
        <div class="w-full mt-14 pb-3 ">
            <div class="text-white text-sm px-[30px] text-right">
                Mangcoding.All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- Footer End -->

</x-app-layout>
