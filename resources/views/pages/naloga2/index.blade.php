@extends('layouts.naloga2')

@section('title')
    SSI - Tilen Sapač 
@endsection
    @section('content')
    <style>
        .drugi_odstavek
        {
            font-family: Verdana;
            font-size: 10px;
            color: red;
            text-align: justify;
        }
    </style>
    <div class="p-5">
        <a href="/naloga-2/predloga" class="mr-2 font-bold text-md text-white bg-sky-500 px-2 py-1 rounded hover:bg-sky-600 transition-all duration-200">
            Predloga
        </a>
        <a href="/naloga-2/css_napredno" class="mx-2 font-bold text-md text-white bg-sky-500 px-2 py-1 rounded hover:bg-sky-600 transition-all duration-200">
            CSS napredno
        </a>
        <a href="/naloga-2/meni" class="mx-2 font-bold text-md text-white bg-sky-500 px-2 py-1 rounded hover:bg-sky-600 transition-all duration-200">
            Meni
        </a>
        <h3 style="font-family: Verdana" class="font-bold pb-4 pt-2 rdec_h3">Implicitno naveden stil</h3>
        <p style="font-family: Verdana, sans-serif; font-size: 12px;">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mi tortor, viverra vitae, 
            vehicula fermentum, venenatis eu, enim. Etiam ultrices magna sed felis. Phasellus a 
            mauris vitae lectus iaculis interdum. Ut ullamcorper lacus eu quam. Donec sagittis urna 
            quis ligula. Ut blandit. Vivamus sed metus eu tellus condimentum ullamcorper. Nullam arcu. 
            Integer posuere velit pellentesque eros pellentesque tincidunt. Aenean velit dui, aliquet 
            sed, ornare ac, adipiscing eu, lacus. Class aptent taciti sociosqu ad litora torquent per 
            conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Sed mi tortor, viverra vitae, vehicula fermentum, venenatis eu, enim. 
            Etiam ultrices magna sed felis. Phasellus a mauris vitae lectus iaculis interdum. Ut 
            ullamcorper lacus eu quam. Donec sagittis urna quis ligula. Ut blandit. Vivamus sed metus 
            eu tellus condimentum ullamcorper. Nullam arcu. Integer posuere velit pellentesque eros 
            pellentesque tincidunt. Aenean velit dui, aliquet sed, ornare ac, adipiscing eu, lacus. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
        </p>

        <h3 style="font-family: Verdana" class="font-bold py-4 zelen_h3">Interni stil</h3>
        <p class="drugi_odstavek">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mi tortor, viverra vitae, 
            vehicula fermentum, venenatis eu, enim. Etiam ultrices magna sed felis. Phasellus a 
            mauris vitae lectus iaculis interdum. Ut ullamcorper lacus eu quam. Donec sagittis urna 
            quis ligula. Ut blandit. Vivamus sed metus eu tellus condimentum ullamcorper. Nullam arcu. 
            Integer posuere velit pellentesque eros pellentesque tincidunt. Aenean velit dui, aliquet 
            sed, ornare ac, adipiscing eu, lacus. Class aptent taciti sociosqu ad litora torquent per 
            conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Sed mi tortor, viverra vitae, vehicula fermentum, venenatis eu, enim. 
            Etiam ultrices magna sed felis. Phasellus a mauris vitae lectus iaculis interdum. Ut 
            ullamcorper lacus eu quam. Donec sagittis urna quis ligula. Ut blandit. Vivamus sed metus 
            eu tellus condimentum ullamcorper. Nullam arcu. Integer posuere velit pellentesque eros 
            pellentesque tincidunt. Aenean velit dui, aliquet sed, ornare ac, adipiscing eu, lacus. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
        </p>

        <h3 style="font-family: Verdana" class="font-bold py-4 rumen_h3">Zunanji stil - razred</h3>
        <p class="zunanji_razdred">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mi tortor, viverra vitae, 
            vehicula fermentum, venenatis eu, enim. Etiam ultrices magna sed felis. Phasellus a 
            mauris vitae lectus iaculis interdum. Ut ullamcorper lacus eu quam. Donec sagittis urna 
            quis ligula. Ut blandit. Vivamus sed metus eu tellus condimentum ullamcorper. Nullam arcu. 
            Integer posuere velit pellentesque eros pellentesque tincidunt. Aenean velit dui, aliquet 
            sed, ornare ac, adipiscing eu, lacus. Class aptent taciti sociosqu ad litora torquent per 
            conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Sed mi tortor, viverra vitae, vehicula fermentum, venenatis eu, enim. 
            Etiam ultrices magna sed felis. Phasellus a mauris vitae lectus iaculis interdum. Ut 
            ullamcorper lacus eu quam. Donec sagittis urna quis ligula. Ut blandit. Vivamus sed metus 
            eu tellus condimentum ullamcorper. Nullam arcu. Integer posuere velit pellentesque eros 
            pellentesque tincidunt. Aenean velit dui, aliquet sed, ornare ac, adipiscing eu, lacus. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
        </p>

        <h3 style="font-family: Verdana" class="font-bold py-4 moder_h3">Zunanji stil - ID</h3>
        <p id="zunanji_id">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mi tortor, viverra vitae, 
            vehicula fermentum, venenatis eu, enim. Etiam ultrices magna sed felis. Phasellus a 
            mauris vitae lectus iaculis interdum. Ut ullamcorper lacus eu quam. Donec sagittis urna 
            quis ligula. Ut blandit. Vivamus sed metus eu tellus condimentum ullamcorper. Nullam arcu. 
            Integer posuere velit pellentesque eros pellentesque tincidunt. Aenean velit dui, aliquet 
            sed, ornare ac, adipiscing eu, lacus. Class aptent taciti sociosqu ad litora torquent per 
            conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Sed mi tortor, viverra vitae, vehicula fermentum, venenatis eu, enim. 
            Etiam ultrices magna sed felis. Phasellus a mauris vitae lectus iaculis interdum. Ut 
            ullamcorper lacus eu quam. Donec sagittis urna quis ligula. Ut blandit. Vivamus sed metus 
            eu tellus condimentum ullamcorper. Nullam arcu. Integer posuere velit pellentesque eros 
            pellentesque tincidunt. Aenean velit dui, aliquet sed, ornare ac, adipiscing eu, lacus. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
        </p>
    </div>
@endsection