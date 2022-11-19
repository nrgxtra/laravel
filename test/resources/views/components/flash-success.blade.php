@if(session()->has('success'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="fixed top-10 text-purple-500 px-48 py-3">
        <p>
            {{session('success')}}
        </p>
    </div>
@endif
