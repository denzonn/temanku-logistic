<div class="flex flex-col h-full justify-between text-gray-600">
    <ul class="flex flex-col gap-4 menu text-base">
        <li class="flex justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-24">
        </li>
        <li
            class="{{ request()->is('admin/dashboard*') ? 'bg-primary text-white' : '' }} py-2 px-6 rounded-md  hover:bg-primary hover:text-white transition flex flex-row items-center gap-2">
            <i class="fa-solid fa-house pr-1"></i><a href="/admin/dashboard" class="p-0"> Dashboard</a>
        </li>
        <li
            class="{{ request()->is('admin/product*') ? 'bg-primary text-white' : '' }} py-2 px-6 rounded-md  hover:bg-primary hover:text-white transition flex flex-row items-center gap-2">
            <i class="fa-solid fa-dolly pr-1"></i><a href="/admin/product" class="p-0"> Product</a>
        </li>
        <li
            class="{{ request()->is('admin/testimonial*') ? 'bg-primary text-white' : '' }} py-2 px-6 rounded-md  hover:bg-primary hover:text-white transition flex flex-row items-center gap-2">
            <i class="fa-solid fa-comments text-sm pr-1"></i><a href="/admin/testimonial" class="p-0"> Testimoni</a>
        </li>
    </ul>
    <div>
        <ul>
            <li class="py-2 rounded-md px-6 hover:bg-red-500 hover:text-white  transition">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fa-solid fa-right-from-bracket pr-1"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
