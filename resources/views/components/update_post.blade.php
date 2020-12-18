@props(['post' =>$post])
@if (auth()->user()->id === $post->user_id || auth()->user()->role === 'admin')
                <tr>
                    <th colspan="3"
                        style="background-image: linear-gradient(to top, #f7b3d8 0%, #f8e1f3 100%);">{{ $post->user->user_name }},
                          <span>{{ $post->created_at->diffForHumans() }} </span>

                           @can('delete', $post)
                            <form action="{{ route('delete-post', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obrisi post</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $post)
                                <a href="{{ route('update-post', $post) }}" class="float-right btn-secondary btn-sm mx-1">Azuriraj post</a>
                            @endcan


                    </th>
                </tr>


                    <tr>

                        <td>{{ $post->title }}</td>
                        <td>{!! Str::words($post->content, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $post->image }}" alt="" width="100"></td>
                    </tr>
@endif

