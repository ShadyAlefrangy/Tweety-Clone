<div class=" flex">

    <form method="POST"
          action="/tweets/{{ $tweet->id }}/like"  
    >
        @csrf
        <div class=" flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-6" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g id="original-icon" fill="#95a5a6" class=" fill-current">
                        <path d="M78.83333,14.33333l-5.55697,24.49544l-23.1097,25.67122v86h80.625l26.875,-60.46875v-25.53125h-64.5l7.16667,-28.66667l-7.16667,-21.5zM14.33333,64.5v86h21.5v-86z"></path>
                    </g>
                </g>
            </svg>

            <button type="submit" class=" text-xs">
                {{ $tweet->likes ?: 0 }}
            </button>

        </div>
    </form>

    <form
        method="POST" 
        action="/tweets/{{ $tweet->id }}/like"
    >
        @csrf
        @method('DELETE')
        <div class=" flex items-center {{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-6" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#95a5a6" class=" fill-current">
                        <path d="M7.16667,14.33333v86h28.66667v-86zM50.16667,14.33333v91.86491l51.37044,51.46843l11.84179,-11.65983l-8.39843,-38.50684h59.85286v-31.60612l-26.44108,-61.56055z"></path>
                    </g>
                </g>
            </svg>

            <button type="submit" class=" text-xs">
                {{ $tweet->dislikes ?: 0 }}
            </button>
        </div>

    </form>

</div>