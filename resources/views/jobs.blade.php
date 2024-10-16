<x-wrapper>


    <x-slot:page_title>
        Jobs Page
    </x-slot:page_title>

    This is the jobs listings.

    <hr/>

    @foreach ($jobs as $job) 

        <li><a href="/job/{{ $job['id'] }}">{{ $job['title'] }}</a></li>

    @endforeach

</x-wrapper>