<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="w-11/12 mx-auto rounded-md h-160 relative">
        <x-sections.section-majors.majors-text :majors="$majors"></x-sections.section-majors.majors-text>
        <x-sections.section-majors.majors-item :majors="$majors"></x-sections.section-majors.majors-item>
    </section>
    <x-sections.section-news.news :newses="$newses"></x-sections.section-news.news>
    <section class="w-11/12 flex flex-col items-center gap-18 mt-20" id="hubungi">
        <x-sections.section-contact.location></x-sections.section-contact.location>
        @if (session()->has('successMessage'))
            <div id="flash"
                class="bg-green-100/50 w-lg rounded-sm flex justify-between items-center text-green-700 p-4 self-start font-semibold ml-3 -mb-13">
                {{ session('successMessage') }} <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
            </div>
        @endif
        <x-sections.section-contact.contact-form></x-sections.section-contact.contact-form>
    </section>
</x-layout.layout>
