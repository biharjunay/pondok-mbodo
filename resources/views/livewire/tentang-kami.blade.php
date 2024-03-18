<div class="overflow-x-hidden">
    <x-navbar />
    <x-header :text="'Tentang Kami'"/>
    <div class="flex flex-wrap justify-center gap-5 lg:p-20">
        <x-card :name="'sejarah'"/>
        <x-card :name="'pendiri'"/>
        <x-card :name="'pengurus'"/>
        <x-card :name="'peraturan'"/>
    </div>
    <x-footer />
</div>
