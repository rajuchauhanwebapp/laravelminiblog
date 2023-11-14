<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ __('Post') }}
       </h2>
   </x-slot>
   <div style="padding: 1% 6%;">
      <div style="border: 1px solid white;
      border-radius: 8px;
      padding: 0% 0% 2% 0%;">
         <h1 style="
         background: #001c32db;
         font-weight: 700;
         padding: 1% 0%;
         color: white;
         border-top-right-radius: 8px;
         border-top-left-radius: 8px;
         text-align: center;
         font-size: 24px;
         box-shadow: 0px 3px 3px white;
         text-transform: uppercase;">Edit Post</h1>
         <form action="" method="POST">
            @csrf
            <div class="form-group" style="margin: 2% 4% 0%;">
            <label for="id_title" style="color: white;">Titile</label><br>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="id_title" style="border-radius: 8px;">
            </div>
            <div class="form-group" style="margin: 2% 4% 0%;">
               <label for="id_body" style="color: white;">Body</label><br>
               <textarea class="form-control" name="body" id="id_body" rows="3" style="border-radius: 8px;width: 100%;">{{ $post->body }}
               </textarea>
            </div>
            <div class="form-group" style="margin: 2% 4% 0%;
            text-align: center;">
            <input type="submit" value="Update Post" style="
            background: #5bc9ab;
            padding: 4px 14px;
            border-radius: 16px;
            text-transform: uppercase;
            color: #ffffff;
            font-weight: 500;
            box-shadow: 0px 0px 3px 2px #eeceee;
            cursor: pointer;
            border: 2px solid #7594ea;">
            </div>
            
         </form>
      </div>
   </div>
</x-app-layout>