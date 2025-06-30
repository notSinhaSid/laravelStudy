<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Center') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- post creation form --}}
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="display: flex; gap: 24px; align-items: flex-start;">
                <!-- Form Section -->
                <div style="flex: 1; background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); border: 2px solid #93c5fd; border-radius: 12px; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <h1 style="padding: 24px; font-size: 24px; font-weight: bold; color: #1e40af; margin: 0;">Edit Post</h1>
                    <hr style="border: none; border-top: 2px solid #93c5fd; margin: 0;">
                    
                    <form action="{{route('update-post', $post->id)}}" method="POST" style="width: 100%; padding: 24px;">
                        @csrf
                        @method('PUT')
                        <div style="margin-bottom: 24px;">
                            <label for="title" style="display: flex; align-items: center; color: #1e40af; font-weight: 600; font-size: 18px; margin-bottom: 12px; letter-spacing: 0.025em;">📝 Title</label>
                            <input type="text" style="border: 2px solid #93c5fd; border-radius: 8px; width: 100%; padding: 12px 16px; background-color: white; color: #1e3a8a; outline: none; box-sizing: border-box;" id="title" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='#93c5fd'" name="title" value="@if(isset($post)){{$post->title}}@endif">
                        </div>
                        <div style="margin-bottom: 24px;">
                            <label for="content" style="display: flex; align-items: center; color: #1e40af; font-weight: 600; font-size: 18px; margin-bottom: 12px; letter-spacing: 0.025em;">✒️ Content</label>
                            <textarea style="border: 2px solid #93c5fd; border-radius: 8px; width: 100%; padding: 12px 16px; background-color: white; color: #1e3a8a; outline: none; height: 128px; resize: vertical; box-sizing: border-box;" id="content" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='#93c5fd'" name="content">@if(isset($post)){{$post->content}}@endif</textarea>
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="submit" style="background-color: #7c3aed; color: white; padding: 12px 40px; border-radius: 8px; font-weight: bold; border: none; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" onmouseover="this.style.backgroundColor='#6d28d9'" onmouseout="this.style.backgroundColor='#7c3aed'" name="update">
                                Update Post
                            </button>
                        </div>
                    </form>
                    @if (session('message'))
                        <div style="margin: 24px; padding: 16px; background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%); border: 2px solid #86efac; border-radius: 8px; color: #166534; font-weight: 600; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            ✅ {{ session('message') }}
                        </div>
                    @endif
                </div>
                
                <!-- Image Section -->
                <div style="flex: 0 0 300px; display: flex; align-items: center; justify-content: center;">
                    <div style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border: 2px solid #bae6fd; border-radius: 12px; padding: 24px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div style="font-size: 80px; margin-bottom: 16px;">✍️</div>
                        <h3 style="color: #0369a1; font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Start Writing</h3>
                        <p style="color: #0284c7; font-size: 14px; margin: 0; line-height: 1.5;">Share your thoughts and ideas with the world. Create engaging content that inspires others.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
