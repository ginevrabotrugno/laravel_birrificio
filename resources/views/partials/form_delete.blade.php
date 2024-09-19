<form class="d-inline" action="{{ route('beers.destroy', $beer) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare: {{ $beer->name }}')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
</form>
