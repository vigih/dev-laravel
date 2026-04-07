<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <x-textfield name="name" label="Name" icon="account_circle" color="secondary" />
        <x-textfield name="email" label="Email" icon="email" color="secondary" />
        <x-textfield name="password" label="Password" type="password" icon="password" color="secondary" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
