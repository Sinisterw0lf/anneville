@props(['post'])

<div>
  <form action="{{ route('users.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?)">
    @csrf
    @method('DELETE')
    <button class="btn btn-error rounded-md p-2 text-xl shadow-sm shadow-black font-bold">
      Supprimer
    </button>
  </form>

</div>
