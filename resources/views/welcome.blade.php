<x-main>
    @if (session()->has('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    <x-about/>
    <x-resume/>
    <x-services/>
    <x-portfolio/>
    <x-contact-layout/>
</x-main>
