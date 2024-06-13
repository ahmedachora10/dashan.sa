<div id="posts" class="row no-gutter" style="position: relative; height: 1584px;">
    @foreach ($works as $item)
        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4"
            style="position: absolute; left: 0px; top: 0px;">
            <a href="{{ asset($item->thumbnail) }}" class="item-wrap" data-fancybox="gallery2">
                <span class="icon-add"></span>
                <img class="img-fluid" src="{{ asset($item->thumbnail) }}">
            </a>
        </div>
    @endforeach
</div>
