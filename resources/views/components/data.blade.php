@if (session()->has('success'))

    <div x-data="{show:true}"
        x-init="setTimeout(() => show = false,1000)"  
        x-show="show" 

        class="alert alert-success alert-message p-3" role="alert">
        
        <p>{{session('success')}}</p>
    </div>


@endif
