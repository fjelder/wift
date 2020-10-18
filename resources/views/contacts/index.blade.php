<x-app-layout>
    <x-slot name="header_title">
        Kontakty
    </x-slot>
    <x-slot name="header_small">
        Lista kontaktów w systemie
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h5>Hello Card</h5>
            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-trash-2 close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
           <div class="row m-b-30">
            <div class="col-sm-12">
                <div class="sub-title">Lista kontaktów</div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#osoby" role="tab">Osoby</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#podmioty" role="tab">Podmioty</a>
                        <div class="slide"></div>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="osoby" role="tabpanel">
                        <p class="m-0">1. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                    </div>
                    <div class="tab-pane" id="podmioty" role="tabpanel">
                        <p class="m-0">2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
