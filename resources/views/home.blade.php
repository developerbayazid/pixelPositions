<x-layout>

    <div class="space-y-10 mb-10">

        <section class="text-center pt-10">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job.</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="bg-white/5 rounded-xl px-5 py-4 w-full max-w-lg">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1 space-y-2">
                <x-tag size="base">Developer</x-tag>
                <x-tag size="base">Frontend</x-tag>
                <x-tag size="base">Backend</x-tag>
                <x-tag size="base">API</x-tag>
                <x-tag size="base">Blockchain</x-tag>
                <x-tag size="base">Manager</x-tag>
                <x-tag size="base">Laravel</x-tag>
                <x-tag size="base">Graphic</x-tag>
                <x-tag size="base">Producer</x-tag>
                <x-tag size="base">React</x-tag>
                <x-tag size="base">Vue</x-tag>
                <x-tag size="base">HTML</x-tag>
                <x-tag size="base">CSS</x-tag>
                <x-tag size="base">Tailwind</x-tag>
                <x-tag size="base">Typescript</x-tag>
                <x-tag size="base">Wordpress</x-tag>
                <x-tag size="base">Theme</x-tag>
                <x-tag size="base">Plugin</x-tag>
                <x-tag size="base">AWS</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>

</x-layout>
