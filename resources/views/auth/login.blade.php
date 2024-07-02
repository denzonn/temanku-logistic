<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('includes.style')
</head>

<body class="bg-gray-100">
    <div class="h-screen relative">
        <div class="absolute bottom-1/2 right-0 translate-y-1/2 z-0">
            <img src="{{ asset('images/background.png') }}" alt="" class="w-[70vw]">
        </div>
        <div class="grid grid-cols-2 h-screen z-10 space-x-0 gap-0">
            <div class="flex flex-col justify-center px-20">
                <div class="text-[88px] leading-none font-bold">
                    <div class="text-[75px] bg-primary text-white w-fit px-8 py-1 rounded-md">TEMANKU</div><div class="tracking-wider">LOGISTIC</div>
                </div>
                <div class="mt-8 pr-20">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-xl font-medium mb-2 text-gray-500">
                                Email
                            </label>
                            <input id="email" type="email"
                                class="bg-transparent border rounded-md w-full px-4 py-3 font-medium @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback font-medium text-red-500 mb-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-xl font-medium mb-2 text-gray-500">
                                Password
                            </label>
                            <input id="password" type="password"
                                class="bg-transparent border rounded-md w-full px-4 py-3 font-medium @error('password') is-invalid @enderror"
                                placeholder="Password" name="password">
                            @error('password')
                                <span class="invalid-feedback font-medium text-red-500  mb-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <button type="submit"
                                class="bg-primary text-white text-third px-4 py-3 w-full rounded-lg font-semibold">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
