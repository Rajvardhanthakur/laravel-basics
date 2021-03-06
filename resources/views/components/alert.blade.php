<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    @if(session()->has('message'))
                
        <div class="py-4 px-2 bg-green-300">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
        <div class="py-4 px-2 bg-red-300">
            {{session()->get('error')}}
        </div>
    @endif

    <!-- If we have validation error it will show up -->

    @if ($errors->any())
    <div class="py-4 px-2 bg-red-300"">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
