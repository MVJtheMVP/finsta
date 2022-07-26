<x-layout>

<ul class="no-bullets">
    @foreach ($posts as $post)
    <x-individual-post :post="$post" />   
    @endforeach
</ul>

</x-layout>
