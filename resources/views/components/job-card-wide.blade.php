@props(['job'])

<x-panel class="flex gap-x-3">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-xs text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="text-xl font-bold mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="mt-auto text-xs text-gray-400">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div>
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-panel>
