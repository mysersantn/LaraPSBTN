<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    @if (session()->has('message'))
        @include('components.alert-message-confirm-my')
    @endif

    <div class="grid lg:grid-cols-8 gap-8">
        <div class="col-span-2 sticky top-16" style="height: 1000px;">
            @include('livewire.pendaftarans.pendaftaran-menu')
        </div>
        <div class="col-span-6">
            <div class="p-2 lg:p-4 bg-white border-b border-gray-200 rounded-xl">

            </div>
        </div>
    </div>
