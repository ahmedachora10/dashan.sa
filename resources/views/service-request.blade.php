<x-front-layout>
    <div class="py-4"></div>
    <section class="site-section">
        <div class="container">
            <div class="col-md-10 col-11 mx-auto shadow-sm">
                <h4 class="mb-3 p-4 border-bottom text-primary">طلب خدمة "{{ $service->title }}"</h4>
                <div class="p-4">
                    <livewire:store-service-request :service="$service" />
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
