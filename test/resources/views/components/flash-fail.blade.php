@if(session()->has('fail'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="fixed top-10 text-red-500 px-48 py-3">
        <p>
            {{session('fail')}}
        </p>
    </div>
@endif
