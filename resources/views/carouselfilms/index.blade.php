







<div class="container">

    <div class="owl-carousel owl-theme">
        @foreach($items as $item)
            <span>  <img width="208" height="193" src="{{$item->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high"  sizes="(max-width: 298px) 100vw, 298px" />                            <!-- <div class="title_cat_image">
                                </div>-->

      <p style="font-size: 11px; width: 209px;"> {{$item->title}}</p>
             </span>
        @endforeach
    </div>

</div>







