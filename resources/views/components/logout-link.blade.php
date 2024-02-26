{{-- <a href="{{ route('logout') }}"
 onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
 {{ $attributes->class(['group flex w-full items-start border-t-2 border-b-2 border-traivis-500 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ']) }}>

 <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
 viewbox="0 0 24 24" fill="currentColor" aria-hidden="true">
 <path
 d="M11.476,15a1,1,0,0,0-1,1v3a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7.476a3,3,0,0,1,3,3V8a1,1,0,0,0,2,0V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7.476a5.006,5.006,0,0,0,5-5V16A1,1,0,0,0,11.476,15Z">
 </path>
 <path
 d="M22.867,9.879,18.281,5.293a1,1,0,1,0-1.414,1.414l4.262,4.263L6,11a1,1,0,0,0,0,2H6l15.188-.031-4.323,4.324a1,1,0,1,0,1.414,1.414l4.586-4.586A3,3,0,0,0,22.867,9.879Z">
 </path>
 </svg>
 <div class="ml-4">
 <span>Logout</span>
 </div>
 </a>
 <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
 </form> --}}

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"
        {{ $attributes }}>
        {{ $slot }}
    </a>
</form>
