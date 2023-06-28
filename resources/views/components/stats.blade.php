 @props([
    'title' => '',
    'icon' => '',
    'count' => '',
])
 <div class="bg-white border-b-2 border-red-400 overflow-hidden relative rounded-lg p-3">
    {{$icon}}
      <div class="mt-3 relative z-10">
        <h1 class="text-2xl text-gray-600 font-bold">{{$count}}</h1>
        <h1 class="text-sm">{{$title}}</h1>
      </div>
      <div class="absolute -bottom-2 -right-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-20 w-20 fill-gray-100 opacity-80">
          {{$slot}}
        </svg>
      </div>
    </div>