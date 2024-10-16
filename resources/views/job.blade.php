<x-wrapper>


    <x-slot:page_title>
        Job Page
    </x-slot:page_title>

    <div>
	    <label>ID</label> {{ $job['id'] }}
	</div>

	<div>
	    <label>Title</label> {{ $job['title'] }}
    </div>

    <div>
	    <label>Salary</label> {{ $job['salary'] }}
	</div>

</x-wrapper>