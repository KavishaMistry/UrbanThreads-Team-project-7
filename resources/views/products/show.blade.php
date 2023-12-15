<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="flex flex-col items-center mt-16 bg-white bg-opacity-40 border-2 shadow-md backdrop-blur-sm w-fit lg:flex-row border-navy-blue">
            <div class=" w-80  md:w-[30rem] aspect-square bg-snow-white ">
                <img src="{{ $product->image }}" alt="">
            </div>
            {{-- content --}}
            <div class="mt-10 lg:mt-0 md:px-7 xl:px-20">
                <div>
                    <h1 class="text-4xl font-formula1 text-bluish-purple">{{ $product->name }}</h1>
                    <p class="mb-8 text-lg font-bold font-formula1">£{{ $product->selling_price }}</p>
                </div>
                <div class="">
                    <h1 class="text-xl font-formula1 text-bluish-purple">Description</h1>
                    <p class="max-w-xl whitespace-normal break-words">
                        {{ $product->description }}
                    </p>
                </div>
                <div class="my-10 text-center">
                    <form action="{{ route('basket.add', ['productId' => $product->id]) }}" method="post">
                        @csrf
                        <x-primary-button-dark class="px-5 w-full">Add to Basket</x-primary-button-dark>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
