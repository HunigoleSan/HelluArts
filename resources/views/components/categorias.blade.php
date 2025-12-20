<a href="{{$cat['nombre_categoria']}}" class="img-skew">
    <p id="stolas" class="img-title">{{mb_strtoupper($cat['nombre_categoria'], 'UTF-8')}}</p>  
    <img src="{{asset('images/web/' . $cat['picture'])}}" alt="{{$cat['nombre_categoria']}} de HelluArts">
</a>