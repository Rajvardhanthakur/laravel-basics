<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    @if(session()->has('message'))
                
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif
</div>