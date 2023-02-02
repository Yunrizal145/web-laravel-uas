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
            <a href="{{url('admin/home/cards')}}" class="w-1/2 px-8 py-3 text-sm bg-sky-500 rounded-full text-white flex hover:bg-sky-600 items-center justify-center gap-2 lg:font-normal lg:block lg:relative">
                Browse Features
                <img src={{ asset('image/arrow-right-top.png') }} alt="Link" class="w-[12px] h-[12px] lg:absolute lg:right-5 lg:top-4">
            </a>
        </div>
    </div> 

    @foreach ($cards as $card)
    
    <div class="w-full mt-[100px] px-20 grid grid-cols-1 gap-6 md:grid-cols-2 lg:mt-0 lg:w-1/2 lg:absolute lg:-top-28 lg:right-14">
        <div class="bg-slate-100 ">
            <img src={{ asset($card->image) }} alt="Wind" class="w-[80px]">
            <div class="p-4 ">
                <h1 class="text-2xl font-bold py-2">{{ $card->title }}</h1>
                <p class="text-sm text-slate-400 leading-relaxed py-2">{{ $card->description }}</p>
                <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
            </div>
        </div>
        <div class="bg-slate-100 ">
            <img src={{ asset($card->image) }} alt="Wind" class="w-[80px]">
            <div class="p-4 ">
                <h1 class="text-2xl font-bold py-2">{{ $card->title }}</h1>
                <p class="text-sm text-slate-400 leading-relaxed py-2">{{ $card->description }}</p>
                <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
            </div>
        </div>
        <div class="bg-slate-100 ">
            <img src={{ asset($card->image) }} alt="Wind" class="w-[80px]">
            <div class="p-4 ">
                <h1 class="text-2xl font-bold py-2">{{ $card->title }}</h1>
                <p class="text-sm text-slate-400 leading-relaxed py-2">{{ $card->description }}</p>
                <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
            </div>
        </div>
        <div class="bg-slate-100 ">
            <img src={{ $card->image }} alt="Wind" class="w-[80px]">
            <div class="p-4 ">
                <h1 class="text-2xl font-bold py-2">{{ $card->title }}</h1>
                <p class="text-sm text-slate-400 leading-relaxed py-2">{{ $card->description }}</p>
                <a href="#readmore" class="font-semibold text-sky-500 py-4 hover:text-sky-700">Read More</a>
            </div>
        </div>
    </div>
    @endforeach

</div>